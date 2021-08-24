<x-app-layout>
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

            <x-form.errors />
            {{--            The form --}}
            <form action="{{route('recipes.store')}}" method="POST" class="grid md:grid-cols-3 gap-4 mx-2 pt-4">
                @csrf
                {!! RecaptchaV3::field('recipes') !!}
                <x-form.input type="text" name="title" label="Naam broodje" required/>
                <x-form.input type="number" name="cooking_time_minutes" label="Bereidingstijd (minuten)" required/>

                <x-form.select name="type" label="Type" required>
                    <option value="vega">Vega</option>
                    <option value="vlees">Vlees</option>
                    <option value="vis">Vis</option>
                </x-form.select>

                <x-form.ingredients-table />
                <x-form.steps-table />

                <div class="md:col-span-3 flex justify-between items-center">
                    <div class="text-xs text-left text-gray-700">
                        This site is protected by reCAPTCHA and the Google
                        <a class="text-primary-600" href="https://policies.google.com/privacy">Privacy Policy</a> and
                        <a class="text-primary-600" href="https://policies.google.com/terms">Terms of Service</a> apply.
                    </div>
                    <button class="bg-primary-300 text-white text-left text-sm px-4 py-2 shadow-md">Deel recept!</button>
                </div>
            </form>

        </div>
    </div>

</x-app-layout>
