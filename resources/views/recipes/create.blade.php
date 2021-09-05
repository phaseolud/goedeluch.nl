<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-center h-48">
            {{--            Empty slot just for the height   --}}
        </div>
    </x-slot>

    <x-white-box title="Voeg een broodje toe">
        <x-form.errors />
        {{--            The form --}}
        <form action="{{route('recipes.store')}}" method="POST" class="grid md:grid-cols-3 gap-4 mx-2 pt-4" enctype="multipart/form-data">
            @csrf
            <x-form.input type="text" name="title" label="Naam broodje" required/>
            <x-form.input type="number" name="cooking_time_minutes" label="Bereidingstijd (minuten)" required/>

            <x-form.select name="type" label="Type" required>
                <option value="vega">Vega</option>
                <option value="vlees">Vlees</option>
                <option value="vis">Vis</option>
            </x-form.select>
            <x-form.input type="file" accept="image" name="image" label="Afbeelding"/>
            <x-form.textarea name="description" label="Omschrijving" required/>
            <x-form.ingredients-table />
            <x-form.steps-table />
            <div x-data="{buttonDisabled: disabled}">
            <div>
                {!! ReCaptcha::htmlFormSnippet() !!}
            </div>
            <div class="md:col-span-3 flex justify-end items-center">
                <button class="bg-primary-300 text-white text-left text-sm px-4 py-2 shadow-md flex-shrink-0" x-bind:disabled="buttonDisabled">Deel recept!</button>
            </div>
            </div>
        </form>
    </x-white-box>

</x-app-layout>
