<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $table = 'regiones';
    protected $fillable = [
        'region','sede'
    ];

    
    /**
     * Get all of the delegaciones for the Region
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function delegaciones()  
    {
        return $this->hasMany(Delegacion::class, 'id_region', 'id');
    }
}
