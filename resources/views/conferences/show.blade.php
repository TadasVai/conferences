@extends('layouts.app')
@section('title', 'Conference Show Form')
@section('content')
    <div class="text-center row mt-5">
        <div class="text-center col-md-3 m-auto">
            <div class="card card-body">
    @if(session('status'))
        <div style="background-color: green; color: lime;">{{session('status')}}</div>
    @endif
        <h4>Title</h4><p>{{$conference['title']}}</p>
        <p><b>Description: </b>{{$conference['content']}}</p>
        <p><b>Date: </b>{{$conference['date']}}</p>
        <p><b>Address: </b>{{$conference['address']}}</p>
    <a href="{{ route('conferences.index') }}"><button class="btn btn-secondary">Go to the main page</button></a>
        </div>
    </div>
    </div>
@endsection
