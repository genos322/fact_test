<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TVenta extends Model
{
    protected $table = 'tventa';
    protected $primaryKey = 'idVenta';
    public $incrementing = false;
    public $timestamps = true;
    // function tProducto()
    // {
    //     return $this->belongsToMany(TProducto::class,'idVenta');
    // }

}
?>