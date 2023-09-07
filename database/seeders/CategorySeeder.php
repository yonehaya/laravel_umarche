<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('primary_categories')->insert([
            [
                'name' => 'メンズファッション',
                'sort_order' => 1,
            ],
            [
                'name' => 'レディースファッション',
                'sort_order' => 2,
            ],
            [
                'name' => '本',
                'sort_order' => 3,
            ],
        ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => 'ズボン・パンツ',
                'sort_order' => 1,
                'primary_category_id' => '1',
            ],
            [
                'name' => 'Tシャツ・カットソー',
                'sort_order' => 1,
                'primary_category_id' => '1',
            ],
            [
                'name' => 'コート・ジャケット',
                'sort_order' => 1,
                'primary_category_id' => '1',
            ],
            [
                'name' => 'シャツ・ブラウス',
                'sort_order' => 2,
                'primary_category_id' => '2',
            ],
            [
                'name' => 'ニット・せーター',
                'sort_order' => 2,
                'primary_category_id' => '2',
            ],
            [
                'name' => 'スカート',
                'sort_order' => 2,
                'primary_category_id' => '2',
            ],
            [
                'name' => 'コミック',
                'sort_order' => 3,
                'primary_category_id' => '3',
            ],
            [
                'name' => 'ビジネス本',
                'sort_order' => 3,
                'primary_category_id' => '3',
            ],
        ]);
    }
}
