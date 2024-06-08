<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Define la clase Institucion, que hereda de Model, lo que significa que esta clase representará una tabla en la base de datos.
class Institucion extends Model
{
    use HasFactory;
    protected $table = 'instituciones';
    protected $fillable = ['codigo','nombre','status','created_at','updated_at']; //Campos definidos en la tabla de instituciones
}
