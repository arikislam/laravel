<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Articel;
use Carbon\Carbon;
use Request;
use App\Http\Requests\CreateArticelRequest;


class ArticelController extends Controller
{
 		public function index()
 		{
 			$articels= Articel::latest('published_at')->published()->get();
 			return view('articels.index',compact('articels'));
 		}

 		public function show($id)
 		{
 			 $articel= Articel::findOrFail($id);
 	        return view('articels.show' , compact('articel'));
 		
 		}

 		public function create()
 		{
 			return view('articels.create');
 		}
 		
 		
 		public function store(CreateArticelRequest $request)
 		{	
 			
 		
 			 Articel::insert($request->only('title', 'body','published_at'));
 		     return redirect('articels');
 		}
}
