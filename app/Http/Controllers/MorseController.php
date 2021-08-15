<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MorseCode;

class MorseController extends Controller
{
    public function index()
    {
        $morseCodes = MorseCode::all();
        return view('morseCodes', ['morseCodes' => $morseCodes]);
    }
}
