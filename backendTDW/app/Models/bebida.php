<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bebida extends Model
{
    use HasFactory;
    protected $table = 'bebidas';
    protected $primaryKey = 'id';
    public $autoincrement = true;
}
