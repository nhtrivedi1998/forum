<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thread extends Model
{
    use HasFactory;
    public $guarded=[];

    public function category(){
        return $this->belongsTo(category::class);
    }

    public function comments(){
        return $this->hasMany(comment::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query){
        if (request('search')){
            $query
            ->where('title','like','%'.request('search').'%')
            ->orwhere('description','like','%'.request('search').'%');
        }
    }
}
