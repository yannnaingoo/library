<?php

namespace App\Http\Controllers;

use App\Qty;
use Illuminate\Http\Request;
use App\Book;

class QtyController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         $request->validate([
            "addqty" =>'required'
                   ]);
        //if exit file,upload file
       
         
                 //save data
           $qtyy = new Qty;
          $qtyy->qty = request('addqty');
          $qtyy->book_id =request('id');
          $qtyy->save();
// dd($request);

        //return
               return redirect()->route('books.index'); 
          
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Qty  $qty
     * @return \Illuminate\Http\Response
     */
    public function show(Qty $qty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Qty  $qty
     * @return \Illuminate\Http\Response
     */
    public function edit(Qty $qty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Qty  $qty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Qty $qty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Qty  $qty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Qty $qty)
    {
        //
    }
}
