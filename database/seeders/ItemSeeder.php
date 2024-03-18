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
                'memo' => 'The Fender Stratocaster, colloquially known as the Strat.
                It is a model of electric guitar designed between 1952 and 1954 by Leo Fender, Bill Carson, George Fullerton, and Freddie Tavares.',
                'price' => 90000
            ],
            [
                'name' => 'テレキャスター',
                'memo' => '1949年頃、「エスクワイヤー」の名前で発売された。
                ソリッド・ボディやボルトオン・ネックなどの斬新な構造を持ち、従来の伝統的なギターの概念からは大きく離れたものであった。
                それでも、市場からは好評を博した。',
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
