<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Miftah Rizky Alamsyah',
            'username' => 'miftahrizkyalamsyah',
            'email' => 'miftahrizkyalamsyah@upi.edu',
            'password' => bcrypt('miftah')
        ]);

        User::create([
            'name' => 'Anggara Agung Lesmana',
            'username' => 'anggaraagunglesmana',
            'email' => 'anggaraagunglesmana2000889@upi.edu',
            'password' => bcrypt('anggara')
        ]);

        User::create([
            'name' => 'Geri Tri Panca',
            'username' => 'geritripanca',
            'email' => 'geri@upi.edu',
            'password' => bcrypt('geri')
        ]);

        User::create([
            'name' => 'ihsan Maulana Suhendar',
            'username' => 'ihsanmaulanasuhendar',
            'email' => 'ihsanms@upi.edu',
            'password' => bcrypt('ihsan')
        ]);

        // User::create([
        //     'name' => 'Rizky',
        //     'email' => 'miftahrizkyalamsyah@upi.edu',
        //     'password' => bcrypt('rizky')
        // ]);
        
        User::factory(4)->create();

        Category::create([
            'name' => 'Barat',
            'slug' => 'barat'
        ]);

        Category::create([
            'name' => 'Tradisional',
            'slug' => 'tradisional'
        ]);

        Category::create([
            'name' => 'Jepang',
            'slug' => 'jepang'
        ]);

        Category::create([
            'name' => 'Coffee Shop',
            'slug' => 'coffee-shop'
        ]);

        Category::create([
            'name' => 'Asia Selatan',
            'slug' => 'asia-selatan'
        ]);

        Category::create([
            'name' => 'Chinese',
            'slug' => 'chinese'
        ]);
        
        Category::create([
            'name' => 'Bakery',
            'slug' => 'bakery'
        ]);

        Category::create([
            'name' => 'Timur Tengah',
            'slug' => 'timur-tengah'
        ]);

        Category::create([
            'name' => 'Korea',
            'slug' => 'korea'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'resto' => 'Resto Barat',
        //     'slug' => 'resto-barat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem, quam.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem, quam. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem, quam. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem, quam. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem, quam.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'resto' => 'Resto Mamarika',
        //     'slug' => 'resto-mamarika',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem, quam.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem, quam. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem, quam. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem, quam. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem, quam.',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'resto' => 'Resto Euy',
        //     'slug' => 'resto-euy',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem, quam.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem, quam. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem, quam. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem, quam. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem, quam.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
};
