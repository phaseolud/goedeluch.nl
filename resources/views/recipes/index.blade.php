<x-app-layout>
    <x-slot name="header">
        <livewire:random-recipe />
    </x-slot>
    <div class="mx-auto container px-6 2xl:px-56 py-8">
        <p class="text-lg mb-2">
            Ben jij ook altijd op zoek naar een lekker broodje om te lunchen, gewoon even iets anders dan de boterham met pindakaas? Op deze website is een volledig overzicht met lekkere lunchgerechten, die ervoor zorgen dat jij heerlijk van jouw lunch kan genieten! Probeer hierboven op een van de knoppen vlees, vis of vega te klikken,
            om een willekeurig broodje te zoeken. Ook kan je hieronder op zoek naar jouw favoriete broodje. Heb je zelf een goed recept of idee? Laat het weten en voeg het broodje toe!
            Eet smakelijk!
        </p>
    </div>

    <livewire:recipe-search />
</x-app-layout>
