<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    {   
<<<<<<< HEAD
        $gender = $request->input('gender');
        $age = $request->input('age');

        $query = Member::query();
        if(!empty($gender)){
            $query->where('gender',$gender);

        }
        //dd($gender);
=======
        // $gender = $request->input('gender');
        // $age = $request->input('age');

        // $query = Member::query();
        // if(!empty($gender)){
        //     $query->where('gender',$gender);
        //     $query->where('age',$age);
        // }
        // dd($gender);
>>>>>>> ea1e4329bfb94a9fb138e65dae4ca5962fa7d8bf
        $members=Member::all();
        //dd($items);
        // $memberlists=Member::where('status',0)->get();
        return view('backend.members.memberreqlist',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.members.create');
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
            "gender"=>'required',
            "phoneno"=>'required',
            "age"=>'required',
            "hobbies"=>'required',
            
        ]);

        //If include file, upload file
        //Data insert
        $member=new Member;
        $member->user_id=Auth::id();
        $member->gender=$request->gender;
        $member->phoneno=$request->phoneno;
        $member->age=$request->age;
        $member->hobbies=$request->hobbies;
        $member->status=1;
        $member->save();

        //redirect
        $member=Member::where('status',0)->get();
        return view('frontend.partner',compact('member'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        return view('backend.members.detail',compact('member'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        return view('backend.members.edit',compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate
                              </td> \Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //validation
        $request->validate([
            "name"=>'required',
            "email"=> 'required',
            "phoneno"=>'required',
            "photo"=>'sometimes',
            "oldphoto"=>'required',
            "gender"=>'required',
            "age"=>'required',
            "hair_style"=>'required',
            "hobbies"=>'required',
            "address"=>'required',
            "description"=>'required'
        ]);

        //file upload, if data
        if ($request->hasFile('photo')){
            $imageName=time().'.'.$request->photo->extension();

            $request->photo->move(public_path('back/memberimg'),$imageName);

            $path='back/memberimg/'.$imageName;

        }else{
            $path=$request->oldphoto;
        }

        //data update
        
        $member->name=$request->name;
        $member->email=$request->email;
        $member->phoneno=$request->phoneno;
        $member->photo=$path;
        $member->gender=$request->gender;
        $member->age=$request->age;
        $member->hair_style=$request->hair_style;
        $member->hobbies=$request->hobbies;
        $member->address=$request->address;
        $member->description=$request->description;
        $member->save();

        //redirect
        return redirect()->route('members.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        $member->delete();
        return redirect()->route('members.index');
    }
}
