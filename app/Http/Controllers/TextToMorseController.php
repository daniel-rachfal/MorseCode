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
        $correct = json_decode($request->correct);
        $answer = $request->answer;

        if ($difficulty == "hard")
        {
            $correctBoom = explode(" ", $correct->morseText);
            $answerBoom = explode(" ", $answer);

            $correctArr = [];
            $incorrectArr = [];

            foreach ($correctBoom as $i => $correctChar) {
                if (!array_key_exists($i, $answerBoom)) {
                    // The ... unpacks the array before inserting it (avoid array in array)
                    array_push($incorrectArr, ...array_slice($correctBoom, $i));
                    break;
                }
                if ($correctBoom[$i] == $answerBoom[$i]) array_push($correctArr, $answerBoom[$i]);
                else array_push($incorrectArr, $answerBoom[$i]);
            }

            $values = array_count_values($incorrectArr);
            arsort($values);
            $popular = array_slice(array_keys($values), 0, 3, true);
            $popularMistakes = [];
            foreach ($popular as $popularChar) {
                array_push($popularMistakes, [MorseCode::MorseToText($popularChar), $popularChar]);
            }
            $result = 'Your answer was incorrect, the correct answer was';

            $morseCode = $this->fetchMorse($difficulty);
            return view('textToMorse', ['morseCode' => $morseCode, 'result' => $result, 'difficulty' => $difficulty,
        'answer' => $answer, 'correct' => $correct, 'mostCommonMistakes' => $popularMistakes]);
        }

        if ($difficulty == "easy") {
            if ($correct == $answer) {
                $result = 'Correct';
            }
            else {
                $result = 'Your answer was incorrect, the correct answer was';
            }
            $morseCode = $this->fetchMorse($difficulty);
            return view('textToMorse', ['morseCode' => $morseCode, 'result' => $result, 'difficulty' => $difficulty,
        'answer' => $answer, 'correct' => $correct]);
        }
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
