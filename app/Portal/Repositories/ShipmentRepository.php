<?php
/**
 * Created by PhpStorm.
 * User: prakash
 * Date: 3/18/17
 * Time: 5:19 PM
 */

namespace App\Portal\Repositories;


use App\Shipment;
use Illuminate\Database\QueryException;

class ShipmentRepository
{
    /**
     * @var Shipment
     */
    private $shipment;


    /**
     * ShipmentRepository constructor.
     * @param Shipment $shipment
     */
    public function __construct(Shipment $shipment)
    {
        $this->shipment = $shipment;
    }

    public function addShipment($formData)
    {

        try {
//            dd($formData);
            $this->shipment->insert($formData);
            return true;
        } catch (QueryException $e) {
            return false;
        }
    }

    public function viewallShipment()
    {
       return $this->shipment->select('*')->get();
    }

    public function singleshippment($id)
    {
        return $this->shipment->select('*')
                            ->where('id',$id)->first();
    }
}