<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    //
    protected $table='satuan';
    protected $fillable=['kode_barang','deleted_at'];

    public function masterbarang(){
    	return $this->hasMany('App\Masterbarang');
    }
}
