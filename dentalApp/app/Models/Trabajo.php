<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Trabajo
 *
 * @property $id
 * @property $nombreOdontologo
 * @property $nombrePaciente
 * @property $fechaLlegada
 * @property $fechaSalida
 *
 * @property ProtesisFija[] $protesisFijas
 * @property RemovibleAcrilica[] $removibleAcrilicas
 * @property RemovibleMetal[] $removibleMetals
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Trabajo extends Model
{

    static $rules = [
		'nombreOdontologo' => 'required',
		'nombrePaciente' => 'required',
		'fechaLlegada' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreOdontologo','nombrePaciente','fechaLlegada','fechaSalida'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function protesisFijas()
    {
        return $this->hasMany('App\Models\ProtesisFija', 'id_trabajo', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function removibleAcrilicas()
    {
        return $this->hasMany('App\Models\RemovibleAcrilica', 'id_trabajo', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function removibleMetals()
    {
        return $this->hasMany('App\Models\RemovibleMetal', 'id_trabajo', 'id');
    }


}
