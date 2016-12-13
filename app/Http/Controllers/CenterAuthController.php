<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\CenterInfo;

class CenterAuthController extends Controller
{		

    
		public function index()
		{
			
			return view('centerinfo.login');

		}
		public function logout()
		{	
			Auth::logout();
			return view('centerinfo.login');

		}



		public function authenticate(Request $request)
			{
		    		$eiin_no =$request['eiin_no'];
		    		$inst_pass=$request['inst_pass'];
		    		//return "Id -> ".$eiin_no." Inst Pass ".$inst_pass;

		        if (Auth::guard('center_info')->attempt(['eiin_no' => $eiin_no, 'password' => $inst_pass])) 
		        {
		            // Authentication passed...
		            return redirect()->intended('articels');
		        }
		        else
		        {
		        	return view('centerinfo.login');
		        }
			}
}