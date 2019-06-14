<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Construction;

class SituationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $constructions = Construction::all();
        $situations = [
    		[
                "pattern" => "挨拶",
                "construction_id" => $constructions[0]->id
            ],
            [
                "pattern" => "自己紹介",
                "construction_id" => $constructions[0]->id
            ],
            [
                "pattern" => "メンバー紹介",
                "construction_id" => $constructions[0]->id
            ],
            [
                "pattern" => "背景",
                "construction_id" => $constructions[0]->id
            ],
            [
                "pattern" => "目的",
                "construction_id" => $constructions[0]->id
            ],
            [
                "pattern" => "構成",
                "construction_id" => $constructions[0]->id
            ],
            [
                "pattern" => "所要時間",
                "construction_id" => $constructions[0]->id
            ],
            [
    			"pattern" => "質問のルール",
    			"construction_id" => $constructions[0]->id
    		],

    		[
                "pattern" => "統計",
                "construction_id" => $constructions[1]->id
            ],
            [
                "pattern" => "具体例",
                "construction_id" => $constructions[1]->id
            ],
            [
                "pattern" => "話の切り替え",
                "construction_id" => $constructions[1]->id
            ],
            [
                "pattern" => "話の切り出し",
                "construction_id" => $constructions[1]->id
            ],
            [
                "pattern" => "詳細",
                "construction_id" => $constructions[1]->id
            ],
            [
                "pattern" => "関連付け",
                "construction_id" => $constructions[1]->id
            ],
            [
                "pattern" => "強調",
                "construction_id" => $constructions[1]->id
            ],
            [
                "pattern" => "言い換え",
                "construction_id" => $constructions[1]->id
            ],
            [
                "pattern" => "質問",
                "construction_id" => $constructions[1]->id
            ],
            [
                "pattern" => "比較",
                "construction_id" => $constructions[1]->id
            ],
            [
    			"pattern" => "帰結",
    			"construction_id" => $constructions[1]->id
    		],

    		[
                "pattern" => "要約",
                "construction_id" => $constructions[2]->id
            ],
            [
                "pattern" => "結論",
                "construction_id" => $constructions[2]->id
            ],
            [
                "pattern" => "締めくくり",
                "construction_id" => $constructions[2]->id
            ],
            [
    			"pattern" => "質疑応答",
    			"construction_id" => $constructions[2]->id
    		]

    	];

    	foreach ($situations as $situation) {
    		DB::table("situations")->insert([
    			"pattern" => $situation["pattern"],
                "construction_id" => $situation["construction_id"],
    			"created_at" => Carbon::now(),
    			"updated_at" => Carbon::now()
    		]);
    	}
    }
}
