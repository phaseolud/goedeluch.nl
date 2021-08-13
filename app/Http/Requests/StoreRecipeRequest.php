<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRecipeRequest extends FormRequest
{
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
            'title' => ['string', 'max:255', 'required', 'unique:recipes'],
            'cooking_time_minutes' => ['integer', 'required'],
            'type' => ['required', Rule::in(['vega', 'vlees', 'vis'])],
            'amount.*' => ['numeric', 'nullable'],
            'unit.*' => ['string', 'nullable', Rule::in(['tsp', 'tbsp', 'gram', 'ml', ''])],
            'name.*' => ['string'],
            'steps.*' => ['string'],
            'steps' => ['array']
        ];
    }
}
