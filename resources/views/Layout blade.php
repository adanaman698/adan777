<p>Username: {{ $username }}</p>

@if ($isAdmin)
    <p>Welcome, Admin</p>
@endif


@for ($i = 1; $i <= 10; $i++)
    <p>{{ $i }}</p>
@endfor


@switch($role)
    @case('admin')
        <p>You are an Admin</p>
        @break

    @case('editor')
        <p>You are an Editor</p>
        @break

    @case('guest')
        <p>You are a Guest</p>
        @break

    @default
        <p>Unknown role</p>
@endswitch


@php
    $product = ['name' => 'Product 1', 'price' => 100];
@endphp

<ul>
    @foreach ($product as $key => $value)
        <li>{{ $key }}: {{ $value }}</li>
    @endforeach
</ul>


<!DOCTYPE html>
<html>
<head>
    <title>My App</title>
</head>
<body>
    @include('partials.header')

    <div class="sidebar">
        @include('partials.sidebar')
    </div>

    <div class="content">
        @yield('content')
    </div>

    @include('partials.footer')


    @extends('layouts.app')

@section('content')
    <p>This is the main content.</p>
@endsection

</body>
</html>