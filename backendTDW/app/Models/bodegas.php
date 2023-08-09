<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bodegas extends Model
{
    use HasFactory;
    protected $table = 'bodegas';
    protected $primaryKey = 'id';
    public $autoincrement = true;
}
