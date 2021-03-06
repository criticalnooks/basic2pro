<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\user;
use App\thread;
use App\comment;
use Auth;
class postController extends Controller
{ /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$thread = thread::get();
        $comment = comment::get();
    	return view('webboard.post',array('user' => Auth::user()))->with('thread',$thread)->with('comment',$comment);
    
    }
    public function post(Request $request) 
    {
  		$user = Auth::user();

        $store = new thread;
        $store->id = Auth::id();
        $store->thread_type = 1;
        $store->thread_name = $request->input('name');
        $store->thread_content = $request->input('content');
        $store->thread_user = $user->name;
        $store->save();
       return redirect('forums/board1');

    }



   
}