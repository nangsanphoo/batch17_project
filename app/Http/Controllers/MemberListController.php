<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\User;

class MemberListController extends Controller
{
	public function userrequestfun($value='')
	{
        $members=Member::where('status',1)->get();
		return view('backend.userrequestlist',compact('members'));
	}
    public function memberlistfun($value='')
    {
    	return view('backend.memberlist');
    }
    public function memberreqfun($value='')
    {
    	$members=Member::where('status',1)->get();
        return view('backend.members.memberreqlist',compact('members'));
    }
    public function accept(Request $request,$id)
    {
        $member=Member::find($id);
        $member->status=0;
        $userid=$member->user_id;
        $user=User::find($userid);
        $member->save();
        $user->assignRole('Member');
        $role=$user->getRoleNames();

        return redirect()->route('memberreqlistpage');
        
    }
}
