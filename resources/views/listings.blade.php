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

    @section('content')
    <h1>{{ $heading }}</h1>


    @foreach ($listings as  $listing)
    <ul>
        <li>{{ $listing['title'] }}</li>
        <li>{{ $listing['tags'] }}</li>
        <li>{{ $listing['company_name'] }}</li>
        <li>{{ $listing['description'] }}</li>
    </ul>
    @endforeach



    @endsection
</body>
</html>