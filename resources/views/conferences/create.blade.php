@extends('layouts.app')

@section('title', 'Conference Creation Form')

@section('content')
    <div class="text-center row mt-5">
        <div class="text-center col-md-5 m-auto">
            <div class="card card-body">
                <h1 class="text-center mb-3">Conference Creation Form   <i class="fa-solid fa-square-plus"></i></h1>
    <form action="{{route('conferences.store')}}" method="POST">
        @csrf
        @include('conferences.partials.form')
        <br>
        <div><input type="submit" value="Create" class="btn btn-success"></div>
    </form>
            </div>
        </div>
    </div>
@endsection
