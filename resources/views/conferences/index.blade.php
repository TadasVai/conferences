@extends('layouts.app')
@section('content')
    <h2>List of Conferences</h2>
    @if(session('status'))
        <div style="background-color: green; color: lime;">{{session('status')}}</div>
    @endif
    <a href="{{route('conferences.create')}}"><button type="button">Create Conference</button></a>
    @each('conferences.partials.list', $conferences, 'conference')
@endsection
