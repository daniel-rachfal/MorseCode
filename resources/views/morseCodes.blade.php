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
        <td>
            <audio controls="controls" height="100" width="1000">
            <source src="{{url('storage/'.$morseCode->fileLocation)}}" type="audio/ogg" />
            <embed height="100" width="100" src="{{url('storage'.$morseCode->fileLocation)}}" />
            </audio>
        </td>
    </tr>
    @endforeach
</table>
@endsection
