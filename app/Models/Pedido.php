<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    public function detallePedidos(){
        return $this->hasMany(DetallePedido::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
