<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create() ;

        Category::create([
            'name' => 'Literature',
            'slug' => 'ltr'
        ]);

        Category::create([
            'name' => 'Sport',
            'slug' => 'sprt'
        ]);

        Category::create([
            'name' => 'Education',
            'slug' => 'edu'
        ]);
    }
}
