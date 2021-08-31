<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-center h-48">
            {{--            Empty slot just for the height   --}}
        </div>
    </x-slot>

    <x-white-box title="Voeg een broodje toe">
        <x-form.errors />
        {{--            The form --}}
        <form action="{{route('recipes.update', $recipe)}}" method="POST" class="grid md:grid-cols-3 gap-4 mx-2 pt-4">
            @method("PUT")
            @csrf
            {!! RecaptchaV3::field('recipes') !!}
            <x-form.input type="text" name="title" label="Naam broodje" required value="{{$recipe->title}}"/>
            <x-form.input type="number" name="cooking_time_minutes" label="Bereidingstijd (minuten)" required value="{{$recipe->cooking_time_minutes}}"/>

            <x-form.select name="type" label="Type" required>
                <option value="vega" {{ $recipe->type == 'vega' ? 'selected' : '' }}>Vega</option>
                <option value="vlees"{{ $recipe->type == 'vlees' ? 'selected' : '' }}>Vlees</option>
                <option value="vis"{{ $recipe->type == 'vis' ? 'selected' : '' }}>Vis</option>
            </x-form.select>
            <x-form.input type="file" accept="image" name="image" label="Afbeelding"/>

            <x-form.ingredients-table :ingredients="$recipe->ingredients" />
            <x-form.steps-table :steps="$recipe->steps" />
            <x-form.checkbox :approved="$recipe->approved"/>
            <div class="md:col-span-3 flex justify-between items-center">
                <x-form.recaptcha-text/>
                <button class="bg-primary-300 text-white text-left text-sm px-4 py-2 shadow-md flex-shrink-0">Deel recept!</button>
            </div>
        </form>
    </x-white-box>

</x-app-layout>
