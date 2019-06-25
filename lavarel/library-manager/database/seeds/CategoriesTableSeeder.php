<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->id = 1;
        $category->category = 'KHTN';
        $category->amount = '3';
        $category->save();

        $category = new Category();
        $category->id = 2;
        $category->category = 'KHXH';
        $category->amount = '2';
        $category->save();

        $category = new Category();
        $category->id = 3;
        $category->category = 'CNTT';
        $category->amount = '2';
        $category->save();

    }
}
