<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\thread;
use App\Models\User;
use App\Models\comment;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { $user=auth()->User();
        return view('dashboard',['threads'=>$user->threads()->paginate(10),
        ]);
    }

    public function comments()
    { $user=auth()->User();
        return view('dashboard_comments',['comments'=>$user->comments()->paginate(10),'threads'=>$user->threads,
        ]);
    }

    public function delete_comments($id)
    {
       $data=comment::find($id);
       $data->delete();
       return redirect()->route('dashboard_comments');
        
    }
}
