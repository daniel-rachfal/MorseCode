@extends('layouts.app')
@section('title', 'Text to Morse')
@section('content')
<style>
    button {
        height: 100px;
        width: 200px;
    }
</style>

<a href="{{url('/textToMorse/easy')}}">Easy</a>
<a href="{{url('/textToMorse/hard')}}">Hard</a>

@isset($correct)
<p>String given was: {{$correct->plainText ?? ''}}</p>
<p>{{$result ?? ''}}</p>
<p>{{$correct->morseText ?? ''}}</p>
<p>Your answer was {{$answer ?? ''}}</p>
@endisset

@isset($mostCommonMistakes)
<p>Your most common mistakes were:</p>
@foreach ($mostCommonMistakes as $mistake)
<p>{{$mistake[0]}} => {{$mistake[1]}}</p>
@endforeach
@endisset

<br>
<h2>{{$morseCode->plainText}}</h2>

<button id="in_." onclick="appendDit()"> . </button>
<button id="in_-" onclick="appendDash()"> - </button>
<button id="in_space" onclick="appendSpace()"> &nbsp </button>

<form action="{{url('/textToMorse/'.$difficulty)}}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="correct" value="{{$morseCode}}">
    <input type="text" name="answer" id="input"/>
    <input type="submit" value="Submit" >
</form>
@endsection

<script>
    var input;

    window.onload = function () {
        input = document.getElementById("input");
    }

    function appendDit() {
        input.value = input.value + '.';
    }

    function appendDash() {
        input.value = input.value + '-';
    }

    function appendSpace() {
        input.value = input.value + ' ';
    }
</script>
