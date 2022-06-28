<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    static $rules = [
		'nombre' => 'required',
		'apellidos' => 'required',
		'documento' => 'required',
        'tipo_de_trabajo' => 'required',
        'fecha' => 'required',
        'hora' => 'required',
    ];

    protected $perPage = 20;
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellidos','documento','tipo_de_trabajo','fecha','hora'];
}
