<?php

namespace App\Http\Controllers;

use App\Models\CarParts;
use Illuminate\Http\Request;
use DB;

class CarPartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parts=DB::table('car_parts')
        ->get();

        return view('parts.index',['parts'=>$parts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parts.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'pname'=>'required|string|max:255',
        ]);

        DB::table('car_parts')->insert([
            'pname'=>$request->pname,
            'price'=>$request->price,
        ]);
        return redirect()->route('parts');
    }

    public function delete(Request $request)
    {
        $id=$request->id;
        CarParts::destroy($id);
        return redirect()->route('parts');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarParts  $carParts
     * @return \Illuminate\Http\Response
     */
    public function show(CarParts $carParts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarParts  $carParts
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id=$request->id;

        $parts=DB::table('car_parts')
        ->where('id',$id)
        ->get();

        return view('parts.edit',['parts'=>$parts]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarParts  $carParts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=$request->id;

        $request->validate([
            'pname'=>'required|string|max:255',
            'price'=>'required|numeric',
        ]);

        $update_query=DB::table('car_parts')
        ->where('id', $id)
        ->update([
            'pname'=>$request->pname,
            'price'=>$request->price,
        ]);
        
        return redirect()->route('parts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarParts  $carParts
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarParts $carParts)
    {
        //
    }
}
