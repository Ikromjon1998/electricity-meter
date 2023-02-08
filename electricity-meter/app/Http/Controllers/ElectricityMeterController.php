<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\ElectricityMeter;
use Illuminate\View\View;

class ElectricityMeterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(Request $request)
    {
        $electricityMeters = ElectricityMeter::orderBy('device_id')->paginate(10);

        return view(
            'electricity.overview',
            ['electricityMeters' => $electricityMeters]
        );
    }//end index()

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('electricity.createElectricityMeter');
    }//end create()


    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }//end store()

    /**
     * Display the specified resource.
     *
     * @param  ElectricityMeter $electricityMeter
     * @return View
     */
    public function show(ElectricityMeter $electricityMeter)
    {
        return view(
            'electricity.view',
            ['electricityMeter' => $electricityMeter]
        );
    }//end show()


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ElectricityMeter $electricityMeter
     * @return \Illuminate\Http\Response
     */
    public function edit(ElectricityMeter $electricityMeter)
    {
    }//end edit()


    /**
     * Update the specified resource in storage.
     *
     * @param  Request          $request
     * @param  ElectricityMeter $electricityMeter
     * @return RedirectResponse
     */
    public function update(Request $request, ElectricityMeter $electricityMeter): RedirectResponse
    {
        // return ;
    }//end update()


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ElectricityMeter $electricityMeter
     * @return \Illuminate\Http\Response
     */
    public function destroy(ElectricityMeter $electricityMeter)
    {
    }//end destroy()
}//end class
