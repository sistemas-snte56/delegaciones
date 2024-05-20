<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nomenclatura extends Model
{
    use HasFactory;

    protected $table = 'nomenclatura';
    protected $fillable = [
        'id','nomenclatura','id_tipo_delegacion'
    ];    

    /**
     * Get all of the delegaciones for the Nomenclatura
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function delegaciones()
    {
        return $this->hasMany(Delegacion::class, 'id_nomenclatura', 'id');
    }

}
