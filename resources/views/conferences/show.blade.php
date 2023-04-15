@extends('layouts.app')
@section('content')
    @if(session('status'))
        <div style="background-color: green; color: lime;">{{session('status')}}</div>
    @endif
    <h1>{{$conference['title']}}</h1>
    <p>{{$conference['content']}}</p>
    <p>{{$conference['address']}}</p>
@endsection
