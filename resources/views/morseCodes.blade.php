@extends('layouts.app')
@section('content')
<table>
    <tr>
        <th>Plain Text</th>
        <th>File Location</th>
        <th>Morse Code</th>
        <th>Audio</th>
    </tr>
    @foreach ($morseCodes as $morseCode)
    <tr>
        <td>{{$morseCode->plainText}}</td>
        <td>{{$morseCode->fileLocation}}</td>
        <td>{{$morseCode->morseText}}</td>
    </tr>
    @endforeach
</table>
@endsection
