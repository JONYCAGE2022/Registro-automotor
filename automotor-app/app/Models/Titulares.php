<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titulares extends Model
{
    use HasFactory;
    protected $fillable = ['apellido', 'nombre', 'dni','domicilio'];
}
