<div>
    <div class="flex flex-col mb-2">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Naam Recept
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Type
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">

                        @foreach($recipes as $recipe)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{route('recipes.show', $recipe)}}" class="text-sm text-gray-900 hover:text-primary-900">{{ $recipe->title }}</a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                        @if($recipe->approved)
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-primary-100 text-primary-800">
                              Goedgekeurd
                            </span>
                        @else
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                              In afwachting
                            </span>
                        @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{$recipe->type}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="{{route('recipes.edit', $recipe)}}" class="text-primary-600 hover:text-primary-900">Edit</a>
                            </td>
                        </tr>

                        @endforeach
                        <!-- More people... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{$recipes->links()}}
</div>
