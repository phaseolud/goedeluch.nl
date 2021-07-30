<x-app-layout>
    <div class="w-full bg-primary-300 h-full pb-8">
        <div class="mx-auto container 2xl:px-56 pt-4 px-2">
            <div><a href="#" class="text-white text-3xl">GoedeLunch.nl</a></div>
            <x-random-recipe />
        </div>
    </div> {{-- Header part --}}

    <div class="flex items-center justify-center py-4 bg-primary-400 flex-col md:flex-row">
        <p class="text-white text-lg font-semibold mb-2 md:mb-0">Zoek jouw broodje:</p>
        <form method="GET" action="{{ route('home') }}" class="flex items-center">
            <div class="relative">
            <x-input class="ml-4" name="search" value="{{request('search')}}"/>
            <button class=" absolute bg-white text-primary-400  right-2 inset-y-0 " type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </button>
            </div>
        </form>
    </div> {{-- Search --}}

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mx-auto container px-6 2xl:px-56 pt-2 gap-4 mt-4">
        @foreach($recipes as $recipe)
            <x-sandwich-card :recipe="$recipe"/>
            @endforeach
    </div> {{-- Index --}}
</x-app-layout>
