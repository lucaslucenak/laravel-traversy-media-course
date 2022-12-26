<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-layout>
        @include('partials._hero')
        @include('partials._search')
        <div class="lg:grid lg:gird-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

            @foreach ($listings as  $listing)
                <x-listing-card :listing="$listing"/>
            @endforeach
        </div>

        <div class="mt-6 p-4">
            {{$listings->links()}}
        </div>
    </x-layout>
</body>
</html>