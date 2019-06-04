<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ScriptsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$user = DB::table('users')->first();
        
    	$scripts = [
    		[
    			"content" => "Hello, my name is Koki."
    		],
    		[
    			"content" => "Hello, my name is Naoki."
    		],
    		[
    			"content" => "Hello, my name is Tatsushi."
    		]
    	];

    	foreach ($scripts as $script) {
    		DB::table("scripts")->insert([
    			"content" => $script["content"],
                "user_id" => $user->id,
    			"created_at" => Carbon::now(),
    			"updated_at" => Carbon::now()
    		]);
    	}
    }
}
