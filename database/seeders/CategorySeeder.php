<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Web Programmer',
            'slug' => 'Web_Programmer',
            'color' => 'red'
        ]);
        Category::create([
            'name' => 'Data Analyst',
            'slug' => 'Data_Analyst',
            'color' => 'blue'
        ]);
        Category::create([
            'name' => 'IT Manager',
            'slug' => 'IT_Manager',
            'color' => 'orange'
        ]);
        Category::create([
            'name' => 'Software Engineer',
            'slug' => 'Software_Engineer',
            'color' => 'yellow'
        ]);
        Category::create([
            'name' => 'Cyber Security',
            'slug' => 'Cyber_Security',
            'color' => 'green'
        ]);
    }
}
