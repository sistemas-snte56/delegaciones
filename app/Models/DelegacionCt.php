<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DelegacionCt extends Model
{
    use HasFactory;

    protected $table = 'delegacion_o_ct';
    protected $fillable = ['deleg_ct'];
}
