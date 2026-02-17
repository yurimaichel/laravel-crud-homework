@extends('layouts.app')

@section('content')

<h3>Edit Client</h3>

<form method="POST" action="{{ route('clients.update',$client->id) }}">
    @csrf
    @method('PUT')

    Name:
    <input type="text" name="name" value="{{ $client->name }}">
    <br><br>

    Email:
    <input type="text" name="email" value="{{ $client->email }}">
    <br><br>

    <button type="submit">Update</button>
</form>

@endsection