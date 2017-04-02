<?php

namespace App\Http\Controllers;

use App\Portal\Services\TrackingService;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    /**
     * @var TrackingService
     */
    private $trackingService;


    /**
     * TrackingController constructor.
     */
    public function __construct(TrackingService $trackingService)
    {

        $this->trackingService = $trackingService;
    }

    public function track(Request $request){

        $data = $request->all();

        $response = $this->trackingService-> checkbatch($data);

        return response()->json($response);
    }
}
