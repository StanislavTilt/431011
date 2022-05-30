<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Item;
use App\Models\CategoryItem;
use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::factory()
            ->hasAttached(
                Category::factory()->count(3)
            )
            ->count(3)
            ->create();
    }
}
