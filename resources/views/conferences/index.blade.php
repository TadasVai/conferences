@extends('layouts.app')
@section('title', 'Conferences')
@section('content')
    <div class="row mt-auto">
        <div class="col-md-auto m-auto">
    <h1 class="text-center mb-auto">List of Conferences  <i class="fa-solid fa-handshake fa-beat"></i></h1>
    @if(session('status'))
        <div style="background-color: green; color: lime;">{{session('status')}}</div>
    @endif
    @guest
    @else
    <a href="{{route('conferences.create')}}"><button type="button" class="btn btn-success">Create Conference</button></a>
    @endguest
        </div>
    </div>
    @each('conferences.partials.list', $conferences, 'conference')
@endsection
