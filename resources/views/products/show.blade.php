@extends('layouts.app')

@section('content')

<h3>Product Details</h3>

<p>ID: {{ $product->id }}</p>
<p>Name: {{ $product->name }}</p>
<p>Price: {{ $product->price }}</p>

<a href="{{ route('products.index') }}">Back</a>

@endsection