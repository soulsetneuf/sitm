@extends('layouts.master')
@section('AdmTitle', 'Mostrar Persona')
@section('personas_active','class="panel panel-default dropdown active"')
@section('personas_collapse','class="panel-collapse"')
@section('rptasistencias_active','class="panel panel-default dropdown"')
@section('rptasistencias_collapse','class="panel-collapse collapse"')
@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ route($path_controller.'.index') }}">Inicio</a></li>
        <li class="active"><a href=""> {{ $obj->nombre_completo }}</a></li>
    </ol>
    <br>

    <div class="card">
        <div class="card-body no-padding">
            <div role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true">Informacion Basica</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <div class="row">
                            <div class="col-xs-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="content">
                                            <table class="table table-hover">
                                                <tbody>
                                                <tr><th>CI.:</th><td> {{ $obj->ci }}</td></tr>
                                                <tr><th>Nombre completo.:</th><td> {{ $obj->nombre_completo }}</td></tr>
                                                <tr><th>Dirección.:</th><td> {{ $obj->direccion }}</td></tr>
                                                <tr><th>Sexo.:</th><td> {{ $obj->sexo }}</td></tr>
                                                <tr><th>Fecha nacimiento.:</th><td> {{ $obj->fecha_nacimiento }}</td></tr>
                                                <tr><th>Teléfono.:</th><td> {{ $obj->telefono }}</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4" align="center">
                                <a href="#">
                                    <img src="{{URL::asset('/img/perfil.png')}}" width="150" height="150">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection