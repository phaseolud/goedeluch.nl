<div class="flex justify-around mt-4 items-center flex-col flex-col-reverse md:flex-row">
    <div class="mt-4">
        <p class="text-center font-semibold text-white text-4xl">
            Maak een broodje!
        </p>
        <div class="flex justify-around mt-4">
            <x-button wire:click="setType('vlees')">vlees</x-button>
            <x-button wire:click="setType('vega')">vega</x-button>
            <x-button wire:click="setType('vis')">vis</x-button>
        </div>
    </div> {{-- random generator buttons --}}

    <div class="w-96">
        @if($recipe)
            <x-sandwich-card :recipe="$recipe" />
        @endif
    </div>
</div>
