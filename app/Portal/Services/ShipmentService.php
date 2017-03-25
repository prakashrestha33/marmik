<?php
/**
 * Created by PhpStorm.
 * User: prakash
 * Date: 3/18/17
 * Time: 5:17 PM
 */

namespace App\Portal\Services;


use App\Portal\Repositories\ShipmentRepository;

class ShipmentService
{

    /**
     * @var ShipmentRepository
     */
    private $shipmentRepository;

    public function __construct(ShipmentRepository $shipmentRepository)
    {
        $this->shipmentRepository = $shipmentRepository;
    }

    public function add_shipment($request)
    {
        $formData = $request->all();
        $formData = array_except($formData, ['_token', 'to', 'remove']);
        $data= $this->shipmentRepository->addShipment($formData);
        return $data;
    }

    public function viewall()
    {
        $data= $this->shipmentRepository->viewallShipment();
        return $data;
    }

    public function getshipmentId($id)
    {
        $data= $this->shipmentRepository->singleshippment($id);
        return $data;
    }

    public function update_shipment($request, $id)
    {
        $formData=$request->all();
        return $this->shipmentRepository->updateShipment($formData,$id);
    }


}