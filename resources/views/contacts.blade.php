@extends('layouts.app')

@section('content')

<h1>Contacts</h1>
@if(count($contacts) > 0)
  @foreach($contacts as $contact)
<ul class="list-group">
	<li class="list-group-item">Name: {{$contact->name}}</li>
	<li class="list-group-item">Email: {{$contact->email}}</li>
	<li class="list-group-item">Message: {{$contact->message}}</li>
</ul>
@endforeach
@endif


@endsection

@section('sidebar')
@parent
<p>Welcome</p>
@endsection
