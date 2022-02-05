<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Element;
use Illuminate\Database\Seeder;

class DefaultComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::create([
            'name' => 'Buttons',
            'sorting' => 100
        ]);
        Element::create([
            'category_id' => $category->id,
            'name' => 'Default Button',
            'component' => 'ui.button',
            'source' => 'https://github.com'
        ]);
    }
}
