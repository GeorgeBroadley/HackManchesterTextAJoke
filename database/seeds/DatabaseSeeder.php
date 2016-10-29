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

        DB::table('jokes')->insert([
            'user_id' => null,
            'joke' => "What does IDK mean?",
            'punchline' => "I keep asking people, but they don't know either.",
            'flagged' => false,
            'category_id' => null
        ]);

        DB::table('jokes')->insert([
            'user_id' => null,
            'joke' => "Good jokes are like pizza.",
            'punchline' => "This is not a pizza.",
            'flagged' => false,
            'category_id' => null
        ]);

        DB::table('jokes')->insert([
            'user_id' => null,
            'joke' => "A dung beetle walks into a bar.",
            'punchline' => "He says, \"Is this stool taken?\"",
            'flagged' => false,
            'category_id' => null
        ]);

        DB::table('jokes')->insert([
            'user_id' => null,
            'joke' => "What does a time traveler do when he's hungry?",
            'punchline' => "He goes back 4 seconds.",
            'flagged' => false,
            'category_id' => null
        ]);

        DB::table('jokes')->insert([
            'user_id' => null,
            'joke' => "What did one cheese say to the other?",
            'punchline' => "I know it's cheesy, but I feel grate!",
            'flagged' => false,
            'category_id' => null
        ]);

        DB::table('jokes')->insert([
            'user_id' => null,
            'joke' => "When's the best time to procrastinate?",
            'punchline' => "Later.",
            'flagged' => false,
            'category_id' => null
        ]);

        DB::table('jokes')->insert([
            'user_id' => null,
            'joke' => "What type of overalls do Mario and Luigi wear?",
            'punchline' => "Denim, denim, denim.",
            'flagged' => false,
            'category_id' => null
        ]);
    }
}
