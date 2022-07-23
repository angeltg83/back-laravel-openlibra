<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table = 'persona';
    const UPDATED_AT = 'fecha_modificacion';
    const CREATED_AT = 'fecha_creacion';

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    public function mascotas()
    {
        return $this->hasMany(Mascota::class,'id_dueno');
    }
}
