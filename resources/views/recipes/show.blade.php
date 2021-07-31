<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-center h-48">
            <x-sandwich-card-large :recipe="$recipe"/>
        </div>
    </x-slot>

    <div class="mx-auto container px-6 2xl:px-56 gap-4 mt-64 md:mt-40">
        <div class="md:flex-row md:mx-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-y-16">
                <div>
                    <p class="text-lg font-semibold">Ingredienten</p>
                @foreach($recipe->ingredients as $ingredient)
                    <p>{{ $ingredient->pivot->amount .' ' .$ingredient->pivot->unit . ' ' . $ingredient->name}}</p>
                @endforeach
                </div>

                <div class="md:col-span-2">
                    <p class="text-lg font-semibold">Beschrijving</p>
                    @foreach($recipe->steps as $step)
                        <p class="pt-6">{{$step}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
