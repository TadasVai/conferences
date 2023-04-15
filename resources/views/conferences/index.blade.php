@extends('layouts.app')
@section('content')
    <h2>List of Conferences</h2>
    <a href="{{route('conferences.create')}}"><button type="button">Create Conference</button></a>
    @each('conferences.partials.list', $conferences, 'conference')
@endsection
