<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller {
 
    public $restful = true;
 
    public function __construct() {
        parent::__construct();
    }
 
    public function get_login()
    {
        return View::make('user.login')->with('error', Session::get('error'));
    }
 
    public function post_login()
    {
        $userinfo = array(
            'username'    => strtolower(Input::get('email')),
            'password'     => Input::get('password'),
            'remember'    => Input::get('remember')
        );
 
        if ( Auth::attempt($userinfo) )
        {
            return Redirect::home();
        }
        else
        {
            return Redirect::to('user/login')
                 ->with('error', 'อีเมล์หรือรหัสผ่านไม่ถูกต้อง')
                ->with_input();
        }
    }
 
}