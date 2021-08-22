<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MorseCode extends Model
{
    public static function MorseToText($morse)
    {
        if ($morse == " ") return " ";
        $code = MorseCode::where('morseText', $morse)->first();
        if ($code) {
            $plainText = $code->plainText;
            return $plainText;
        }
        else {
            return null;
        }
    }
}
