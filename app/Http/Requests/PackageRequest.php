<?php
namespace app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PackageRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'type' => 'required|max:50|min:5',
            'weight' => 'required|max:7|min:1',
            'price' => 'required|max:5|min:1|float',
        ];
    }

}