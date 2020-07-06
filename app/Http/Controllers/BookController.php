<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use App\Author;
use App\Category;
use App\Qty;

use App\Borrowdetail;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
         $books= Book::all();
        // $books = Book::orderBy('id', 'desc')->take(3)->get();

      $borrowdetail = Borrowdetail::groupBy('book_id')->count('book_id');
         // dd($borrowdetail);
         return view('books.index',compact('books','borrowdetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $categories = Category::all();
             $authors = Author::all();
             $books = Book::all();
             

        return view('books.create',compact('categories','authors','books'));
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
            "categories" =>'required',
            "authors" =>'required',
            "price"=> 'required',
             "photo"=> 'required|min:jpeg,bmp,png,jpg',
             "description"=>'required',
             "qty" => 'required'

         ]);
             // dd(request('photo'));
        //if exit file,upload file
          if ($request->hasfile('photo')) {
           $photo = $request->file('photo');
           $upload_dir = public_path().'/storage/images/';
           $name = time().'.'.$photo->getClientOriginalExtension();
           $photo-> move($upload_dir,$name);// into the folder
           $path = '/storage/images/'.$name; // path into database
       }else{
        $path='';
       }


        //save data 
         $books = new Book;
         $books->name= request('newbook');
         $books->photo= $path;
         $books->author_id = request('authors');
         $books->category_id = request('categories');
         $books->price = request('price');
         $books->description = request('description');
         // dd($request);
         // $books->qty = request('qty');
         $books->save();

          $qtyy = new Qty;
          $qtyy->qty = request('qty');
          $qtyy->book_id = $books->id;
          $qtyy->save();

    
        return redirect()->route('books.index'); 
        
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = Book::find($id);
        return view ('books.show',compact('row'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $books = Book::find($id);
           $categories = Category::all();
             $authors = Author::all(); //obj
        
        return view('books.edit',compact('books','categories','authors'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id )
    {
        
             $request->validate([
            "categories" =>'required',
            "authors" =>'required',
            "price"=> 'required',
           
             "description"=>'required'
             

         ]);
             // dd(request('photo'));
        //if exit file,upload file
          if ($request->hasfile('photo')) {
           $photo = $request->file('photo');
           $upload_dir = public_path().'/storage/images/';
           $name = time().'.'.$photo->getClientOriginalExtension();
           $photo-> move($upload_dir,$name);// into the folder
           $path = '/storage/images/'.$name; // path into database
       }else{
        $path=request('oldphoto');
       }


        //save data 
        $books=Book::find($id);
        $books->name= request('updatebook');
         $books->photo= $path;
         $books->author_id = request('authors');
         $books->category_id = request('categories');
         $books->price = request('price');
         $books->description = request('description');
         // dd($request);
         // $books->qty = request('qty');
         $books->save();

        
    
        return redirect()->route('books.index'); 
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $books = Book::find($id);
        $books->delete();
        return redirect()->route('books.index');
    }
    // -------------
     public function search(Request $request)
    {
        $cid =request('id');
        $book=Book::where('id',$cid)->with('author')->with('category')->get();
        // dd($book);
        return $book;
    }

}
