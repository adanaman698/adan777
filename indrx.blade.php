@extends('layout')

@section('content')
<h1>My Library</h1>
<a href="{{ route('books.create') }}">Add New Book</a>
@if(session('success'))
    <p>{{ session('success') }}</p>
@endif
<table>
    <tr>
        <th>Title</th><th>Author</th><th>Year</th><th>Actions</th>
    </tr>
    @foreach($books as $book)
    <tr>
        <td>{{ $book->title }}</td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->published_year }}</td>
        <td>
            <a href="{{ route('books.show', $book) }}">View</a> |
            <a href="{{ route('books.edit', $book) }}">Edit</a> |
            <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline">
                @csrf @method('DELETE')
                <button onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
