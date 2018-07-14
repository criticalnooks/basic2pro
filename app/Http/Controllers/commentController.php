<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\user;
use App\comment;
use App\thread;
use Auth;
class commentController extends Controller
{ /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $update = comment::find($id);
        $update->comment_content = $request->input('content');
        $update->save();

       return redirect()->back();
    }

 
    public function destroy($id)
    {
        $destroy = comment::where('comment_id',$id)->delete();
        return redirect()->back();
    }



   
}