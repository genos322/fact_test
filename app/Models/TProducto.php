<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TProducto extends Model
{
    protected $table = 'tproducto';
    protected $primaryKey = 'idProducto';
    public $incrementing = false;
    public $timestamps = true;

    // public function tVenta()
    // {
    //     return $this->hasMany(TVenta::class,'idProducto');
    // }

}
?>