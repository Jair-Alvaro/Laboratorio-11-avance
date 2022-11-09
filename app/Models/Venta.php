<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    public function vendedor(){
        return $this->belongsTo(vendedor::class);
    }
    public function cliente(){
        return $this->belongsTo(cliente::class);
    }
    public function auto(){
        return $this->hasOne(auto::class);
    }
    
}
