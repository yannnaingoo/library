<?php

namespace App\Http\Controllers;

// use App\Borrow;
use Illuminate\Http\Request;
use App\Member;
use App\Borrow;
use App\Book;


use App\Borrowdetail;

class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $borrow= Borrow::where('status',0)->get();
         return view('borrow.index',
         compact('borrow'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {       
        $books = Book::all();
          $members = Member::all();
           return view('borrow.create',compact('members','books'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        
        
        $user= request('member');;
        //dd($user);
        $date =date('Y-m-d');
        // 
        $codeno = uniqid();
        $borrow = new Borrow;
        $borrow->user_id =  $user;
        $borrow->borrow_date= $date;
        $borrow->code_no = $codeno;

        $borrow->save();

        $borrowdetail = new Borrowdetail;
          $borrowbook = request('states');
         
            $borrowdetail->code_no = $codeno;
         foreach ($borrowbook as $value){
          
            $borrowdetail = new Borrowdetail;
          $borrowdetail->code_no = $codeno;
          $borrowdetail->book_id = $value;
          $borrowdetail->borrow_id = $borrow->id;
           $borrowdetail->save();

         }
         return redirect()->route('borrow.index'); 
    
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function show($code_no)
    {
        $borrow = Borrow::where('code_no','=',$code_no)->first();
         $borrowdetail = Borrowdetail::where('code_no','=',$code_no)->get();
        return view ('borrow.detail',compact('borrowdetail','borrow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function edit(Borrow $borrow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Borrow $borrow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function destroy(Borrow $borrow)
    {
        //
    }
}
