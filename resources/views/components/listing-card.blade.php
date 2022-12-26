@props(['listing'])
<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="{{$listing->logo ? asset('storage/' . $listing->logo_path) : asset('/img/no-image.png') }}" alt=""/>
        <div>
            <h3 class="text-2xl">
                <a href="listing/{{ $listing->id }}">{{ $listing->title }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $listing->company_name }}</div>
                <x-listing-tags :tags="$listing->tags"/>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$listing->description}}
            </div>
        </div>
    </div>
</x-card>