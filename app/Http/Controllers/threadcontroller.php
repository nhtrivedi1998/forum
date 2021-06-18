<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\Models\thread;
use App\Models\category;
class threadcontroller extends Controller
{

    
    public function create(Request $request, $id){
        // $thread=new thread;
        // $thread->title=
        // $thread->description=
        // $thread->category_id=$id;
        // $thread->save();
        // return redirect()->route('threads');
        // $validattributes=request()->validate([
        //     'title'=>'required',
        //     'description'=>'required',
        //     'category_id'=>'required'
        // ]);
        // 
       $user_id=auth()->User()->id ;
      thread::create([
          'title'=>$request->title,
          'description'=>$request->desc,
          'category_id'=>$id,
          'user_id'=>$user_id,


       ]);
      return redirect()->route('threads',$id);
        
        
    } 

    // public function store(Request $request){
    //      validate
    // this->validate($request,[
  
    // ]);
        // store

        // redirect
       


       
} 

