<?php

namespace App\Http\Controllers;

use App\Models\CarWorker;
use App\Models\Car;
use App\Models\Brand;
use App\Models\User;
use App\Models\Costumer;
use App\Models\Payment;
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
        //Ispisi radnike koji su zaprimili koje automobile i kojeg datuma
        $worker_get_cars=DB::table('car__workers')
        ->select('users.name as uname', 'cars.name as cname', 'cars.model as model', 'car__workers.date as date')
        ->join('users','car__workers.worker_id','=','users.id')
        ->join('cars','car__workers.car_id','=','cars.id')
        ->get();

        
        //Ispisi koliko je koji radnik zaprimio automobila
        $worker_mosts=DB::table('users')
        ->select('users.*', DB::raw('count(*) as brojac'))
        ->groupBy('users.id')
        ->join('car__workers','users.id','=','car__workers.worker_id')
        ->join('cars','car__workers.car_id','=','cars.id')
        ->orderByRaw('COUNT(*) DESC')
        ->get();

        //Koliko svaki klijent treba da plati kojem radniku
        $customer_payments=DB::table('payments')
        ->select('costumers.fname as fname','costumers.lname as lname', 'users.name as uname', 'payments.total as total', 'payments.date as date')
        ->join('costumers','payments.costumer_id','=','costumers.id')
        ->join('car__workers','payments.carworker_id','=','car__workers.id')
        ->join('users','car__workers.worker_id','=','users.id')
        ->get();

        return view('carworker.index',[
            'worker_get_cars' => $worker_get_cars,
            'worker_mosts' => $worker_mosts,
            'customer_payments' => $customer_payments
        ]);
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
