<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MorseCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('morse_codes')->insert([

            [
                'plainText' => "A",
                'fileLocation' => "MorseSounds/A.ogg",
                'morseText' => ".-"
            ],


            [
                'plainText' => "B",
                'fileLocation' => "MorseSounds/B.ogg",
                'morseText' => "-..."
            ],


            [
                'plainText' => "C",
                'fileLocation' => "MorseSounds/C.ogg",
                'morseText' => "-.-."
            ],


            [
                'plainText' => "D",
                'fileLocation' => "MorseSounds/D.ogg",
                'morseText' => "-.."
            ],


            [
                'plainText' => "E",
                'fileLocation' => "MorseSounds/E.ogg",
                'morseText' => "."
            ],


            [
                'plainText' => "F",
                'fileLocation' => "MorseSounds/F.ogg",
                'morseText' => "..-."
            ],



            [
                'plainText' => "G",
                'fileLocation' => "MorseSounds/G.ogg",
                'morseText' => "--."
            ],


            [
                'plainText' => "H",
                'fileLocation' => "MorseSounds/H.ogg",
                'morseText' => "...."
            ],


            [
                'plainText' => "I",
                'fileLocation' => "MorseSounds/I.ogg",
                'morseText' => ".."
            ],


            [
                'plainText' => "J",
                'fileLocation' => "MorseSounds/J.ogg",
                'morseText' => ".---"
            ],


            [
                'plainText' => "K",
                'fileLocation' => "MorseSounds/K.ogg",
                'morseText' => "-.-"
            ],


            [
                'plainText' => "L",
                'fileLocation' => "MorseSounds/L.ogg",
                'morseText' => ".-.."
            ],


            [
                'plainText' => "M",
                'fileLocation' => "MorseSounds/M.ogg",
                'morseText' => ".."
            ],


            [
                'plainText' => "N",
                'fileLocation' => "MorseSounds/N.ogg",
                'morseText' => "-."
            ],


            [
                'plainText' => "O",
                'fileLocation' => "MorseSounds/O.ogg",
                'morseText' => "---"
            ],


            [
                'plainText' => "P",
                'fileLocation' => "MorseSounds/P.ogg",
                'morseText' => ".--."
            ],


            [
                'plainText' => "Q",
                'fileLocation' => "MorseSounds/Q.ogg",
                'morseText' => "--.-"
            ],


            [
                'plainText' => "R",
                'fileLocation' => "MorseSounds/R.ogg",
                'morseText' => ".-."
            ],


            [
                'plainText' => "S",
                'fileLocation' => "MorseSounds/S.ogg",
                'morseText' => "..."
            ],


            [
                'plainText' => "T",
                'fileLocation' => "MorseSounds/T.ogg",
                'morseText' => "-"
            ],


            [
                'plainText' => "U",
                'fileLocation' => "MorseSounds/U.ogg",
                'morseText' => "..-"
            ],


            [
                'plainText' => "V",
                'fileLocation' => "MorseSounds/V.ogg",
                'morseText' => "...-"
            ],


            [
                'plainText' => "W",
                'fileLocation' => "MorseSounds/W.ogg",
                'morseText' => ".--"
            ],


            [
                'plainText' => "X",
                'fileLocation' => "MorseSounds/X.ogg",
                'morseText' => "-..-"
            ],


            [
                'plainText' => "Y",
                'fileLocation' => "MorseSounds/Y.ogg",
                'morseText' => "-.--"
            ],


            [
                'plainText' => "Z",
                'fileLocation' => "MorseSounds/Z.ogg",
                'morseText' => "--.."
            ],


            [
                'plainText' => "0",
                'fileLocation' => "MorseSounds/0.ogg",
                'morseText' => "-----"
            ],


            [
                'plainText' => "1",
                'fileLocation' => "MorseSounds/1.ogg",
                'morseText' => ".----"
            ],


            [
                'plainText' => "2",
                'fileLocation' => "MorseSounds/2.ogg",
                'morseText' => "..---"
            ],


            [
                'plainText' => "3",
                'fileLocation' => "MorseSounds/3.ogg",
                'morseText' => "...--"
            ],


            [
                'plainText' => "4",
                'fileLocation' => "MorseSounds/4.ogg",
                'morseText' => "....-"
            ],


            [
                'plainText' => "5",
                'fileLocation' => "MorseSounds/5.ogg",
                'morseText' => "....."
            ],


            [
                'plainText' => "6",
                'fileLocation' => "MorseSounds/6.ogg",
                'morseText' => "-...."
            ],


            [
                'plainText' => "7",
                'fileLocation' => "MorseSounds/7.ogg",
                'morseText' => "--..."
            ],


            [
                'plainText' => "8",
                'fileLocation' => "MorseSounds/8.ogg",
                'morseText' => "---.."
            ],


            [
                'plainText' => "9",
                'fileLocation' => "MorseSounds/9.ogg",
                'morseText' => "----."
            ]
        ]);
    }
}
