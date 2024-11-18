<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    //
    use SoftDeletes;

    protected $table = "categories";
    // protected $dates = ['created_at','updated_at'];
    protected $dates = ['created_at','updated_at','deleted_at'];

    // public function series(){
    //     return $this->hasMany('App\Models')
    // }
}
