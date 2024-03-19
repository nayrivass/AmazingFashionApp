<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    use HasFactory;
    public function producto(){
        return $this->belongsTo(Producto::class);
    }
    public function delibery(){
        return $this->belongsTo(Delibery::class);
    }
}
