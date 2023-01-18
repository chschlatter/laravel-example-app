@extends('layout')
 
@section('content')

    @if (session('success'))
        <strong>{{ session('success') }}</strong>
        <img src="{{ asset('storage/' . session('image')) }}" />
    @endif
    
    <form method="POST" action="{{ route('image.store') }}" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" />
        <button type="submit">Upload</button>
    </form>

@stop