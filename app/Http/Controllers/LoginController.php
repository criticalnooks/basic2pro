<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Auth;
use App\User;
class LoginController extends Controller
{ /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	return view('user.login');
    
    }


    public function getLogin(Request $request)
    {
        $data = [
        'email' => $request->input('email'),
        'password' => $request->input('password')
       ];

        if(Auth::attempt($data)) {
            return redirect()->back();
        } else {
            
            return redirect()->back();
        }
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->back();
    }

   
}