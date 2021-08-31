@props(['recipe'])

<div class="h-96 md:h-72 w-full shadow-lg flex flex-col md:flex-row mx-4 md:mx-16 transform translate-y-12">
    <div class="flex-grow relative object-cover">
        <div class="filter brightness-50 bg-cover h-full transition duration-300 ease-in transition-opacity"
             style="background-image: url(https://source.unsplash.com/random/?sandwich);"></div>
        <div class="absolute left-2 top-2 text-white text-xs font-sans px-3 py-1 rounded-full bg-primary-300">{{$recipe->type}}</div>
    </div>
    <div class="px-2 md:px-8 flex-1 bg-white py-4 text-xs flex flex-col justify-between">
        <div>
            <p class="font-semibold text-xl">{{$recipe->title}}</p>
            <p class="text-sm pt-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque cupiditate est et laudantium officia
                placeat, provident quidem repellendus similique sint! Animi at commodi dignissimos dolore doloremque.
            </p></div>
        <div class="flex justify-between">
            <div class="flex items-center">
                <x-rating-stars :average-rating="$recipe->average_rating"/>
                <livewire:rate-recipe :recipe="$recipe" />
            <div class="flex space-x-2">
                <div class="h-5 w-5">
                    <svg xmlns="http://www.w3.org/2000/svg" className="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                              d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div>
                    <p class="text-sm flex-shrink-0">
                        {{$recipe->cooking_time_minutes}} min. </p>
                </div>
            </div>
        </div>
    </div>
</div>
