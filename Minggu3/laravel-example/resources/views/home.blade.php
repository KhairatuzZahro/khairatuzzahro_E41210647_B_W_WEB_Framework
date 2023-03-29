<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale())}}">
<head>
    <meta chartset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scalle=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name')}}</title>
</head>
<body>
    <div class="jumbotron jumbroton-fluid">
        <div class="container">
        <h1 class="display-4">Halaman Home</h1>
        <p class="lead">Halaman ini merupakan halaman Home</p>
    </div>
</div>
</body>
</html> -->

@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbroton-fluid">
        <div class="container">
            <h1 class="display-4">Halaman Home</h1>
            <p class="lead">This is the Home page</p>
    </div>
    <p>Nama : {{ $nama }}</p>
    <p>Mata Pelajaran</p>
    <ul>
        @foreach($pelajaran as $p)
        <li>{{ $p }}</li>
        @endforeach
</div>
@endsection
