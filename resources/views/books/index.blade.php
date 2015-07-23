@extends('layouts.app')

@section('content')

<p>
<a href="{{ URL::route('books.create') }}" class="btn btn-primary">Create Notebook</a>
</p>

	<h1>Notebooks</h1>

	@foreach($books as $book)

	<p>
	<a href="{{ URL::route('books.show', $book->id) }}">{{ $book->name }}</a>
	</p>

	@endforeach

@endsection