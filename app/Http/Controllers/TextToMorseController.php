<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MorseCode;

class TextToMorseController extends Controller
{
    public function test()
    {
        $morseCode = MorseCode::inRandomOrder()->first();
        return view('textToMorse', ['morseCode' => $morseCode]);
    }

    public function processInput(Request $request)
    {
        $correct = $request->correct;
        $answer = $request->answer;

        if ($correct == $answer) {
            $result = 'Correct';
        }
        else {
            $result = 'Incorrect, the correct answer was ' . $correct;
        }

        $morseCode = MorseCode::inRandomOrder()->first();
        return view('textToMorse', ['morseCode' => $morseCode, 'result' => $result]);
    }
}
