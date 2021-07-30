@props(['recipe'])

<div class="flex justify-around mt-4 items-center flex-col flex-col-reverse md:flex-row">
    <div class="mt-4">
        <p class="text-center font-semibold text-white text-4xl">
            Maak een broodje!
        </p>
        <div class="flex justify-around mt-4">
                <x-button href="?type=vlees">vlees</x-button>
                <x-button href="?type=vega">vega</x-button>
                <x-button href="?type=vis">vis</x-button>
            </div>
    </div> {{-- random generator buttons --}}

    <div class="w-96">
            <x-sandwich-card :recipe="$recipe" />
    </div>
</div>
