<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

	public function viewdetailfun($value='')
	{ 	
		
		return view('frontend.viewdetail');

	}
	public function contactfun($value='')
	{ 	
		
		return view('frontend.contact');

	}
}

