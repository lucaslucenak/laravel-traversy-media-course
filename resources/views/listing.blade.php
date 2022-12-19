<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @extends('layout')
    @include('partials._search')

    @section('content')
        <h1>{{ $heading }}</h1>
        <p>{{ $listing->title }}</p>
        <p>{{ $listing->tags }}</p>
        <p>{{ $listing->description }}</p>
    @endsection


</body>
</html>