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
<<<<<<< HEAD
        $members=Member::all();

		
=======
>>>>>>> e4f8834ee1087501bdbdbbdf70d51d9e0c4dd2ac
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
	public function profilefun($value='')
	{ 	
		$members=Member::all();
		return view('frontend.profile',compact('members'));

	}
}

