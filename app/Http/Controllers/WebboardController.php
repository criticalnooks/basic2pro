<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\user;
use App\thread;
use Auth;
class WebboardController extends Controller
{ /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$thread = thread::get();
    	return view('webboard.webboard',array('user' => Auth::user()))->with('thread',$thread);
    
    
    }
    

   
}