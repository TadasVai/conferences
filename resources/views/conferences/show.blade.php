@extends('layouts.app')
@section('content')
    @if(session('status'))
        <div style="background-color: green; color: lime;">{{session('status')}}</div>
    @endif
    <h4>Title: {{$conference['title']}}</h4>
    <p>Description: {{$conference['content']}}</p>
    <p>Date: {{$conference['date']}}</p>
    <p>Address: {{$conference['address']}}</p>
    <a href="{{ route('conferences.index') }}"><button>Go to the main page</button></a>
@endsection
