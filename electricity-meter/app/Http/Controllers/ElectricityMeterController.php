<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreElectricityMeterRequest;
use App\Http\Requests\UpdateElectricityMeterRequest;
use App\Models\ElectricityMeter;

class ElectricityMeterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreElectricityMeterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreElectricityMeterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ElectricityMeter  $electricityMeter
     * @return \Illuminate\Http\Response
     */
    public function show(ElectricityMeter $electricityMeter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ElectricityMeter  $electricityMeter
     * @return \Illuminate\Http\Response
     */
    public function edit(ElectricityMeter $electricityMeter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateElectricityMeterRequest  $request
     * @param  \App\Models\ElectricityMeter  $electricityMeter
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateElectricityMeterRequest $request, ElectricityMeter $electricityMeter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ElectricityMeter  $electricityMeter
     * @return \Illuminate\Http\Response
     */
    public function destroy(ElectricityMeter $electricityMeter)
    {
        //
    }
}
