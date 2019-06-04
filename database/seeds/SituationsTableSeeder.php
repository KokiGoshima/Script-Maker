<?php

use Illuminate\Database\Seeder;

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
                "flow_id" => 1
            ],
            [
                "pattern" => "自己紹介",
                "flow_id" => 1
            ],
            [
                "pattern" => "メンバー紹介",
                "flow_id" => 1
            ],
            [
                "pattern" => "背景",
                "flow_id" => 1
            ],
            [
                "pattern" => "目的",
                "flow_id" => 1
            ],
            [
                "pattern" => "構成",
                "flow_id" => 1
            ],
            [
                "pattern" => "所要時間",
                "flow_id" => 1
            ],
            [
    			"pattern" => "質問のルール",
    			"flow_id" => 1
    		],

    		[
                "pattern" => "統計",
                "flow_id" => 2
            ],
            [
                "pattern" => "具体例",
                "flow_id" => 2
            ],
            [
                "pattern" => "話の切り替え",
                "flow_id" => 2
            ],
            [
                "pattern" => "話の切り出し",
                "flow_id" => 2
            ],
            [
                "pattern" => "詳細",
                "flow_id" => 2
            ],
            [
                "pattern" => "関連付け",
                "flow_id" => 2
            ],
            [
                "pattern" => "強調",
                "flow_id" => 2
            ],
            [
                "pattern" => "言い換え",
                "flow_id" => 2
            ],
            [
                "pattern" => "質問",
                "flow_id" => 2
            ],
            [
                "pattern" => "比較",
                "flow_id" => 2
            ],
            [
    			"pattern" => "帰結",
    			"flow_id" => 2
    		],

    		[
                "pattern" => "要約",
                "flow_id" => 3
            ],
            [
                "pattern" => "結論",
                "flow_id" => 3
            ],
            [
                "pattern" => "締めくくり",
                "flow_id" => 3
            ],
            [
    			"pattern" => "質疑応答",
    			"flow_id" => 3
    		]

    	];

    	foreach ($situations as $situation) {
    		DB::table("situations")->insert([
    			"pattern" => $situation["pattern"],
                "flow_id" => $situation["flow_id"],
    			"created_at" => Carbon::now(),
    			"updated_at" => Carbon::now()
    		]);
    	}
    }
}
