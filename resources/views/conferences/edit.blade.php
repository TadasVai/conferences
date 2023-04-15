@extends('layouts.app')

@section('title', 'Conference Edit Form')

@section('content')
    <h4>Conference Edit form</h4>
    <form action="{{route('conferences.update', ['conference'=> $conference->id])}}" method="POST">
        @csrf
        @method('PUT')
        @include('conferences.partials.form')
        <br>
        <div><input type="submit" value="Update"></div>
    </form>
@endsection
