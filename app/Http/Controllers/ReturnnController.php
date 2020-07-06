<?php

namespace App\Http\Controllers;

use App\Returnn;
use Illuminate\Http\Request;
use App\Borrow;
use App\Borrowdetail;

class ReturnnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         $borrow= Borrow::where('status',1)->get();
         return view('returns.index',
         compact('borrow'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
     * @param  \App\Returnn  $returnn
     * @return \Illuminate\Http\Response
     */
    public function show(Returnn $returnn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Returnn  $returnn
     * @return \Illuminate\Http\Response
     */
    public function edit(Returnn $returnn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Returnn  $returnn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Returnn $returnn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Returnn  $returnn
     * @return \Illuminate\Http\Response
     */
    public function destroy(Returnn $returnn)
    {
        //
    }
}
