<?php

namespace App\Http\Requests;

use App\Models\Recipe;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreRecipeRequest extends FormRequest
{
    /**
     * @var mixed
     */

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'title' => ['string', 'max:255', 'required', Rule::unique('recipes')->ignore($this->recipe)],
            'cooking_time_minutes' => ['integer', 'required'],
            'type' => ['required', Rule::in(['vega', 'vlees', 'vis'])],
            'amount.*' => ['numeric', 'nullable'],
            'unit.*' => ['string', 'nullable', Rule::in(['tsp', 'tbsp', 'gram', 'ml', ''])],
            'description' => ['string', 'required'],
            'name.*' => ['string'],
            'steps.*' => ['string'],
            'steps' => ['array'],
            'g-recaptcha-response' => ['required', 'recaptchav3:recipes,0.5'],
            'approved' => ['nullable', 'boolean', Gate::allows('admin') ? '' : 'prohibited' ],
            'image' => ['nullable', 'image']
        ];
    }
}
