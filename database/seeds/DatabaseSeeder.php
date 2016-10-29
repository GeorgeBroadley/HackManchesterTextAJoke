<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(JokesTableSeeder::class);
        DB::table('jokes')->insert([
            'user_id' => null,
            'joke' => "Why do Java devs wear glasses?",
            'punchline' => "Because they can’t C#",
            'flagged' => false,
            'category_id' => null
        ]);
    }
}
