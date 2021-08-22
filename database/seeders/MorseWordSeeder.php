<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MorseWordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('morse_words')->insert([
            [
                'plainText' => "might reads word jean salt won",
                'fileLocation' => "MorseSounds/MorseWords/lcwo-001.mp3",
                'morseText' => "-- .. --. .... - .-. . .- -.. ... .-- --- .-. -.. .--- . .- -. ... .- .-.. - .-- --- -."
            ],

            [
                'plainText' => "arts setup ridge craft them angle",
                'fileLocation' => "MorseSounds/MorseWords/lcwo-002.mp3",
                'morseText' => ".- .-. - ... ... . - ..- .--. .-. .. -.. --. . -.-. .-. .- ..-. - - .... . -- .- -. --. .-.. ."
            ],

            [
                'plainText' => "edit folks rom wines pack plays",
                'fileLocation' => "MorseSounds/MorseWords/lcwo-003.mp3",
                'morseText' => ". -.. .. - ..-. --- .-.. -.- ... .-. --- -- .-- .. -. . ... .--. .- -.-. -.- .--. .-.. .- -.-- ..."
            ],

            [
                'plainText' => "gave asian bit lie blend begin",
                'fileLocation' => "MorseSounds/MorseWords/lcwo-004.mp3",
                'morseText' => "--. .- ...- . .- ... .. .- -. -... .. - .-.. .. . -... .-.. . -. -.. -... . --. .. -."
            ],

            [
                'plainText' => "fled line deny pool aging lynn",
                'fileLocation' => "MorseSounds/MorseWords/lcwo-005.mp3",
                'morseText' => "..-. .-.. . -.. .-.. .. -. . -.. . -. -.-- .--. --- --- .-.. .- --. .. -. --. .-.. -.-- -. -."
            ],

            [
                'plainText' => "trees rule guess stars means begin",
                'fileLocation' => "MorseSounds/MorseWords/lcwo-006.mp3",
                'morseText' => "- .-. . . ... .-. ..- .-.. . --. ..- . ... ... ... - .- .-. ... -- . .- -. ... -... . --. .. -."
            ],

            [
                'plainText' => "plea bones trees bunch skin cope",
                'fileLocation' => "MorseSounds/MorseWords/lcwo-007.mp3",
                'morseText' => ".--. .-.. . .- -... --- -. . ... - .-. . . ... -... ..- -. -.-. .... ... -.- .. -. -.-. --- .--. ."
            ],

            [
                'plainText' => "as baby next movie rooms proud",
                'fileLocation' => "MorseSounds/MorseWords/lcwo-008.mp3",
                'morseText' => ".- ... -... .- -... -.-- -. . -..- - -- --- ...- .. . .-. --- --- -- ... .--. .-. --- ..- -.."
            ],

            [
                'plainText' => "was whose loved cent blaze tell",
                'fileLocation' => "MorseSounds/MorseWords/lcwo-009.mp3",
                'morseText' => ".-- .- ... .-- .... --- ... . .-.. --- ...- . -.. -.-. . -. - -... .-.. .- --.. . - . .-.. .-.."
            ],

            [
                'plainText' => "need urge aides miami date dump",
                'fileLocation' => "MorseSounds/MorseWords/lcwo-010.mp3",
                'morseText' => "-. . . -.. ..- .-. --. . .- .. -.. . ... -- .. .- -- .. -.. .- - . -.. ..- -- .--."
            ],

            [
                'plainText' => "foley orbit find fully trees mar",
                'fileLocation' => "MorseSounds/MorseWords/lcwo-011.mp3",
                'morseText' => "..-. --- .-.. . -.-- --- .-. -... .. - ..-. .. -. -.. ..-. ..- .-.. .-.. -.-- - .-. . . ... -- .- .-."
            ],

            [
                'plainText' => "rates tied dodge rate audit owns",
                'fileLocation' => "MorseSounds/MorseWords/lcwo-012.mp3",
                'morseText' => ".-. .- - . ... - .. . -.. -.. --- -.. --. . .-. .- - . .- ..- -.. .. - --- .-- -. ..."
            ],

            [
                'plainText' => "load duke trump songs drop on",
                'fileLocation' => "MorseSounds/MorseWords/lcwo-013.mp3",
                'morseText' => ".-.. --- .- -.. -.. ..- -.- . - .-. ..- -- .--. ... --- -. --. ... -.. .-. --- .--. --- -."
            ],

            [
                'plainText' => "gets vice jet craig fuel sugar",
                'fileLocation' => "MorseSounds/MorseWords/lcwo-014.mp3",
                'morseText' => "--. . - ... ...- .. -.-. . .--- . - -.-. .-. .- .. --. ..-. ..- . .-.. ... ..- --. .- .-."
            ],

            [
                'plainText' => "fresh hold name lay auto sam",
                'fileLocation' => "MorseSounds/MorseWords/lcwo-015.mp3",
                'morseText' => "..-. .-. . ... .... .... --- .-.. -.. -. .- -- . .-.. .- -.-- .- ..- - --- ... .- --"
            ],
        ]);
    }
}
