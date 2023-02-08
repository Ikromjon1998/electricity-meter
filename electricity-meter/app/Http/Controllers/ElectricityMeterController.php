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
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'description' => 'string',
                'device_id'   => 'string',
                'ebt'         => 'nullable | string',
                'location'    => 'nullable | string',
            ]
        );

        $electricityMeter = new ElectricityMeter(
            [
                'description' => $validatedData['description'],
                'device_id'   => $validatedData['device_id'],
                'ebt'         => $validatedData['ebt'],
                'location'    => $validatedData['location'],
            ]
        );

        $electricityMeter->save();

        return redirect(route('electricity-meters'))->with('success', sprintf('Stromzähler %s hinzugefügt', $validatedData['device_id']));
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
     * @param  ElectricityMeter $electricityMeter
     * @return View
     */
    public function edit(ElectricityMeter $electricityMeter)
    {
        return view('electricity.editElectricity', ['electricityMeter' => $electricityMeter]);
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
        $validatedData = $request->validate(
            [
                'description' => 'nullable | string',
                'device_id'   => 'nullable | string',
                'ebt'         => 'nullable | string',
                'location'    => 'nullable | string',
            ]
        );

        $electricityMeter->update(
            [
                'description' => $validatedData['description'],
                'device_id'   => $validatedData['device_id'],
                'ebt'         => $validatedData['ebt'],
                'location'    => $validatedData['location'],
            ]
        );

        return redirect(route('electricity-meters'));
    }//end update()


    /**
     * Remove the specified resource from storage.
     *
     * @param  ElectricityMeter $electricityMeter
     * @return RedirectResponse
     */
    public function destroy(ElectricityMeter $electricityMeter)
    {
        $electricityMeter->delete();
        return redirect(route('electricity-meters'));
    }//end destroy()
}//end class
