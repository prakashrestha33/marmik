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
        if ($data['delivery_status']==1)
        {
             $this->sms($data['tracking_id']);
        }
        return response()->json($response);
    }

    public function sms($id)
    {
        try {
        $ship= $this->shipmentService->getshipbytrackid($id);
            $sms= 'Dear ' . $ship->customer_name.' , Your shipment with Tracking ID:'.$ship->tracking_id. ' has been delivered.Thank You';
            $args =
                http_build_query(array(
                    'token' => env('SPARROW_TOKEN'),
                    'from'  => 'Demo',
                    'to'    =>  $ship->receiver_mobile_no,
                    'text'  =>   $sms));
            $url = "http://api.sparrowsms.com/v2/sms/";


            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS,$args);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            $response = curl_exec($ch);
            $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            return true;

        } catch (Exception $e) {

            return back()->withErrors('sms was not send to the customer!');
        }



    }
}
