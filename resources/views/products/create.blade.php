@extends('layouts.app')

@section('content')

<h3>Add Product</h3>

<form method="POST" action="{{ route('products.store') }}">
    @csrf

    Name:
    <input type="text" name="name">
    <br><br>

    Price:
    <input type="text" name="price">
    <br><br>

    <button type="submit">Save</button>
</form>

@endsection