<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
    protected $table='brand';
    protected $fillable=['nama_brand','deleted_at'];

    public function masterbarang(){
    	return $this->hasMany('App\MasterBarang');

    } 
}
