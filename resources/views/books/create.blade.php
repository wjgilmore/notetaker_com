@extends('layouts.app')

@section('content')

<div class="col-md-6">
{!! Form::open(array('route' => 'books.store', 'class' => 'form', 'novalidate' => 'novalidate')) !!}
    
<h2>Create a Notebook</h2>

@if (count($errors) > 0)
	<div class="alert alert-danger">
		There were some problems with your input.<br />
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif
 
<div class="form-group">
    {!! Form::label('Your Notebook Name') !!}
    {!! Form::text('name', null, array('required', 'class'=>'form-control', 'placeholder'=>'Notebook Name')) !!}
</div>

<div class="form-group">
    {!! Form::label('Your Notebook Author') !!}
    {!! Form::text('author', null, array('required', 'class'=>'form-control', 'placeholder'=>'Notebook Author')) !!}
</div>
 
<div class="form-group">
    {!! Form::submit('Create Notebook!', array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}
</div>



@endsection