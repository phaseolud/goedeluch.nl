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
                    <strong>Ingredienten</strong>
                    @for($i=0;$i<10;$i++)
                        <p class="pt-2">{{$i + 1}} kg aardappels</p>
                    @endfor
                </div>

                <div class="md:col-span-2">
                    <strong>Beschrijving</strong>
                    @for($i=0;$i<5;$i++)
                        <p class="pt-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, id illo
                            incidunt maiores obcaecati odio quae vitae. Cumque dolorum eius et eum, ex labore molestiae
                            nam nihil quibusdam sequi. Repellat.</p>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
