<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Category;
use App\Borrowdetail;
use App\Borrow;

class FrontendController extends Controller
{
 public function index($value='')
    {
    	   $books = Book::all();
         return view('test.index',
         compact('books'));
    }

    public function modern($id)
    {
        // dd($id);
    	   $modern = Book::where('category_id','=',$id)->get();
         return view('frontend.modern',
         compact('modern'));
        
    }

    public function allbooks($value='')
    {
          $books = Book::all();
      $borrowdetail = Borrowdetail::groupBy('book_id')->count('book_id');
return view('frontend.booklist',
         compact('books','borrowdetail'));
    }
    public function category($value='')
    {
       $books = Book::orderBy('id', 'desc')->take(8)->get(); 
       return view('frontend.index',
         compact('books'));


    }


    public function delete(Request $request)
    {
      
    // $checked    = Request::input('books',[]);
        $checked =request('books');
        // dd($checked);
        $checks = explode(',', $checked[0]);
        // dd($checks);
        // die();
        $code=request('codeno');
        $b_id=0;
           foreach ($checks as $id) {
                // dd($book);

                Borrowdetail::where("book_id",$id)->delete();

                $book = Borrow::where('code_no','=',$code)->first();
                $code_no = $book->code_no;
                // dd($code_no);
                $code_book = Borrowdetail::where('code_no','=',$code_no)->get();
                $b_id=count($code_book);
                
                
                // // dd($code_book[1]->book_id);
                
                
                // dd($b_id);
                   

               
            }

             if($b_id==0){
                // dd('hello');
                $book->status=true;
                $book->save();
            } 
                 
        

        return redirect()->route('borrow.index');
    }

}
