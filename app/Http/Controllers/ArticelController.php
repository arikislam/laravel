<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Articel;
use Carbon\Carbon;
use Auth;


use App\Http\Requests\CreateArticelRequest;


class ArticelController extends Controller
{	
		public function __construct()
		{
		   // $this->middleware('auth',['except' => ['index','show']]);
		}
	
 		public function index()
 		{
 			//return Auth::user();
 			$articels= Articel::latest('published_at')->published()->get();
 			   return view('articels.index',compact('articels'));
 		}

 		public function show($id)
 		{
 			 $articel= Articel::findOrFail($id);
 	        return view('articels.show',compact('articel'));
 		
 		}

 		public function create()
 		{
 			return view('articels.create');
 		}
 		
 		
 		public function store(CreateArticelRequest $request)
 		{		
 				// $input=$request->only('title' , 'body', 'published_at' );

 				// $input['user_id']=Auth::user()->id;
 			 //    Articel::insert($input);
 			 
 			/// $article = new Article($request->only('title', 'body','published_at'));
 			$articel = new Articel($request->all());
 			 Auth::user()->articels()->save($articel);
 			    return redirect('articels');
 		}

 		public function edit($id)
 		{
 			$articel= Articel::findOrFail($id);
 
 			return view('articels.edit', compact('articel'));

 		}
 		public function update($id,CreateArticelRequest $request)
 		{		

 				$articel= Articel::findOrFail($id);
 			    $articel->update($request->only('title', 'body','published_at'));
 			  	return redirect('articels');
 		}
}
