<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{ $heading }}</h1>
    @foreach ($listings as $listing)
        <h1>{{ $listing['id'] }}</h1>
        <h2>{{ $listing['title'] }}</h2>
        <h3>{{ $listing['content']}}</h3>
    @endforeach
</body>
</html>