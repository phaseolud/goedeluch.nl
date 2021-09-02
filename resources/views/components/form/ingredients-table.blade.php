@props(['ingredients' => null])
<div class="md:col-span-3 mt-4" x-data="ingredientsHandle({{$ingredients}})">
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
        <template x-for="(ingredient, index) in ingredients" :key="index">
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
                <td><button type="button" class="text-lg ml-4" x-on:click="removeIngredient(index)">&times;</button></td>
            </tr>
        </template>
    </table>
    <button type="button" class="bg-primary-300 text-white text-left text-sm px-4 py-2 shadow-md mt-3"
            x-on:click="addIngredient()">Ingredient toevoegen</button>
</div>
