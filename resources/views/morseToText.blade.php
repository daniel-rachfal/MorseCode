@extends('layouts.app')
@section('title', 'Morse To Text')
@section('content')

<a href="{{url('/morseToText/easy')}}">Easy</a>
<a href="{{url('/morseToText/hard')}}">Hard</a>

<h2>{{$result ?? ''}}</h2>
<br>
<h2>Translate the given audio to text!<h2>
<audio controls="controls" height="100" width="1000" class="form-control">
<source src="{{url('storage/'.$morseCode->fileLocation)}}" type="audio/ogg" />
<embed height="100" width="100" src="{{url('storage/'.$morseCode->fileLocation)}}" />
</audio>

<form action="{{url('/morseToText/'.$difficulty)}}" method="POST" >
    {{ csrf_field() }}
    <input type="hidden" name="correct" value="{{$morseCode->plainText}}">
    <input type="text" name="answer" placeholder="Text" class="form-control">
    <input type="submit" value="Submit" class="form-control">
</form>

@endsection
