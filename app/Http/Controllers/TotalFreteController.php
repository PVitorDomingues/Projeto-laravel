<?php

namespace App\Http\Controllers;

use App\TotalFrete;
use Illuminate\Http\Request;

class TotalFreteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('frete:2 reais');
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
     * @param  \App\TotalFrete  $totalFrete
     * @return \Illuminate\Http\Response
     */
    public function show(TotalFrete $totalFrete)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TotalFrete  $totalFrete
     * @return \Illuminate\Http\Response
     */
    public function edit(TotalFrete $totalFrete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TotalFrete  $totalFrete
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TotalFrete $totalFrete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TotalFrete  $totalFrete
     * @return \Illuminate\Http\Response
     */
    public function destroy(TotalFrete $totalFrete)
    {
        //
    }
}
