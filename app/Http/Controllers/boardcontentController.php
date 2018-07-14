<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\user;
use App\comment;
use App\thread;
use Auth;
class boardcontentController extends Controller
{ /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function commentindex($id) 
    {
       $thread = thread::find($id);
       return view('webboard.comment',array('user' => Auth::user()))->with('thread',$thread);

    }

    public function editthread($id) 
    {
       $thread = thread::find($id);
       return view('webboard.edit',array('user' => Auth::user()))->with('thread',$thread);

    }
    public function editcomment(Request $request, $id) 
    {
       $thread = thread::find($request->input('thread_id'));

       $comment = comment::find($id);
       return view('webboard.edit2',array('user' => Auth::user()))->with('comment',$comment)->with('thread',$thread);

    }


    public function show($id) 
	{
        $thread = thread::find($id);
        $comment = comment::get();

       return view('webboard.boardcontent',array('user' => Auth::user()))->with('comment',$comment)->with('thread',$thread);

	}

    public function post(Request $request) 
    {
        $user = Auth::user();
      
        $store = new comment;
        $store->id = Auth::id();
        $store->thread_id = $request->input('thread_id');
        $store->comment_content = $request->input('content');
        $store->comment_user = $user->name;
        $store->save();
       //return redirect()->back();
         return redirect()->action(
            'boardcontentController@show', ['id' => $request->input('thread_id')]
        );

    }
    public function updatethread(Request $request, $id)
    {
            $update = thread::find($id);
            $update->thread_content = $request->input('content');
            $update->save(); 
        return redirect()->action(
            'boardcontentController@show', ['id' => $id ]
        );

    }


    public function updatecomment(Request $request, $id)
    {

            $update = comment::find($id); 
            $update->comment_content = $request->input('content');
            $update->save();
        return redirect()->action(
            'boardcontentController@show', ['id' => $request->input('thread_id') ]
        );
    }



    public function destroy(Request $request, $id)
    {   
        if( $request->input('type') == 'thread') {
            $temp = thread::find($id); 
            $destroy = thread::where('thread_id',$id)->delete(); 
            if( $temp->thread_type == 1){
                return redirect('/forums/board1');
            }
            else if( $temp->thread_type == 2){
                return redirect('/forums/board2'); 
            }
            
        }
        else if($request->input('type') == 'comment'){
            $destroy = comment::where('comment_id',$id)->delete(); 
           return redirect()->back();
        }
        
        
    }

 

   
}