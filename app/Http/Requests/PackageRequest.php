<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class PackageRequest extends FormRequest
{
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
            'type' => 'required|max:50|min:5',
            'weight' => 'required|max:7|min:1',
            'price' => 'required|min:1|integer',
        ];
    }

}