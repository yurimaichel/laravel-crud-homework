@extends('layouts.app')

@section('content')

<h3>Client Details</h3>

<p>ID: {{ $client->id }}</p>
<p>Name: {{ $client->name }}</p>
<p>Email: {{ $client->email }}</p>

<a href="{{ route('clients.index') }}">Back</a>

@endsection