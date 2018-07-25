<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    //
    protected $table='satuan';
    protected $fillable=['nama_satuan','deleted_at'];

    public function masterbarang(){
    return $this->hasMany('App\Masterbarang');
    }
}
