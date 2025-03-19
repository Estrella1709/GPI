<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $fillable = ['nombre', 'apellido_paterno', 'apellido_materno', 'correo', 'contraseña', 'rol'];

    public function lider()
    {
        return $this->hasOne(Lider::class, 'id_usuario');
    }

}
