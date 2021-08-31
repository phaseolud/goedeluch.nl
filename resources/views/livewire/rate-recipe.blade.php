<div class="relative mx-2" x-data="{open: false, rating: 0}">
    <button @click="open = !open" class="underline text-sm">Beoordeel</button>
    <form class="border border-4 absolute bg-white shadow-md transform -left-1/2 -bottom-full mb-12 w-max px-4 py-2 flex" method="POST" x-show="open" @click.away="open = false" @mouseover.away="rating = 0" x-cloak>
        @if($already_rated)
            <p class="text-xs">Dank je voor je beoordeling!</p>
        @else
        @for($i=0;$i<5;$i++)
            <svg wire:click="setRating({{$i + 1}})" xmlns="http://www.w3.org/2000/svg" @mouseover="rating = {{$i + 1}}" class="h-7 w-7 text-primary-400" x-bind:fill=" {{$i}} < rating ? 'currentColor' : 'none'" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
            </svg>
        @endfor
        @endif
    </form>
</div>
