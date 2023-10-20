<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = new Category;
        $category->name = 'News';
        $category->slug = 'news';
        $category->save();

        $category = new Category;
        $category->name = 'Sport';
        $category->slug = 'sport';
        $category->save();

        $category = new Category;
        $category->name = 'Law';
        $category->slug = 'law';
        $category->save();

    }
}
