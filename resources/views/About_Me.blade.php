@extends('layouts.layout') {{-- extends(<folder name>.<file name>) --}}
<title>About Me</title>
@section('content')
{{-- puts all this code inside the 'content' in the layout then called by yield --}}
    <div style="display:flex; justify-content:center; ">
        <h1>About Me Page</h1>
    </div>
    <hr>
    <div style="display:flex; justify-content:space-evenly ">
        <a href='/About'><button class="btn btn-info"> About Me </button></a>
        <a href='/Skills'><button class="btn btn-primary"> Skills </button></a>
        <a href='/Hobbies'><button class="btn btn-secondary"> Hobbies </button></a>
    </div>
    <hr>
    <div style="display:flex; justify-content:center;">
        <h1>{{ $data['greet'] }}</h1>
    </div>
@endsection
