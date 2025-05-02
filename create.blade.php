@extends('layout')

@section('content')
<h1>Add Book</h1>
<form method="POST" action="{{ route('books.store') }}">
    @csrf
    <input name="title" placeholder="Title" required><br>
    <input name="author" placeholder="Author" required><br>
    <textarea name="description" placeholder="Description"></textarea><br>
    <input name="published_year" type="number" placeholder="Published Year"><br>
    <button type="submit">Save</button>
</form>
@endsection
