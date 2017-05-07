<?php
/**
 * Created by PhpStorm.
 * User: nimesh
 * Date: 3/13/17
 * Time: 1:10 PM
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Portal\Services\AdminService;
use App\Portal\Services\CustomerService;
use App\Portal\Services\PackageService;
use App\Portal\Services\PickupService;
use App\Portal\Services\ShipmentService;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * @var AdminService
     */
    private $adminService;
    /**
     * @var CustomerService
     */
    private $customerService;
    /**
     * @var ShipmentService
     */
    private $shipmentService;
    /**
     * @var PickupService
     */
    private $pickupService;
    /**
     * @var PackageService
     */
    private $packageService;

    public function __construct(AdminService $adminService ,CustomerService $customerService,
                                ShipmentService $shipmentService,PickupService $pickupService,
                                PackageService $packageService)
    {
        $this->middleware('auth:admin');
        $this->adminService = $adminService;
        $this->customerService = $customerService;
        $this->shipmentService = $shipmentService;
        $this->pickupService = $pickupService;
        $this->packageService = $packageService;
    }

    public function index()
    {
        $customer=$this->customerService->getcustomer();
        $shipment=$this->shipmentService->viewall();
        $pickup= $this->pickupService->getallpickup();
        $lostPackage=$this->packageService->getpackagereports();
        $package=$this->packageService->getpackage();
        $shipmenttype=$this->shipmentService->getallShipmenttype();

        return view('admin',compact('customer','shipment','pickup','lostPackage','package','shipmenttype'));

    }
    public function indexStaff()
    {
        $staff= $this->adminService->getstaff();
        return view('admin.staff.index',compact('staff'));

    }
    public function createStaff()
    {
        return view('admin.staff.create');
    }

    public function storeStaff(Request $request)
    {
        if ($this->adminService->storestaff($request)) {
            return redirect()->route('staff.index')->withSuccess("staff added!");
        }
        return back()->withErrors("Something went wrong");
    }
     public function editStaff($id)
     {
         $staffid= $this->adminService->getstaffid($id);
         return view('admin.staff.edit',compact('staffid'));
     }
    public function updateStaff( Request $request,$id)
    {
        if ($this->adminService->update_staff($request,$id)) {
            return redirect()->route('staff.index')->withSuccess("Staff detail updated !");
        }
        return back()->withErrors("Something went wrong");
    }
}