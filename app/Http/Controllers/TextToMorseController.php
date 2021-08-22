<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MorseCode;
use App\Models\MorseWord;

class TextToMorseController extends Controller
{
    public function test($difficulty)
    {
        $morseCode = $this->fetchMorse($difficulty);
        return view('textToMorse', ['morseCode' => $morseCode, 'difficulty' => $difficulty]);
    }

    public function processInput(Request $request, $difficulty)
    {
        $correct = $request->correct;
        $answer = $request->answer;

        if ($correct == $answer) {
            $result = 'Correct';
        }
        else {
            $result = 'Incorrect, the correct answer was ' . $correct;
        }

        $morseCode = $this->fetchMorse($difficulty);

        return view('textToMorse', ['morseCode' => $morseCode, 'result' => $result, 'difficulty' => $difficulty]);
    }

    private function fetchMorse($difficulty)
    {
        if ($difficulty == "easy")
        {
            $morseCode = MorseCode::inRandomOrder()->first();
        }
        elseif ($difficulty == "hard")
        {
            $morseCode = MorseWord::inRandomOrder()->first();
        }
        // Invalid Difficulty, redirecting
        else
        {
            return redirect('/');
        }
        return $morseCode;
    }
}
