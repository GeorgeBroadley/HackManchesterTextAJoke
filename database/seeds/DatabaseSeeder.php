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

        DB::table('jokes')->insert([
            'user_id' => null,
            'joke' => "What does cheese say when it looks in the mirror?",
            'punchline' => "Halloumi!",
            'flagged' => false,
            'category_id' => null
        ]);

        DB::table('jokes')->insert([
            'user_id' => null,
            'joke' => "I sold my vacuum cleaner last week.",
            'punchline' => "It was only gathering dust.",
            'flagged' => false,
            'category_id' => null
        ]);

        DB::table('jokes')->insert([
            'user_id' => null,
            'joke' => "Two fish in a tank.",
            'punchline' => "One of them turns to the other: \"How do you drive this thing?\"",
            'flagged' => false,
            'category_id' => null
        ]);

        DB::table('jokes')->insert([
            'user_id' => null,
            'joke' => "What do you call a video game gorilla who shrinks by 50% each day?",
            'punchline' => "Exponential DK",
            'flagged' => false,
            'category_id' => null
        ]);

        DB::table('jokes')->insert([
            'user_id' => null,
            'joke' => "I buy all my guns from a guy named \"T-Rex\"",
            'punchline' => "He's a small arms dealer.",
            'flagged' => false,
            'category_id' => null
        ]);

        DB::table('jokes')->insert([
            'user_id' => null,
            'joke' => "Why does a chicken coup have 2 doors?",
            'punchline' => "If it had 4 doors it would be a chicken sedan.",
            'flagged' => false,
            'category_id' => null
        ]);

        DB::table('jokes')->insert([
            'user_id' => null,
            'joke' => "What do you call a monkey in a mine field?",
            'punchline' => "A babooooom!",
            'flagged' => false,
            'category_id' => null
        ]);
    }
}
