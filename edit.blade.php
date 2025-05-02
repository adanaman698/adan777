@extends('layout')

@section('content')
<h1>Edit Book</h1>
<form method="POST" action="{{ route('books.update', $book) }}">
    @csrf @method('PUT')
    <input name="title" value="{{ $book->title }}" required><br>
    <input name="author" value="{{ $book->author }}" required><br>
    <textarea name="description">{{ $book->description }}</textarea><br>
    <input name="published_year" type="number" value="{{ $book->published_year }}"><br>
    <button type="submit">Update</button>
</form>
@endsection
