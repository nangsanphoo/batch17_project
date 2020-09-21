<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\User;
use Auth;
use App\Match;
use Illuminate\Support\Facades\DB;
class FrontendController extends Controller
{
    public function registerfun($value='')
	{ 	
		
		return view('frontend.register');

	}
	public function loginfun($value='')
	{ 	
		
		return view('frontend.login');

	}
	public function mainfun($value='')
	{ 	
		
		return view('frontend.main');

	}
	public function partnerfun($value='')
	{ 	
		return view('frontend.partner');
		// $this->validate($request, [
		// 	'Gender' => 'required',
		// 	'Age' => 'require',
		// 	'Hobby'=> 'require',
		// ]);
	}

	public function viewdetailfun($id)
	{ 	
		$members =Member::find($id);
		return view('frontend.viewdetail',compact('members'));
     
	}
	public function contactfun($value='')
	{ 	
		
		return view('frontend.contact');

	}
	public function matchfun($value='')
	{ 	
		
		return view('frontend.match');

	}
	public function profilefun(Request $request)
	{ 	

		//dd($request);
		//dd($gender);
		$gender = request('gender');
		$age= request('age');
		$hobbies=request('hobbies');
		//dd($age);
		$filters = Member::where('gender',$gender)->where('age',$age)->where('hobbies',$hobbies)->get();
		//dd($filters);
		$members=Member::all();
		//dd($members);
		return view('frontend.profile',compact('filters','members'));

	}
	public function paymentfun($value='')
	{ 	
		//dd($request)->all();
		return view('frontend.payment');

	}

	public function matchjoinfun($id){
		//dd($id);
		$user_id=Auth::id();
		$match=new Match;
		$match->user_id=$user_id;
		$match->member_id=$id;
		$match->status=1;
		$match->save();

		$matches=Match::where('user_id',$user_id)->get();
		return view('frontend.match',compact('matches'));
		//dd($user_id);
	}
}

