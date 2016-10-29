<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ClockworkClass;
use App\Joke;
use Illuminate\Support\Facades\Input;

class JokeController extends Controller
{
    public function sendSMS() {
        $from = Input::get('from');
        $content = Input::get('content');

        $array = explode(' ', $content, 2);

        if (strtolower($array[1]) == 'me') {
            $sendTo = $from;
        } else {
            $sendTo = $array[1];
        }

        $jokeToSend = Joke::inRandomOrder()->first();

        // Create a Clockwork object using your API key
        $clockwork = new ClockworkClass( env('CLOCKWORK_API_KEY') );

        // Setup and send a message
        $message = array( 'to' => $sendTo, 'message' => $jokeToSend->joke);
        $result = $clockwork->send( $message );

        $message2 = array( 'to' => $sendTo, 'message' => $jokeToSend->punchline);
        $result = $clockwork->send( $message2 );
    }
}
