<?php

namespace Database\Seeders;

use App\Models\Child;
use App\Models\Article;
use App\Models\Category;
use App\Models\ChildCategory;
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
        Article::factory(10)->create();
        Category::factory(10)->create();
        Child::factory(10)->create();
    }
}
