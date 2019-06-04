<?php

use Illuminate\Database\Seeder;

class PhrasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $phrases = [
    		[
    			"japaneseSentence" => "こんにちは、私の名前は~です",
    			"englishSentence" => "Hello, my name is  ~.",
    			"pattern_id" => 1
    		],
    		[
    			"japaneseSentence" => "２つ目の理由を説明します",
    			"englishSentence" => "I will give you second reason.",
    			"pattern_id" => 2
    		],
    		[
    			"japaneseSentence" => "ご静聴ありがとうございました。",
    			"englishSentence" => "Thank you for listening.",
    			"pattern_id" => 3
    		]
    	];

    	foreach ($phrases as $phrase) {
    		DB::table("phrases")->insert([
    			"japaneseSentence" => $phrase["japaneseSentence"],
                "englishSentence" => $phrase["englishSentence"],
                "pattern_id" => $phrase["pattern_id"],
    			"created_at" => Carbon::now(),
    			"updated_at" => Carbon::now()
    		]);
    	}
    }
}
