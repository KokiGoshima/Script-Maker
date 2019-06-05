<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ConstructionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $constructions = [
    		[
    			"flow" => "導入"
    		],
    		[
    			"flow" => "本論"
    		],
    		[
    			"flow" => "結論"
    		]
    	];

    	foreach ($constructions as $construction) {
    		DB::table("constructions")->insert([
    			"flow" => $construction["flow"],
    			"created_at" => Carbon::now(),
    			"updated_at" => Carbon::now()
    		]);
    	}
    }
}
