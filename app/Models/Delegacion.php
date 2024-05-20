<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delegacion extends Model
{
    use HasFactory;

    protected $table = 'delegaciones';
    protected $fillable = [
        'id_tipo_delegacion',
        'id_delegacion_o_ct',
        'id_nomenclatura',
        'num_delegaciona',
        'nivel_delegaciona',
        'sede_delegaciona',
        'fecha_inicio_delegaciona',
        'fecha_final_delegaciona',
        'direccion_delegaciona',
        'cp_delegaciona',
        'ciudad_delegaciona',
        'estado_delegaciona',
    ];


    /**
     * Get the region that owns the Delegacion
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function region()
    {
        return $this->belongsTo(Region::class, 'id_region', 'id');
    }

    /**
     * Get the nomenclatura that owns the Delegacion
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nomenclatura()
    {
        return $this->belongsTo(Nomenclatura::class, 'id_nomenclatura', 'id');
    }

    /**
     * Get the delegacion_ct that owns the Delegacion
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function delegacion_ct()
    {
        return $this->belongsTo(DelegacionCt::class, 'id_delegacion_o_ct', 'id');
    }

    /**
     * Get the tipo_delegacion that owns the Delegacion
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipo_delegacion()
    {
        return $this->belongsTo(TipoDelegacion::class, 'id_tipo_delegacion', 'id');
    }

    /**
     * Get all of the maestros for the Delegacion
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function maestros()
    {
        return $this->hasMany(Maestro::class, 'id_delegacion');
    }

}