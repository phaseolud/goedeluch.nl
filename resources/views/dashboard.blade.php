<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="shadow-sm sm:rounded-lg">
                <div class="p-6 bg-primary-100 border-b border-gray-200 h-96">
                    You're logged in!
                    <x-dropdown>
                        <x-slot name="trigger">Trigger</x-slot>
                        <x-slot name="content">Content</x-slot>
                    </x-dropdown>

                    <ul x-data>
                        <template x-for="j in 10">
                            <li x-text="j"></li>
                        </template>
                    </ul>

                    <ul x-data="{ colors: ['Red', 'Orange', 'Yellow'] }">
                        <template x-for="color in colors">
                            <li x-text="color"></li>
                        </template>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
