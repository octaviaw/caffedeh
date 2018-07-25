<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detailuser extends Model
{
	protected $table='detailuser';
	protected $fillable=['nik','noktp','tempat_lahir','tgl_lahir','gender','status_karyawan'];
	 public function user(){
    return $this->belongsTo('App\User');
    }

}
