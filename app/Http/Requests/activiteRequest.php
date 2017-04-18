<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class activiteRequest extends FormRequest
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
            'activite' => 'required|max:255',
            'description' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required',
            'lieu' => 'required|max:255',
            'photo' => 'required|image'
        ];
    }
}
