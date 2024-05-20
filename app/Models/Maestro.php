<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maestro extends Model
{
    use HasFactory;
    protected $table = 'maestros';
    protected $fillable = [
        'id_delegacion',
        'id_secretaria',
        'id_users',
        'titulo',
        'nombre',
        'apaterno',
        'amaterno',
        'id_genero',
        'email',
        'telefono',
        'direccion',
        'cp',
        'ciudad',
        'estado',
    ];

    /**
     * Get the delegacion that owns the Maestro
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function delegacion()
    {
        return $this->belongsTo(Delegacion::class, 'id_delegacion', 'id');
    }

    /**
     * Get the secretaria that owns the Maestro
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function secretaria()
    {
        return $this->belongsTo(Secretaria::class, 'id_secretaria', 'id');
    }

    /**
     * Get the genero that owns the Maestro
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function genero()
    {
        return $this->belongsTo(Genero::class, 'id_genero', 'id');
    }
}
