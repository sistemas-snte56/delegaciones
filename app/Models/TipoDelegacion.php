<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDelegacion extends Model
{
    use HasFactory;
    protected $table = 'tipo_delegacion';
    protected $fillable = ['id','tipo'];
}
