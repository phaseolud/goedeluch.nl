<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-center h-48">
            {{--            Empty slot just for the height   --}}
        </div>
    </x-slot>

    <x-white-box title="Dashboard">
        <p class="text-lg my-2">Hier is een overzicht van alle recepten.</p>

{{--        Table for not approved recipes --}}
        <x-not-approved-recipe-table />
    </x-white-box>
</x-app-layout>
