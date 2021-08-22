<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MorseCode;

class MorseToTextController extends Controller
{
    public function showNew()
    {
        $morseCode = MorseCode::inRandomOrder()->first();
        return view('morseToText', ['morseCode' => $morseCode]);
    }

    public function processInput(Request $request)
    {
        $correct = $request->correct;
        $answer = strtoupper($request->answer);
        if ($correct == $answer) {
            $result = 'Correct';
        }
        else {
            $result = 'Incorrect, the correct answer was ' . $correct;
        }

        $morseCode = MorseCode::inRandomOrder()->first();
        return view('morseToText', ['morseCode' => $morseCode, 'result' => $result]);
    }
}
