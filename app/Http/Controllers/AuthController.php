<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthController extends Controller
{
		public function __construct()
	    {
	        $this->middleware('guest',['except' => ['logout']]);
	    }

    	public function index()
    	{

    		return view('auth.login');

    	}

	    public function authenticate(Request $request)
		 {
		    		$email =$request['email'];
		    		$password=$request['password'];

		        if (Auth::attempt(['email' => $email, 'password' => $password])) 
		        {
		            // Authentication passed...
		            return redirect()->intended('articels');
		        }
		        else
		        {
		        	return view('auth.login');
		        }
		 }

		 public function logout()
		 {
		 	Auth::logout();
		 	return view('auth.login');
		 }

		 public function register()
		 {
		 	return view('auth.register');
		 }


		 public function registerUser(Request $request)
        {
		        $this->validate($request,[
		            'name' => 'required|max:255',
		            'email' => 'required|email|max:255|unique:users',
		            'password' => 'required']
		            );

			      

			         User::create($request->all());

			        return view('auth.login');
	    }

}
