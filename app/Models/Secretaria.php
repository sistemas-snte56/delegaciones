<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secretaria extends Model
{
    use HasFactory;
    protected $table = 'secretarias';
    protected $fillable = ['cartera_secretaria','id_nomenclatura'];    
    
    
    /**
     * Get all of the maestros for the Delegacion
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
     public function maestros()
    {
        return $this->hasMany(Maestro::class, 'id_secretaria');
    }    
}
