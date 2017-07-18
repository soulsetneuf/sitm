@extends('layouts.master')
@section('AdmTitle', 'Mostrar Persona')
@section('personas_active','class="panel panel-default dropdown active"')
@section('personas_collapse','class="panel-collapse"')
@section('rptasistencias_active','class="panel panel-default dropdown"')
@section('rptasistencias_collapse','class="panel-collapse collapse"')
@section('content')
    <ol class="breadcrumb">
        @include(config("options.breadcrumb_li"),["class"=>"","page"=>"index","id"=>"","title"=>"Inicio"])
        @include(config("options.breadcrumb_li"),["class"=>"active","page"=>"show","id"=>$obj->id,"title"=>$obj->nombre_completo])
    </ol>
    <br>
    <div class="card">
        <div class="card-body no-padding">
            <div role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    @component(config("options.nav_li"))
                        @slot("class") active @endslot
                        @slot("title") Información basica @endslot
                    @endcomponent
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection