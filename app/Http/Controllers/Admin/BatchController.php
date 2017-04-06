<?php

namespace App\Http\Controllers\Admin;

use App\Portal\Services\BatchService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BatchController extends Controller
{

    /**
     * @var BatchService
     */
    private $batchService;

    public function __construct(BatchService $batchService)
     {
<<<<<<< HEAD
=======
         $this->middleware('auth:admin');
>>>>>>> d2e21dfb4cba4c9b29131ac621e89425f80b009e
         $this->batchService = $batchService;
     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batch= $this->batchService->getallbatch();
       return view('admin.batch.index',compact('batch'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.batch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($this->batchService->addBatch($request)) {
            return redirect()->route('batch.index')->withSuccess("Batch added!");
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
