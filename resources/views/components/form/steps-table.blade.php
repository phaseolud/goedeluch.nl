@props(['steps' => null])
<div class="md:col-span-3 mt-4" x-data="stepsHandle({{is_null($steps)? null : json_encode($steps)}})">
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
