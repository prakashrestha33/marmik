<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Portal\Services\CustomerService;
use App\Portal\Services\PackageService;
use App\Portal\Services\PickupService;
use App\Portal\Services\ShipmentService;
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
    /**
     * @var ShipmentService
     */
    private $shipmentService;
    /**
     * @var CustomerService
     */
    private $customerService;

    public function __construct(PackageService $packageService,PickupService $pickupService,
                                ShipmentService $shipmentService,CustomerService $customerService)
    {
        $this->middleware('auth');
        $this->packageService = $packageService;
        $this->pickupService = $pickupService;
        $this->shipmentService = $shipmentService;
        $this->customerService = $customerService;
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
        $package=$this->packageService->getpackageid($pickup->package_id);

        return view('front.checkout',compact('pickup','package'));
    }

    public function history($id)
    {
        $pickup=$this->pickupService->getpickupdetailbycusid($id);

        return view('front.history',compact('pickup'));
    }

    public function password($id)
    {
        $user = $this->customerService->getCustomerId($id);
        return view('front.password',compact('user'));
    }

    /**
     * update password
     * @param Request $request
     * @param $id
     * @return $this
     */


    public function changepassword(CustomerRequest $request, $id)
    {

        if ($this->customerService->changePassword($request, $id)) {
            return redirect()->route('landing',$id)->withSuccess('password Changed');
        }
        return back()->withErrors('old password may be wrong');
    }
}
