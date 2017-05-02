<?php
namespace app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BatchRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'batch_id' => 'required|max:10|unique:batches',
        ];
    }

}