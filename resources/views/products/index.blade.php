@extends('layouts.app')

@section('content')

<a href="{{ route('products.create') }}">Add Product</a>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>

    @foreach($products as $p)
    <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->name }}</td>
        <td>{{ $p->price }}</td>
        <td>
            <a href="{{ route('products.show',$p->id) }}">Show</a>
            <a href="{{ route('products.edit',$p->id) }}">Edit</a>

            <form action="{{ route('products.destroy',$p->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

@endsection