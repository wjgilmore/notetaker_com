@extends('layouts.app')

@section('content')

	<h1>Books</h1>

@foreach($books as $book)

<p>
{{ $book->name }}
</p>

@endforeach

@endsection