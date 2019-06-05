<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SituationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $situations = [
    		[
                "pattern" => "挨拶",
                "construction_id" => 1
            ],
            [
                "pattern" => "自己紹介",
                "construction_id" => 1
            ],
            [
                "pattern" => "メンバー紹介",
                "construction_id" => 1
            ],
            [
                "pattern" => "背景",
                "construction_id" => 1
            ],
            [
                "pattern" => "目的",
                "construction_id" => 1
            ],
            [
                "pattern" => "構成",
                "construction_id" => 1
            ],
            [
                "pattern" => "所要時間",
                "construction_id" => 1
            ],
            [
    			"pattern" => "質問のルール",
    			"construction_id" => 1
    		],

    		[
                "pattern" => "統計",
                "construction_id" => 2
            ],
            [
                "pattern" => "具体例",
                "construction_id" => 2
            ],
            [
                "pattern" => "話の切り替え",
                "construction_id" => 2
            ],
            [
                "pattern" => "話の切り出し",
                "construction_id" => 2
            ],
            [
                "pattern" => "詳細",
                "construction_id" => 2
            ],
            [
                "pattern" => "関連付け",
                "construction_id" => 2
            ],
            [
                "pattern" => "強調",
                "construction_id" => 2
            ],
            [
                "pattern" => "言い換え",
                "construction_id" => 2
            ],
            [
                "pattern" => "質問",
                "construction_id" => 2
            ],
            [
                "pattern" => "比較",
                "construction_id" => 2
            ],
            [
    			"pattern" => "帰結",
    			"construction_id" => 2
    		],

    		[
                "pattern" => "要約",
                "construction_id" => 3
            ],
            [
                "pattern" => "結論",
                "construction_id" => 3
            ],
            [
                "pattern" => "締めくくり",
                "construction_id" => 3
            ],
            [
    			"pattern" => "質疑応答",
    			"construction_id" => 3
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
