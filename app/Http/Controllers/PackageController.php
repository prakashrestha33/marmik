<?php

namespace App\Http\Controllers;

use App\Portal\Services\PackageService;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    //

    /**
     * @var PackageService
     */
    private $packageService;

    public function __construct(PackageService $packageService)
    {

        $this->packageService = $packageService;
    }

    public function create()
    {
        $package= $this->packageService->getpackage();

        return view('front.packagecomplain',compact('package'));
    }
    public function report(Request $request)
    {
        if ($this->packageService->addPackagereport($request)) {
            return redirect()->route('home')->withSuccess("package lost report added!");
        }
        return back()->withErrors("Check Your Tracking Id once more");
    }
}
