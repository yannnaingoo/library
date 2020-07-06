<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
          $members = Member::all();
         return view('members.index',
         compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('members.create');
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
            "name" =>'required',
            "email" => 'required|unique:users',
            "address" => 'required',
            "phone" => 'required',
            
           
        ]);
            $user = new User;
            $user->name= request('name');
            $user->email= request('email'); 
            $user->password=Hash::make('123456789');
            $user->save();
            // dd($user->id);
            $user->assignRole('member');

            $mentor = new Member;

            $mentor->user_id = $user->id;
            
            $mentor->phone = request('phone');
            $mentor->address=request('address');
            $mentor->save();
            //return

            return redirect()->route('members.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $members = Member::find($id); //obj
        
        return view('members.edit',compact('members'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id )
    {
         $request->validate([
           
          
            "address" => 'required',
            "phone" => 'required',
            
           
        ]);

          
            $mentor =  Member::find($id);
            

            $mentor->user_id = request('user_id');
            
            $mentor->phone = request('phone');
            $mentor->address=request('address');
            $mentor->save();
            //return

            return redirect()->route('members.index');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Member::find($id);
        $member->delete();
        return redirect()->route('members.index');
    }
}
