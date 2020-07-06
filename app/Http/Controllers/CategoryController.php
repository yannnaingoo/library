<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           $categories = Category::all();
         return view('categories.index',
         compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        //Validation;
        $request->validate([
            "name" =>'
                required'
                   ]);
        //if exit file,upload file
       

        //save data
         $categories = new Category;
         $categories->name= request('name');
    
       
          $categories->save();
        //return
          return redirect()->route('categories.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $categories = Category::find($id); //obj
        
        return view('categories.edit',compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id )
    {
         $request->validate([
            "name" =>'
                required'
                   ]);
        //if exit file,upload file
       

        //save data
           $categories =  Category::find($id);
         $categories->name= request('name');
    
       
          $categories->save();
        //return
          return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $categories = Category::find($id);
        $categories->delete();
        return redirect()->route('categories.index');
    }
}
