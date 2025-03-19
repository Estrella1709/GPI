<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    protected $table = 'estados';
    protected $fillable = ['tipo'];

    public function proyectos()
    {
        return $this->hasMany(Proyecto::class, 'id_estado');
    }
}
