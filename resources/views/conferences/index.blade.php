@extends('layouts.app')
@section('content')
    @foreach($conference as $conference)
    <h1>{{$conference['title']}}</h1>
    <p>{{$conference['content']}}</p>
    <br>
    @endforeach
@endsection
