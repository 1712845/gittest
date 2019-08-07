@extends('layouts.contact')

@section('content')
    @if(count($messages))
        @foreach($messages as $message)
            <p>
                Name :{{$message->name}} <br />
                Email: {{$message->email}}  <br />
                Address:{{$message->address}}  <br />
                Message:{{$message->message}}  <br />
                Phone:{{$message->phone}}  <br />
            </p>
        @endforeach
    @endif
@endsection