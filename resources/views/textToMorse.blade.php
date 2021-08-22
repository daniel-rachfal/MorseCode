@extends('layouts.app')
@section('title', 'Text to Morse')
@section('content')
<style>
    button {
        height: 100px;
        width: 200px;
    }
</style>

<h2>{{$result ?? ''}}</h2>
<h2>{{$morseCode->plainText}}<h2>

<button id="in_." onclick="appendDit()"> . </button>
<button id="in_-" onclick="appendDash()"> - </button>
<button id="in_space" onclick="appendSpace()"> &nbsp </button>

<form action="{{url('/textToMorse')}}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="correct" value="{{$morseCode->morseText}}">
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
