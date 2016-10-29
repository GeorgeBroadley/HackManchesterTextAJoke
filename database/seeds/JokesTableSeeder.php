<?php

use Illuminate\Database\Seeder;

class JokesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jokes')->insert([
            'user_id' => null,
            'joke' => "Why do Java devs wear glasses?",
            'punchline' => "Because they can’t C#",
            'flagged' => false,
            'category_id' => null
        ]);

        // DB::table('jokes')->insert([
        //     'user_id' => null,
        //     'joke' => "",
        //     'punchline' => "",
        //     'flagged' => false,
        //     'category_id' => null
        // ]);
    }
}
