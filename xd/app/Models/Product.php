<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
#nom de la tabla en bd 
    protected $table= "product";
    #especificar la llave primaria de la tabla 
    protected $primaryKey = "id";
#para los campos create_at y updated_at
    public $timestamps = true;
#columnas en las tablas
    protected $fillable = ['name','descripcion','price','stock'];

    protected $hidden = ['created_at','updated_at'];

}
