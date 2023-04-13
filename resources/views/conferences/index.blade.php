@extends('layouts.app')
@section('content')
    @foreach($conferences as $conference)
    <h1>{{$conference['title']}}</h1>
    <p>{{$conference['content']}}</p>
    <br>
    @empty
        <h2>List is empty</h2>
    @endforeach
@endsection
