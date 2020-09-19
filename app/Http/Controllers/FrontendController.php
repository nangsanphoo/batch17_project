<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

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
		$age=request('age');
		//dd($age);
		$filters = Member::where('gender','!=',$gender)->where('age' ,$age)->get();
		//dd($filters);
		$members=Member::all();
		return view('frontend.profile',compact('filters','members'));

	}
	public function paymentfun(Request $request)
	{ 	
		//dd($request)->all();
		return view('frontend.payment');

	}
}

