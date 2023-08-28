<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $createdAt = now();
        DB::table('shops')->insert([
            [
                'owner_id' => 1,
                'name' => 'ここに店名が入ります',
                'information' => 'ここに店舗情報が入ります。ここに店舗情報が入ります。ここに店舗情報が入ります。',
                'filename' => '',
                'is_selling' => true,
            ],
            [
                'owner_id' => 2,
                'name' => 'ここに店名が入ります',
                'information' => 'ここに店舗情報が入ります。ここに店舗情報が入ります。ここに店舗情報が入ります。',
                'filename' => '',
                'is_selling' => true,
            ],
        ]);
    }
}
