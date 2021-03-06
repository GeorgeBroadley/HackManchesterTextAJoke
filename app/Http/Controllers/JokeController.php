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

        if (strtolower($array[1]) == 'me' || $array[1] == '07860033747') {
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

        sleep(5);

        $message2 = array( 'to' => $sendTo, 'message' => $jokeToSend->punchline);
        $result = $clockwork->send( $message2 );
    }

    public function home() {
        $joke = Joke::where("flagged", "=", false)->inRandomOrder()->first();

        return response()
            ->view('home', $joke, 200);
    }

    public function submitJoke() {
        $jokeInput = Input::get('title');
        $punchlineInput = Input::get('punchline');
        //$user = User::auth();

        /*if (!$user) {
            return redirect('/');
        } else*/
        if (!$jokeInput || !$punchlineInput) {
            $errors = ['error' => 'Missing title input or punchline input.'];

            return response()
                ->view('submit', 'errors', 200);
        }

        $joke = new Joke;
        //$joke->user_id = $user->id;
        $joke->joke = Input::get('title');
        $joke->punchline = Input::get('punchline');
        $joke->flagged = true;
        $joke->save();

        return redirect('/');
    }

    public function submitView() {
        return response()
            ->view('submit');
    }

    // public function reportJoke() {
    //     //
    // }

    public function deleteJoke() {
        //
    }

    public function unFlagJoke($id) {
        $joke = Joke::find($id);
        $joke->flagged = false;
        $joke->save();

        return redirect('/flaggedjokes');
    }

    public function getFlaggedJokes() {
        $jokes = Joke::where("flagged", "=", true)->get();

        $jokeArray = [];
        foreach ($jokes as $joke) {
            $jokeArray['jokes'][] = $joke;
        }

        if (!$jokeArray) {
            return redirect('/');
        }

        return response()
            ->view('flaggedjokes', $jokeArray,200);
    }

    // public function getJoke($id) {
    //     $joke = Joke::find($id);
    //
    //     if ($joke == null) {
    //         return response()
    //             ->view('welcome');
    //     } else {
    //         return response()
    //             ->view('home', $joke, 200);
    //     }
    // }
}
