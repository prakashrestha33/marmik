<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Portal\Services\ShipmentService;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    /**
     * @var ShipmentService
     */
    private $shipmentService;

    /**
     * ShipmentController constructor.
     * @param ShipmentService $shipmentService
     */
    public function __construct(ShipmentService $shipmentService)
    {
        $this->middleware('auth:admin');
        $this->shipmentService = $shipmentService;
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
        return view('admin/shipmentadmin/create');

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
        //
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
        //
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
}
