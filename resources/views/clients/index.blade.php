@extends('layouts.app')

@section('content')

<a href="{{ route('clients.create') }}">Add Client</a>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>

    @foreach($clients as $c)
    <tr>
        <td>{{ $c->id }}</td>
        <td>{{ $c->name }}</td>
        <td>{{ $c->email }}</td>
        <td>
            <a href="{{ route('clients.show',$c->id) }}">Show</a>
            <a href="{{ route('clients.edit',$c->id) }}">Edit</a>

            <form action="{{ route('clients.destroy',$c->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

@endsection