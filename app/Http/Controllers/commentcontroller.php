<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\Models\thread;
use App\Models\category;
use App\Models\comment;

class commentcontroller extends Controller
{
   

    public function comment(Request $request,$id){
        $user_id=auth()->User()->id;
        
        
        comment::create([
            'comment'=>$request->comment,            
            'thread_id'=>$id,
            'user_id'=>$user_id,

  
         ]);
        // return $request->input();
        return redirect()->route('comments',$id);
    }
}
