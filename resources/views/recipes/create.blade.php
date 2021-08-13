<x-app-layout>
{{--    @push('scripts')--}}
{{--        <script src="{{ asset('js/add.js') }}"></script>--}}
{{--    @endpush--}}
    <x-slot name="header">
        <div class="flex justify-center h-48">
            {{--            Empty slot just for the height   --}}
        </div>
    </x-slot>
    <div class="mx-auto container px-6 2xl:px-56">
        {{--        Form in a white floating box   --}}
        <div class="shadow-lg md:flex-row mx-4 md:mx-16 transform -translate-y-24 bg-white px-2 py-4">
            <p class="text-3xl text-primary-400 font-semibold text-center">
                Voeg een broodje toe!
            </p>

            @if ($errors->any())
                <div class="p-6 bg-primary-100">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{--            The form --}}
            <form action="{{route('recipes.store')}}" method="POST" class="grid md:grid-cols-3 gap-4 mx-2 pt-4">
                @csrf
                <div class="w-full"><label for="title" class="text-sm text-gray-600 block">Naam broodje</label>
                    <input type="text" name="title" id="title" class="w-full" required/>
                </div>
                <div class="w-full"><label for="cooking_time_minutes" class="text-sm text-gray-600 block">Bereidingstijd
                        (minuten)</label>
                    <input type="number" name="cooking_time_minutes" id="cooking_time_minutes" class="w-full" required/>
                </div>

                <div class="w-full"><label for="type" class="text-sm text-gray-600 block">Type</label>
                    <select name="type" id="type" class="w-full" required>
                        <option value="vega">Vega</option>
                        <option value="vlees">Vlees</option>
                        <option value="vis">Vis</option>
                    </select>
                </div>

{{--            Ingredients --}}

                <div class="md:col-span-3 mt-4" x-data="ingredientsHandle()">
                    <label for="amount" class="text-sm text-gray-600 block">Ingredienten</label>
                    <table class="table-fixed w-full" >
                        <thead>
                        <tr class="text-left text-xs text-gray-600 font-light" >
                            <td class="w-16">Aantal</td>
                            <td class="w-20">Eenheid</td>
                            <td class="w-full">Ingredient</td>
                            <td class="w-12"></td>

                        </tr>
                        </thead>
                        <template x-for="(ingredient,index) in ingredients" :key="index">
                    <tr>
                        <td><input type="number" x-model="ingredient.amount" class="w-full" name="amount[]" id="amount"></td>
                        <td>
                            <select name="unit[]" id="unit" class="w-full appearance-none" x-model="ingredient.unit">
                                <option value></option>
                                <option value="gram">gram</option>
                                <option value="tbsp">tbsp</option>
                                <option value="tsp">tsp</option>
                                <option value="ml">ml</option>
                            </select>
                        </td>
                        <td><input type="text" class="w-full" name="name[]" id="name" x-model="ingredient.name" required/></td>
                        <td><button type="button" class="text-lg pl-4" x-on:click="removeIngredient(index)">&times;</button></td>
                    </tr>
                        </template>
                    </table>
                    <button type="button" class="bg-primary-300 text-white text-left text-sm px-4 py-2 shadow-md mt-3"
                    x-on:click="addIngredient()">Ingredient toevoegen</button>
                </div>

{{--                Steps --}}
            <div class="md:col-span-3 mt-4" x-data="stepsHandle()">
                <p class="text-sm text-gray-600 block mt-3">Berijdingswijze</p>
                <template x-for="(step, index) in steps">

                    <div class="mb-4">

                        <div class="flex items-center"><label for="steps" class="text-left text-xs text-gray-600 font-light">Stap <span
                                    x-text="index + 1"></span></label> <button type="button" class="text-lg pl-4" x-on:click="removeStep(index)">&times;</button></div>
                        <textarea name="steps[]" x-model="step.description" id="steps" cols="30" rows="3"
                                  class="w-full" required></textarea></div>
                </template>

                <button type="button" class="bg-primary-300 text-white text-left text-sm px-4 py-2 shadow-md mt-3" @click="addStep()">Stap toevoegen</button>
            </div>
                <div class="md:col-span-3 flex justify-end">
                <button class="bg-primary-300 text-white text-left text-sm px-4 py-2 shadow-md mt-3">Deel recept!</button>
                </div>
            </form>

        </div>
    </div>

</x-app-layout>
