@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Post</h1>
</div>

<div class="col-lg-8">
  <form method="POST" action="/dashboard/posts/{{ $post->slug }}" class="mb-5" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control @error('title')
          is-invalid
      @enderror" id="title" name="title" required autofocus value="{{ old('title', $post->title) }}">
      @error('title')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror  
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control @error('slug')
      is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $post->slug) }}">
      @error('slug')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="category" class="form-label">Category</label>
      <select class="form-select" name="category_id">
        @foreach ($categories as $category)
          @if (old('category_id', $post->category_id) == $category->id)
            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
          @else
            <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endif
        @endforeach

      </select>
    </div>

    {{-- Bagian image --}}
    <div class="mb-3">
      {{-- Label image --}}
      <label for="image" class="form-label">Post Image</label>

      {{-- Mengirim data image lama --}}
      <input type="hidden" name="oldImage" value="{{ $post->image }}">

      {{-- Jika ada image lama --}}
      @if ($post->image)
        {{-- Tampilkan image tersebut --}}
        <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
      {{-- Jika tidak ada --}}
      @else
        {{-- Tampilkan image kosong --}}
        <img class="img-preview img-fluid mb-3 col-sm-5">
      @endif
      <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">


    @error('image')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      {{-- Bagian body --}}
      <div class="mb-3">
        {{-- Label body --}}
        <label for="body" class="form-label">Body</label>
        {{-- Menampilkan error jika body tidak valid --}}
        @error('body')
          <p class="text-danger">{{ $message }}</p>
        @enderror
        {{-- Input body --}}
        <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
        {{-- Menampilkan editor --}}
        <trix-editor input="body"></trix-editor>
      </div>
      {{-- Button edit post --}}
      <button type="submit" class="btn btn-primary">Edit Post</button>
    </form>
  </div>
  {{-- Script untuk slug dan trix editor --}}
  <script>
    // Mengambil element title dan slug
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');
    // Mengubah slug jika title berubah
    title.addEventListener('change', function() {
      // Mengambil value dari title
      fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json()) // Mengubah response menjadi json
        .then(data => slug.value = data.slug) // Mengubah value dari slug menjadi data.slug
    });
    // Menangani event ketika trix-editor diubah
    document.addEventListener('trix-file-accept', function(e) {
      e.preventDefault();
   });
    // Menangani image preview
    function previewImage() {
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');
      imgPreview.style.display = 'block';
      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);
      oFReader.onload = function(oFREVent) {
        imgPreview.src = oFREVent.target.result;
      }
    }
</script>
@endsection