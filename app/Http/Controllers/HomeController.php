<?php

namespace App\Http\Controllers;

use App\Portal\Services\PackageService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @var PackageService
     */
    private $packageService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PackageService $packageService)
    {
//        $this->middleware('auth');
        $this->packageService = $packageService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $package= $this->packageService->getpackage();

        return view('home',compact('package'));
    }
}
