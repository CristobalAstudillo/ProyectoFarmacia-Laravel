<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parametros extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'codigo', 'descripcion'];
}
