<?php

namespace App\Http\Controllers;

use App\Portal\Services\PackageService;
use App\Portal\Services\PickupService;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    /**
     * @var PackageService
     */
    private $packageService;
    /**
     * @var PickupService
     */
    private $pickupService;

    public function __construct(PackageService $packageService,PickupService $pickupService)
    {
        $this->middleware('auth');
        $this->packageService = $packageService;
        $this->pickupService = $pickupService;
    }


    public function pickup()
    {
        $package= $this->packageService->getpackage();
        return view('front.pickup',compact('package'));
    }
    public function pickupstore(Request $request)
    {
        if ($pickup=$this->pickupService->addpickuprequest($request)) {
            $id=$pickup->id;
            return redirect()->route('package.checkout',$id)->withSuccess("package pickup request made!");
        }
        return back()->withErrors("Something went wrong");
    }

    public function checkout($id)
    {
        $pickup=$this->pickupService->getpickupdetail($id);
        return view('front.checkout',compact('pickup'));
    }
}
