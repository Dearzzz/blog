<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);
        
        Category::create([
            'name' => 'Web Desain',
            'slug' => 'web-desain'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        
        post::factory(20)->create();
        
        
        User::create([
            
            'name'=> 'Richard Kurnia',
            'username' => 'richardkurnia',
            'email'=> 'richardkurnia@gmail.com',
            'password'=> bcrypt('123456789')
        ]);
        
        \App\Models\User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // User::create([

        //     'name'=> 'Didit Prangestu',
        //     'email'=> 'Didit@gmail.com',
        //     'password'=> bcrypt('54321')
        // ]);




        //     Post::create([
        //         'title' => 'Judul Pertama',
        //         'slug' => 'judul-pertama',
        //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In, similique ratione.',
        //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In, similique ratione. Vel beatae expedita magnam eum, quaerat ab excepturi facilis vero vitae alias deserunt consequatur, illum repellendus explicabo blanditiis eveniet provident doloribus incidunt tempora cum harum, sit itaque ratione ad. Aliquid explicabo maiores aliquam repudiandae minima corrupti eveniet illum sunt? Sapiente in delectus, molestiae neque sunt velit deserunt modi aut labore quos vitae expedita, excepturi reiciendis ad nostrum id quia illo placeat inventore dolorem est hic molestias ut. Eos et unde delectus, natus porro, officia optio officiis doloribus ab rem ex deserunt repellat nisi cum nam. Unde debitis totam explicabo.',
        //         'category_id' => 1,
        //         'user_id' => 1

        //     ]);
        //     Post::create([
        //         'title' => 'Judul kedua',
        //         'slug' => 'judul-kedua',
        //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In, similique ratione.',
        //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In, similique ratione. Vel beatae expedita magnam eum, quaerat ab excepturi facilis vero vitae alias deserunt consequatur, illum repellendus explicabo blanditiis eveniet provident doloribus incidunt tempora cum harum, sit itaque ratione ad. Aliquid explicabo maiores aliquam repudiandae minima corrupti eveniet illum sunt? Sapiente in delectus, molestiae neque sunt velit deserunt modi aut labore quos vitae expedita, excepturi reiciendis ad nostrum id quia illo placeat inventore dolorem est hic molestias ut. Eos et unde delectus, natus porro, officia optio officiis doloribus ab rem ex deserunt repellat nisi cum nam. Unde debitis totam explicabo.',
        //         'category_id' => 1,
        //         'user_id' => 1

        //     ]);
        //     Post::create([
        //         'title' => 'Judul Ketiga',
        //         'slug' => 'judul-ketiga',
        //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In, similique ratione.',
        //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In, similique ratione. Vel beatae expedita magnam eum, quaerat ab excepturi facilis vero vitae alias deserunt consequatur, illum repellendus explicabo blanditiis eveniet provident doloribus incidunt tempora cum harum, sit itaque ratione ad. Aliquid explicabo maiores aliquam repudiandae minima corrupti eveniet illum sunt? Sapiente in delectus, molestiae neque sunt velit deserunt modi aut labore quos vitae expedita, excepturi reiciendis ad nostrum id quia illo placeat inventore dolorem est hic molestias ut. Eos et unde delectus, natus porro, officia optio officiis doloribus ab rem ex deserunt repellat nisi cum nam. Unde debitis totam explicabo.',
        //         'category_id' => 2,
        //         'user_id' => 2

        //     ]);
        //     Post::create([
        //         'title' => 'Judul Keempat',
        //         'slug' => 'judul-keempat',
        //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In, similique ratione.',
        //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In, similique ratione. Vel beatae expedita magnam eum, quaerat ab excepturi facilis vero vitae alias deserunt consequatur, illum repellendus explicabo blanditiis eveniet provident doloribus incidunt tempora cum harum, sit itaque ratione ad. Aliquid explicabo maiores aliquam repudiandae minima corrupti eveniet illum sunt? Sapiente in delectus, molestiae neque sunt velit deserunt modi aut labore quos vitae expedita, excepturi reiciendis ad nostrum id quia illo placeat inventore dolorem est hic molestias ut. Eos et unde delectus, natus porro, officia optio officiis doloribus ab rem ex deserunt repellat nisi cum nam. Unde debitis totam explicabo.',
        //         'category_id' => 2,
        //         'user_id' => 2

        //     ]);
    }
}
