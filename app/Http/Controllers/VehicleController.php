<?php

namespace App\Http\Controllers;

use App\Http\Resources\MarkResource;
use App\Models\Vehicle;
use App\Models\Mark;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $mark = Mark::all();

        return $mark;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehicle = new Vehicle;
        $owner = new Owner;

        $request->validate([
            'license_plate'         => 'required',
            'vehicle_type'          => 'required',
            'name'                  => 'required',
            'email'                 => 'required',
            'identification_card'   => 'required',
            'phone'                 => 'required',
            'mark_id'               => 'required'
        ]);

        if($request->mark_id != 0){
            $vehicle->license_plate = $request->license_plate;
            $vehicle->vehicle_type = $request->vehicle_type;
            $vehicle->save();
    
            $owner->name = $request->name;
            $owner->email = $request->email;
            $owner->identification_card = $request->identification_card;
            $owner->phone = $request->phone;
            $owner->save();
    
            $vehicle->owners()->sync($owner);
            $vehicle->marks()->sync($request->mark_id);
        }else{
            return "error";
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return MarkResource::collection(Vehicle::all());
    }

    public function update(Request $request)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        //
    }
}
