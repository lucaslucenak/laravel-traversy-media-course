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
    @include('partials._hero')
    @include('partials._search')
    <div class="lg:grid lg:gird-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        @foreach ($listings as  $listing)
        <div class="bg-gray-50 border border-gray-200 rounded p-6">
            <div class="flex">
                <img class="hidden w-48 mr-6 md:block" src="{{asset('img/no-image.png') }}" alt=""/>
                <div>
                    <h3 class="text-2xl">
                        <a href="listing/{{ $listing->id }}">{{ $listing->title }}</a>
                    </h3>
                    <div class="text-xl font-bold mb-4">{{ $listing->company_name }}</div>
                    <ul class="flex">

                        @foreach (explode(",", $listing->tags) as  $tag)
                        <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">{{ $tag }}</a>
                        </li> 
                        @endforeach

                    </ul>
                    <div class="text-lg mt-4">
                        <i class="fa-solid fa-location-dot"></i> {{$listing->description}}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endsection
</body>
</html>