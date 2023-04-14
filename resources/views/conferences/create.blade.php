@extends('layouts.app')

@section('title', 'Conference Creation Form')

@section('content')
    <h4>Conference creation form</h4>
    <form action="{{route('conferences.store')}}" method="POST">
        @csrf
        <div>
            <label for="title-input">Title</label>
            <input id="title-input" type="text" name="title">
        </div>
        <div>
            <label for="content-input">Content</label>
            <textarea id="content-input" type="text" name="content"></textarea>
        </div>
        <div>
            <label for="address-input">Address</label>
            <textarea id="address-input" type="text" name="address"></textarea>
        </div>
        <br>
        <div><input type="submit" value="Create"></div>
    </form>
@endsection
