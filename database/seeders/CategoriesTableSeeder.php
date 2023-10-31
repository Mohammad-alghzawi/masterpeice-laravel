<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;    

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'title' => 'AGRICULTURE MATERIALS',
            'image' => 'images/1695637018.jpg',
            'discount' => 30,
        ]);
        Category::create([
            'title' => 'AGRICULTURE TOOLS',
            'image' => 'category1.webp',
            'discount' => 50,
        ]);
        Category::create([
            'title' => 'AGRICULTURE MACHINE',
            'image' => 'assets/img/machine/category2.jpg',
            'discount' => 20,
        ]);
    }
}
