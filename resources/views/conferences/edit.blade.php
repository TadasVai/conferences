@extends('layouts.app')

@section('title', 'Conference Edit Form')

@section('content')
    <div class="text-center row mt-5">
        <div class="text-center col-md-5 m-auto">
            <div class="card card-body">
                <h1 class="text-center mb-3">Conference Edit Form   <i class="fa-solid fa-pen-to-square"></i></h1>
    <form action="{{route('conferences.update', ['conference'=> $conference->id])}}" method="POST">
        @csrf
        @method('PUT')
        @include('conferences.partials.form')
        <br>
        <div><input type="submit" value="Update" class="btn btn-success"></div>
    </form>
@endsection
