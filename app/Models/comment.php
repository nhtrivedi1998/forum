<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;

    public $guarded=[];

    public function thread(){
        return $this->belongsTo(thread::class);

    }

    public function user(){
        return $this->belongsTO(User::class);
    }
}
