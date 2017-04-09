<?php

namespace App\Http\Controllers;

use App\Portal\Services\ShipmentService;
use App\Portal\Services\TrackingService;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    /**
     * @var TrackingService
     */
    private $trackingService;
    /**
     * @var ShipmentService
     */
    private $shipmentService;


    /**
     * TrackingController constructor.
     */
    public function __construct(TrackingService $trackingService,ShipmentService $shipmentService)
    {

        $this->trackingService = $trackingService;
        $this->shipmentService = $shipmentService;
    }

    public function track(Request $request){

        $data = $request->all();
        $data = array_except($data, ['_token', 'to', 'remove']);
        $response = $this->trackingService-> checkbatch($data);
        return response()->json($response);
    }


    public  function track_idstatus(Request $request)
    {

        $data = $request->all();
        $data = array_except($data, ['_token', 'to', 'remove']);
        $response = $this->shipmentService->checktracking_id($data);
        return response()->json($response);
    }
}
