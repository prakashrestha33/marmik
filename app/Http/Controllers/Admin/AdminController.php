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
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * @var AdminService
     */
    private $adminService;

    public function __construct(AdminService $adminService)
    {
        $this->middleware('auth:admin');
        $this->adminService = $adminService;
    }

    public function index()
    {
        return redirect()->route('shipment.index');

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