@extends('layouts.study')

@section('content')


    <div class="col-md-6">
        <h1>Add to Study Plan</h1>

        <p>
            <a href="{{ URL::route('study.index') }}" class="btn btn-primary">Cancel & Return</a>
        </p>

        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    {!! Form::label('Date') !!}
                    {!! Form::text('date', null, array('required', 'class'=>'form-control date_picker', 'placeholder'=>'mm/dd/yyyy')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Study Plan') !!}
                    {!! Form::textarea('author', null, array('required', 'class'=>'form-control', 'placeholder'=>'Study plan of this day', 'size' => '30x22')) !!}
                </div>

            </div>
        </div>

        <div class="form-group">
            {!! Form::submit('Add to Study Plan!', array('class'=>'btn btn-success')) !!}
        </div>

        {!! Form::close() !!}

    </div>

@endsection