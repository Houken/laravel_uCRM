<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            [
                'name' => 'ストラトキャスター',
                'memo' => '70\'s ストラト',
                'price' => 90000
            ],
            [
                'name' => 'テレキャスター',
                'memo' => '70\'s シンライン',
                'price' => 110000
            ],
            [
                'name' => 'マスタング',
                'memo' => 'コンペティション',
                'price' => 70000
            ],
            [
                'name' => 'ジャガー',
                'memo' => '3トーンサンバースト',
                'price' => 120000
            ],
            [
                'name' => 'プレシジョンベース',
                'memo' => 'アノダイズドピックガード',
                'price' => 90000
            ],
        ]);
    }
}
