<?php

namespace App\Http\Controllers;

use App\Models\CarWorker;
use App\Models\Car;
use App\Models\Brand;
use App\Models\User;
use App\Models\Costumer;
use Illuminate\Http\Request;
use DB;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //Ispis podataka o automobilu, ko je vlasnik tog automobila i kojem brendu
        $cars_in_lines=DB::table('cars')
        ->select('cars.name as name','cars.model as model','cars.year as year','brands.name as bname', 'costumers.fname as fname', 'costumers.lname as lname')
        ->join('costumers','cars.id_costumer','=','costumers.id')
        ->join('brands','cars.id_brand','=','brands.id')
        ->get();

        return view('cars.index',['cars_in_lines' => $cars_in_lines]);
        


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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}
