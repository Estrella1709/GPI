<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lider extends Model
{
    use HasFactory;

    protected $table = 'lideres';
    protected $fillable = ['matricula', 'carrera', 'id_usuario'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }


    public function proyectos()
    {
        return $this->hasMany(Proyecto::class, 'id_lider');
    }
}
