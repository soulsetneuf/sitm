<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table="persona";
    protected $fillable=[
        "ci",
        "nombre",
        "apellido_paterno",
        "apellido_materno",
        "direccion",
        "sexo",
        'fecha_nacimiento',
        "telefono"
    ];
    public function getNombreCompletoAttribute(){
        return $this->nombre." ".$this->apellido_paterno." ".$this->apellido_materno;
    }
}