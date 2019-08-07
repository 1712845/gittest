@extends('layouts.contact')
@section('content')
<h1>Contact Page</h1>
{{ Form::open(['url' => 'contact/send']) }}
    <div class="form-group">
        {{Form::label('name','Name')}}
        {{Form::text('name','',['class'=>'form-control','placeholder'=>'Your name'])}}
    </div>
    <div class="form-group">
            {{Form::label('email','Email')}}
            {{Form::text('email','',['class'=>'form-control','placeholder'=>'Your email'])}}
    </div>
    <div class="form-group">
            {{Form::label('address','Address')}}
            {{Form::text('address','',['class'=>'form-control','placeholder'=>'Your address'])}}
    </div>
    <div class="form-group">
            {{Form::label('message','Message')}}
            {{Form::text('message','',['class'=>'form-control','placeholder'=>'Your message'])}}
    </div>
    <div class="form-group">
            {{Form::label('phone','Phone')}}
            {{Form::text('phone','',['class'=>'form-control','placeholder'=>'Your phone'])}}
    </div>
    <div>
        {{Form::submit('Send')}}
    </div>
{{ Form::close() }}
@endsection
