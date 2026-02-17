@extends('layouts.app')

@section('content')

<h3>Add Client</h3>

<form method="POST" action="{{ route('clients.store') }}">
    @csrf

    Name:
    <input type="text" name="name">
    <br><br>

    Email:
    <input type="text" name="email">
    <br><br>

    <button type="submit">Save</button>
</form>

@endsection