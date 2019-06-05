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
    			"pattern" => "理由2",
    			"flow_id" => 2
    		],
    		[
    			"pattern" => "締めくくり",
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
