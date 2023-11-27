<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();


        Category::create([
            'name' =>'Web Programing',
            'slug' => 'web-programing'
        ]);
        Category::create([
            'name' =>'Personal',
            'slug' => 'personal'
        ]);


        Post::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'=>'Moch Priamitra',
            'username' => "alif",
            'email'=>'alif@gmail.com',
            'password'=>bcrypt('12345')
        ]);

        // User::create([
        //     'name'=>'Diva Nur',
        //     'email'=>'diva@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);

        

        // Post::create([
        //     'title'=> 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia reiciendis dolorum sint',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia reiciendis dolorum sint voluptates totam ab magnam unde accusantium odio beatae cumque fugiat culpa vel, cupiditate dolore, consectetur alias veniam voluptate animi ea distinctio, quo rem quae nostrum! Ea et itaque quisquam eos autem neque iusto error repellendus accusamus dicta, dolorem aliquam modi quas asperiores facilis blanditiis ducimus dolore obcaecati quidem odio aliquid animi amet. Autem explicabo earum aperiam quas, cupiditate a fugiat! Eaque voluptatibus quo cum a dignissimos facere hic veniam laudantium. Distinctio ea minima maiores suscipit animi nam odio quisquam expedita, dicta nobis magnam iure repellat veniam esse unde eius nisi sunt necessitatibus error, deserunt modi provident nemo aspernatur. Porro possimus nisi voluptates quam nam amet aperiam labore explicabo.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title'=> 'Judul Keuda',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia reiciendis dolorum sint',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia reiciendis dolorum sint voluptates totam ab magnam unde accusantium odio beatae cumque fugiat culpa vel, cupiditate dolore, consectetur alias veniam voluptate animi ea distinctio, quo rem quae nostrum! Ea et itaque quisquam eos autem neque iusto error repellendus accusamus dicta, dolorem aliquam modi quas asperiores facilis blanditiis ducimus dolore obcaecati quidem odio aliquid animi amet. Autem explicabo earum aperiam quas, cupiditate a fugiat! Eaque voluptatibus quo cum a dignissimos facere hic veniam laudantium. Distinctio ea minima maiores suscipit animi nam odio quisquam expedita, dicta nobis magnam iure repellat veniam esse unde eius nisi sunt necessitatibus error, deserunt modi provident nemo aspernatur. Porro possimus nisi voluptates quam nam amet aperiam labore explicabo.',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'title'=> 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia reiciendis dolorum sint',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia reiciendis dolorum sint voluptates totam ab magnam unde accusantium odio beatae cumque fugiat culpa vel, cupiditate dolore, consectetur alias veniam voluptate animi ea distinctio, quo rem quae nostrum! Ea et itaque quisquam eos autem neque iusto error repellendus accusamus dicta, dolorem aliquam modi quas asperiores facilis blanditiis ducimus dolore obcaecati quidem odio aliquid animi amet. Autem explicabo earum aperiam quas, cupiditate a fugiat! Eaque voluptatibus quo cum a dignissimos facere hic veniam laudantium. Distinctio ea minima maiores suscipit animi nam odio quisquam expedita, dicta nobis magnam iure repellat veniam esse unde eius nisi sunt necessitatibus error, deserunt modi provident nemo aspernatur. Porro possimus nisi voluptates quam nam amet aperiam labore explicabo.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
