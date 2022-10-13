<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $fillable = ['nombre','rutaimg','stock','detalle','tipo','talla'];
    public $timestamps = false;
    use HasFactory;
}
