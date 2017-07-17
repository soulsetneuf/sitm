@extends('layouts.master')
@section('AdmTitle', 'Lista de clientes')
@section('personas_active','class="panel panel-default dropdown active"')
@section('personas_collapse','class="panel-collapse"')
@section('rptasistencias_active','class="panel panel-default dropdown"')
@section('rptasistencias_collapse','class="panel-collapse collapse"')
@section('content')
    <ol class="breadcrumb">
        <li class="active"><a href="{{ route($path_controller.'.index') }}">Inicio</a></li>
    </ol>
    <br>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <div class="title">Lista</div>
            </div>
        </div>

        <div class="card-body">
            <div class="block-flat">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            @include("botton.generic",["action"=>"create","class"=>"btn btn-success","text"=>"Registrar nueva persona"])
                        </div>
                    </div>
                    <div class="content">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="no-border">
                                <tr>
                                    <th>#</th>
                                    <th>CI</th>
                                    <th>Nombre completo</th>
                                    <th>Dirección</th>
                                    <th>Sexo</th>
                                    <th>Fecha de nacimiento</th>
                                    <th>Teléfono</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody class="no-border-y">
                                @foreach($obj as $i => $row)
                                    <tr>
                                        <td>{{ (($obj->currentPage() - 1 ) * $obj->perPage() ) + $i + 1 }}</td>
                                        <td>{{ $row->ci }}</td>
                                        <td>{{ $row->nombre_completo }}</td>
                                        <td>{{ $row->direccion }}</td>
                                        <td>{{ $row->sexo }}</td>
                                        <td>{{ $row->fecha_nacimiento }}</td>
                                        <td>{{ $row->telefono }}</td>
                                        <td class="text-center">
                                            @include("botton.action",["id"=>$row->id])
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {!! $obj->render() !!}
                    <div class="posts">
                        Existen {{ $obj->total() }} registros
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection