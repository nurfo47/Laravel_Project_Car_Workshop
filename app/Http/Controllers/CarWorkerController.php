<?php

namespace App\Http\Controllers;

use App\Models\CarWorker;
use App\Models\Car;
use App\Models\Brand;
use App\Models\User;
use App\Models\Costumer;
use Illuminate\Http\Request;
use DB;
class CarWorkerController extends Controller
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
        $brands=DB::table('brands')->get();
        $costumer=DB::table('costumers')->get();
        return view('cars.add', ['brands'=>$brands]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('Costumers')->insert([
            'fname'=>$request->fname,
            'lname'=>$request->lname,
        ]);
        
        $customer_id = DB::getPdo()->lastInsertId(); //get last inserted id (from upper costumer)

        DB::table('Cars')->insert([
            'name'=>$request->name,
            'model'=>$request->model,
            'year'=>$request->year,
            'motor_type'=>$request->motor_type,
            'id_brand'=>$request->brand,
            'id_costumer'=>$customer_id,
        ]);

        $user = DB::table('users')->get()->first();
        $car = DB::table('cars')->orderBy('id', 'desc')->first();

        DB::table('car__workers')->insert([
            'date'=>$request->date,
            'worker_id'=>$user->id,
            'car_id'=>$car->id,

        ]);
        
        return redirect()->route('cars');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car_Worker  $car_Worker
     * @return \Illuminate\Http\Response
     */
    public function show(Car_Worker $car_Worker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car_Worker  $car_Worker
     * @return \Illuminate\Http\Response
     */
    public function edit(Car_Worker $car_Worker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car_Worker  $car_Worker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car_Worker $car_Worker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car_Worker  $car_Worker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car_Worker $car_Worker)
    {
        //
    }
}
