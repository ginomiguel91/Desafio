<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equiment extends Model
{
    use HasFactory;

    protected $fillable=[
'codigo',
'equipo',
'uso',
'descripcion',
'foto',

    ];
}
