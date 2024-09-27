<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 10 random simple users
        // User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $myUser = User::create([
        //     'name' => 'Albin Tdv',
        //     'username' => 'albint',
        //     'email' => 'alb@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10)
        // ]);

        // Category::create([
        //     'name' => 'Literature',
        //     'slug' => 'ltr'
        // ]);

        // Post::create([
        //     'title' => 'Les Misérables',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'date' => now(),
        //     'slug' => 'les-miserables',
        //     'body' => 'Les Misérables is a French epic historical novel by Victor Hugo, first published in 1862, that is considered one of the greatest novels of the 19th century. Les Misérables has been popularized through numerous adaptations for film, television, and the stage, including a musical. In the English-speaking world, the novel is usually referred to by its original French title. However, several alternatives have been used, including The Miserables, The Wretched, The Miserable Ones, The Poor Ones, The Wretched Poor, The Victims, and The Dispossessed. Beginning in 1815 and culminating in the 1832 June Rebellion in Paris, the novel follows the lives and interactions of several characters, particularly the struggles of ex-convict Jean Valjean and his experience of redemption'
        // ]);

        // Post::factory(100)->recycle([
        //     Category::factory(3)->create(),
        //     $myUser,
        //     User::factory(5)->create()
        // ])->create() ;

        $this->call([CategorySeeder::class, UserSeeder::class]) ;
        Post::factory(100)->recycle([
            Category::all(),
            User::all()
        ])->create() ;
    }
}
