<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;
    protected $table = 'mascota';
    const UPDATED_AT = 'fecha_modificacion';
    const CREATED_AT = 'fecha_creacion';

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    protected $hidden = ['fecha_creacion', 'fecha_modificacion'];

    public function dueno()
    {
        return $this->belongsTo(Persona::class);
    }
}
