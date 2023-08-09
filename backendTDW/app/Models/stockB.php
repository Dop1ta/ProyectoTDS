<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stockB extends Model
{
    use HasFactory;

    protected $table = 'stock_b';
    protected $fillable = ['bebida_id', 'bodega_id', 'cantidad'];

    public function bebida()
    {
        return $this->belongsTo(Bebida::class, 'bebida_id');
    }

    public function bodega()
    {
        return $this->belongsTo(Bodega::class, 'bodega_id');
    }
}