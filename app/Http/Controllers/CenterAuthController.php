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
		public function show()
		{	
			$centerinfos = CenterInfo::orderby('id','asc')->get();
			return view('centerinfo.show',compact('centerinfos'));

		}




		public function authenticate(Request $request)
			{
		    		$eiin_no = $request['eiin_no'];
		    		$inst_pass= $request['inst_pass'];
		    		//return "Id -> ".$eiin_no." Inst Pass ".$inst_pass;

		        if (Auth::guard('center_info')->attempt(['eiin_no' => $eiin_no, 'password' => $inst_pass])) 
		        {
		            // Authentication passed...
		           // return Auth::guard('center_info')->user()->inst_name;
		            return redirect()->intended('/centerinfo/show');
		        }
		        else
		        {
		        	return view('centerinfo.login');
		        }
			}
}