@extends('layouts.study')

@section('content')


    <h1>Welcome to Jason & Cameron's Study Plan!</h1>

    <p>
        <a href="{{ URL::route('study.create') }}" class="btn btn-success">Update Study Plan</a>
    </p>

@endsection