<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akses extends Model
{
    protected $fillable=['nama_akses','deleted_at'];

    public function User(){
    	return $this->hasMany('App\User');

    }
}
