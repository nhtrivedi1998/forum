<?php

use Illuminate\Support\Facades\Route;
use App\Models\category;
use App\Models\thread;
use App\Http\Controllers\threadcontroller;
use App\Http\Controllers\commentcontroller;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('categories',[
        'categories'=>category::all()
    ]);
   
});

Route::get('/search/results', function () {
    $threads=thread::latest();
    
    if(request('search')){
        $threads->where('title','like','%'.request('search').'%')
        ->orwhere('description','like','%'.request('search').'%')
        ->paginate(10);
    }

    return view('search',[
        'threads'=>$threads->get(),
    ]);

   
});


Route::get('categories/{category}', function (category $category) {

    return view('threads',[
        'threads'=>$category->threads()->paginate(10),
        'category'=>$category
       
    ]);
})->name('threads');

Route::get('categories/thread/{thread}', function (thread $thread) {
    return view('comments',[
        'comments'=>$thread->comments()->paginate(10),
        'thread'=>$thread       
    ]);
})->name('comments');


Route::view('/add_thread','Add_Thread');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard_threads');

Route::get('/dashboard/comments', [App\Http\Controllers\HomeController::class, 'comments'])->name('dashboard_comments');

Route::get('/dashboard/comments/{id}', [App\Http\Controllers\HomeController::class, 'delete_comments'])->name('delete_dashboard_comments');

Route::post('categories/{category}',[App\Http\Controllers\threadcontroller::class,'create']);


Route::post('categories/thread/{thread}',[App\Http\Controllers\commentcontroller::class,'comment']);

