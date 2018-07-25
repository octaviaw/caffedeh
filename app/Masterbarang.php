<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masterbarang extends Model
{
    //
    protected $table = 'masterbarang';
    protected $fillable=['kode_barang','nama','harga_beli','harga_jual','satuan','min_stok','brand','kapasitas','diskon','deleted_at'];
    
}
