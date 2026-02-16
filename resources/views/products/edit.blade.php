@extends('layouts.app')

@section('content')

<h3>Edit Product</h3>

<form method="POST" action="{{ route('products.update',$product->id) }}">
    @csrf
    @method('PUT')

    Name:
    <input type="text" name="name" value="{{ $product->name }}">
    <br><br>

    Price:
    <input type="text" name="price" value="{{ $product->price }}">
    <br><br>

    <button type="submit">Update</button>
</form>

@endsection