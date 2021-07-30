@props(['recipe'])

<a href="#" class="h-72 w-full shadow-lg flex flex-col hover:shadow-xl transition duration-300 ease-out group transform hover:-translate-y-1">
    <div class="flex-grow relative object-cover">
        <div class="filter brightness-50 bg-cover h-full transition duration-300 ease-in transition-opacity"
             style="background-image: url(https://source.unsplash.com/random/?sandwich);"></div>
        <div class="absolute left-2 bottom-2 text-white font-bold text-xl">{{$recipe->title}}</div>
        <div class="absolute left-2 top-2 text-white text-xs font-sans px-3 py-1 rounded-full bg-primary-300">{{$recipe->type}}</div>
    </div>
    <div class="bg-white py-4 text-xs px-2 flex justify-between items-center">
        <x-rating-stars :average-rating="$recipe->average_rating"/>
        {{$recipe->cooking_time_minutes}} min.</div>
</a>
