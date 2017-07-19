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
    public function scopeCi($query,$ci)
    {
        if($ci=="")
            $ci="%";
        return $query->where("ci","like","%$ci%");
    }
    public function scopeNombre($query,$nombre)
    {
        if($nombre=="")
            $nombre="%";
        return $query->where("nombre","like","%$nombre%");
    }
    public function scopePaterno($query,$apellido_paterno)
    {
        if($apellido_paterno=="")
            $apellido_paterno="%";
        return $query->where("apellido_paterno","like","%$apellido_paterno%");
    }
    public function scopeMaterno($query,$apellido_materno)
    {
        if($apellido_materno=="")
            $apellido_materno="%";
        return $query->where("apellido_materno","like","%$apellido_materno%");
    }
}