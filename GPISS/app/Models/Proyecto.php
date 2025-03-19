<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lider;
use App\Models\Usuario;

class Proyecto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'ogeneral',
        'integrantes',
        'fecha_entregado',
        'fecha_limite',
        'id_lider',
        'id_asesor',
        'id_estado',
    ];

    public function lider()
    {
        return $this->belongsTo(Lider::class, 'id_lider');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }


}
