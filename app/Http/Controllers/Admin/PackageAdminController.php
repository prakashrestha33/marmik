<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Portal\Services\PackageService;
use Illuminate\Http\Request;

class PackageAdminController extends Controller
{
    /**
     * @var PackageService
     */
    private $packageService;

    public  function __construct(PackageService $packageService)
    {
        $this->middleware('auth:admin');
        $this->packageService = $packageService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $package= $this->packageService->getpackage();
       return view('admin.package.index',compact('package'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.package.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($this->packageService->addPackage($request)) {
            return redirect()->route('package.index')->withSuccess("package added!");
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $package= $this->packageService->getpackageid($id);
       return view('admin.package.edit',compact('package'));
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
        if ($this->packageService->update_package($request,$id)) {
            return redirect()->route('package.index')->withSuccess("Package updated !");
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
    public  function reportList()
    {
        $packagereport= $this->packageService->getpackagereports();
//        dd($packagereport);
        return view('admin.package.lost_package_list',compact('packagereport'));
    }
}
