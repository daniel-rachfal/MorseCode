@extends('layouts.app')
@section('title', 'Home')
@section('content')
<h1 class="text-center">Welcome to Morse Trainer</h1>

<div class="row">
<p class="col-md-6">This is an application made for practicing morse code<br>
    You can practice translating Morse to Text and vice versa!<br>
    There's a link to all morse codes in the navbar <br> </p>

<p class="col-md-6">Morse code is a way of comunicating in telecommunications by encoding characters as sequences<br>
    These are called dits and dahs, with the duration of a dah three times of a dit<br>
    Each letter and number have their own dit-dah code which you can find <a href="{{url('/morseCodes')}}">here</a><br>
</div>

<br>
<p>Credit for Morse Code letters/numbers goes to <a href="https://commons.wikimedia.org/wiki/Morse_code">Wikimedia Commons</a></p>
<p>Credit for Morse Code passages goes to <a href="https://lcwo.net/">LCWO</a></p>
@endsection
