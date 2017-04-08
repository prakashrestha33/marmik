<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Portal\Services\PackageService;
use App\Portal\Services\ShipmentService;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    /**
     * @var ShipmentService
     */
    private $shipmentService;
    /**
     * @var PackageService
     */
    private $packageService;

    /**
     * ShipmentController constructor.
     * @param ShipmentService $shipmentService
     */
    public function __construct(ShipmentService $shipmentService, PackageService $packageService)
    {
        $this->middleware('auth:admin');
        $this->shipmentService = $shipmentService;
        $this->packageService = $packageService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viewall= $this->shipmentService->viewall();

        return view('admin/shipmentadmin/index', compact('viewall'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $package=$this->packageService->getpackage();
        $ship_type= $this->shipmentService->getallShipmenttype();
        return view('admin/shipmentadmin/create',compact('package','ship_type'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($this->shipmentService->add_shipment($request)) {
            return redirect()->route('shipment.index')->withSuccess("shipment added!");
        }
        return back()->withErrors("Something went wrong");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $shipid=$this->shipmentService->getshipmentId($id);
        return view('admin/shipmentadmin/show',compact('shipid'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shipid=$this->shipmentService->getshipmentId($id);
        return view('admin/shipmentadmin/edit',compact('shipid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($this->shipmentService->update_shipment($request,$id)) {
            return redirect()->route('shipment.index')->withSuccess("Shipment updated !");
        }
        return back()->withErrors("Something went wrong");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }




    public function indexShipType()
    {
        $stype=$this->shipmentService->getallShipmenttype();
        return view('admin.shipment_type.index',compact('stype'));
    }

    public function createShipType()
    {
        return view('admin.shipment_type.create');
    }

    public function storeShipType(Request $request)
    {
        if ($this->shipmentService->add_shipment_type($request)) {
            return redirect()->route('shipment.type.index')->withSuccess("shipment type added!");
        }
        return back()->withErrors("Something went wrong");
    }

public  function track_idstatus(Request $request)
{
        dd($request);

    $data = $request->all();
    $data = array_except($data, ['_token', 'to', 'remove']);
//dd($data);
    $response = $this->shipmentService->checktracking_id($data);

    return response()->json($response);
}

}
