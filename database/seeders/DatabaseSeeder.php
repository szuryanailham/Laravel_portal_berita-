<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\User;
use App\models\Category;
use App\models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       User::factory(3)->create();

       
       Category::create([
        'name' => 'Web Programming',
        'slug' => 'web-programming'
    ]);

    Category::create([
        'name' => 'Personal',
        'slug' => 'Personal'
    ]);
    Category::create([
        'name' => ' Web Design',
        'slug' => 'Web Design'
    ]);
    
    Post::factory(20)->create(); 
        // User::create([
        //     'name' => 'Ilham Suryana',
        //     'email'=> 'ilham@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'James Bone',
        //     'email'=> 'James@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);

        // Post::create([
        //     'title'=>'judul Pertama',
        //     'slug'=> 'judul pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae a id quos dolore, saepe odio fugit blanditiis,',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae a id quos dolore, saepe odio fugit blanditiis, quidem sit nobis temporibus itaque dolores libero sapiente quis vero ut doloremque nemo aliquam earum reiciendis minima quisquam distinctio? Maxime eos dicta minus quaerat magnam veritatis deleniti officiis, harum reiciendis esse cumque odio ducimus, corporis mollitia. Est enim, cumque cum cupiditate libero veritatis unde! At amet vel vitae animi et nobis alias, dolorem consectetur maxime! Error, vel voluptatibus accusamus excepturi voluptatem minima aspernatur eveniet quae sit, quaerat aliquid officia nemo eos odio quasi voluptates dignissimos mollitia qui! Impedit, itaque at. Veritatis, perspiciatis repellat.',
        //     'category_id' => 1,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'title'=>'judul kedua',
        //     'slug'=> 'judul kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae a id quos dolore, saepe odio fugit blanditiis,',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae a id quos dolore, saepe odio fugit blanditiis, quidem sit nobis temporibus itaque dolores libero sapiente quis vero ut doloremque nemo aliquam earum reiciendis minima quisquam distinctio? Maxime eos dicta minus quaerat magnam veritatis deleniti officiis, harum reiciendis esse cumque odio ducimus, corporis mollitia. Est enim, cumque cum cupiditate libero veritatis unde! At amet vel vitae animi et nobis alias, dolorem consectetur maxime! Error, vel voluptatibus accusamus excepturi voluptatem minima aspernatur eveniet quae sit, quaerat aliquid officia nemo eos odio quasi voluptates dignissimos mollitia qui! Impedit, itaque at. Veritatis, perspiciatis repellat.',
        //     'category_id' => 1,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'title'=>'judul ketiga',
        //     'slug'=> 'judul ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae a id quos dolore, saepe odio fugit blanditiis,',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae a id quos dolore, saepe odio fugit blanditiis, quidem sit nobis temporibus itaque dolores libero sapiente quis vero ut doloremque nemo aliquam earum reiciendis minima quisquam distinctio? Maxime eos dicta minus quaerat magnam veritatis deleniti officiis, harum reiciendis esse cumque odio ducimus, corporis mollitia. Est enim, cumque cum cupiditate libero veritatis unde! At amet vel vitae animi et nobis alias, dolorem consectetur maxime! Error, vel voluptatibus accusamus excepturi voluptatem minima aspernatur eveniet quae sit, quaerat aliquid officia nemo eos odio quasi voluptates dignissimos mollitia qui! Impedit, itaque at. Veritatis, perspiciatis repellat.',
        //     'category_id' => 2,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'title'=>'judul ke-empat',
        //     'slug'=> 'judul ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae a id quos dolore, saepe odio fugit blanditiis,',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae a id quos dolore, saepe odio fugit blanditiis, quidem sit nobis temporibus itaque dolores libero sapiente quis vero ut doloremque nemo aliquam earum reiciendis minima quisquam distinctio? Maxime eos dicta minus quaerat magnam veritatis deleniti officiis, harum reiciendis esse cumque odio ducimus, corporis mollitia. Est enim, cumque cum cupiditate libero veritatis unde! At amet vel vitae animi et nobis alias, dolorem consectetur maxime! Error, vel voluptatibus accusamus excepturi voluptatem minima aspernatur eveniet quae sit, quaerat aliquid officia nemo eos odio quasi voluptates dignissimos mollitia qui! Impedit, itaque at. Veritatis, perspiciatis repellat.',
        //     'category_id' => 2,
        //     'user_id'=>2
        // ]);

    }
}
