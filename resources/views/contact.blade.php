@extends('layouts.app')

@section('content')
<h1>Contact</h1>
{!! Form::open(['url' => 'contact/submit']) !!}
   <div class="form-group">
   	{{Form::label('name', 'E-Mail Address: ')}}
   	{{Form::text('name','Enter name',['class'=>'form-control', 'placeholder'=>'Enter name'])}}
   </div>
   <div class="form-group">
   	{{Form::label('email', 'E-Mail Address: ')}}
   	{{Form::text('email', 'Enter E-Mail',['class'=>'form-control', 'placeholder'=>'Enter Email'])}}
   </div>
   <div class="form-group">
   	{{Form::label('message', 'Message: ')}}
   	{{Form::textarea('message', 'Enter Message',['class'=>'form-control','placeholder'=>'Enter message'])}}
   </div>
   <div>
   	{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
   </div>
{!! Form::close() !!}
@endsection

@section('sidebar')
@parent
<p>Sidebar </p>
@endsection
