@extends('layouts.app')

@section('title', 'Conference Creation Form')

@section('content')
    <h4>Conference Creation Form</h4>
    <form action="{{route('conferences.store')}}" method="POST">
        @csrf
        @include('conferences.partials.form')
        <br>
        <div><input type="submit" value="Create"></div>
    </form>
@endsection
