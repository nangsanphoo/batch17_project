<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members=Member::all();
        //dd($items);
        return view('backend.members.index',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.members.create');
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
            "codeno"=>'required | min:4',
            "name"=>'required',
            "email"=> 'required',
            "phoneno"=>'required',
            "photo"=>'required | mimes:jpg,png,jpeg',
            "gender"=>'required',
            "address"=>'required',
            "description"=>'required'
            
        ]);

        //If include file, upload file
        $imageName=time().'.'.$request->photo->extension();

        $request->photo->move(public_path('back/memberimg'),$imageName);

        $path='back/memberimg/'.$imageName;
        //Data insert
        $member=new Member;
        $member->codeno=$request->codeno;
        $member->name=$request->name;
        $member->email=$request->email;
        $member->phoneno=$request->phoneno;
        $member->photo=$path;
        $member->gender=$request->gender;
        $member->address=$request->address;
        $member->description=$request->description;
        $member->save();

        //redirect
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
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}
