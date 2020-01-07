<?php

namespace App\Http\Controllers;

use App\moneyDB;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return("kemari lah");
        $lang = "langEng";
        return view("En.index_EN", compact("lang"));
    }

     public function tampil()
    {
       // return("kemari lah");        
        return view("index");
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
     * @param  \App\moneyDB  $moneyDB
     * @return \Illuminate\Http\Response
     */
    public function show(moneyDB $moneyDB)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\moneyDB  $moneyDB
     * @return \Illuminate\Http\Response
     */
    public function edit(moneyDB $moneyDB)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\moneyDB  $moneyDB
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, moneyDB $moneyDB)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\moneyDB  $moneyDB
     * @return \Illuminate\Http\Response
     */
    public function destroy(moneyDB $moneyDB)
    {
        //
    }
}
