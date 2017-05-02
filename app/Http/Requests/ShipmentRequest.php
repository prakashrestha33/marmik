<?php
/**
 * Created by PhpStorm.
 * User: prakash
 * Date: 11/30/16
 * Time: 1:49 AM
 */

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class ShipmentRequest extends FormRequest
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
            'customer_name' => 'required|max:50|min:5',
            'receiver_name' => 'required|max:50|min:5',
            'receiver_mobile_no' => 'required|min:7',
            'shipment_type' => 'required',
            'package_id' => 'required',
            'delivery_country' => 'required|min:2',
            'delivery_state' => 'required|min:2',
            'delivery_city' => 'required|min:2',
            'delivery_street_name' => 'required|min:2',
            'delivery_home_no' => 'required|min:1',
            'tracking_id' => 'required|integer|unique:shipments',
            'departure_date' => 'required|date',
            'delivery_date' => 'required|date',
            'delivery_status' => 'required|boolean',

        ];
    }

}