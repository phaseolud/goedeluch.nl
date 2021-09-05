@props(['title'])
<div class="mx-auto container 2xl:px-40">
<div class="shadow-lg md:flex-row mx-4 md:mx-16 transform -translate-y-24 bg-white px-2 py-4">
    <p class="text-3xl text-primary-400 font-semibold text-center">
        {{ $title }}
    </p>
    {{ $slot }}
</div>
</div>
