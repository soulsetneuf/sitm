@extends('layouts.master')
@section('AdmTitle', 'Lista de personas')
@section('personas_active','class="panel panel-default dropdown active"')
@section('personas_collapse','class="panel-collapse"')
@section('rptasistencias_active','class="panel panel-default dropdown"')
@section('rptasistencias_collapse','class="panel-collapse collapse"')
@section('content')
    <ol class="breadcrumb">
        @include(config("options.breadcrumb_li"),["class"=>"active","page"=>"index","id"=>"","title"=>"Inicio"])
    </ol>
    <br>
    <div class="card">
        @component(config("options.card_header")) @slot("title") Lista @endslot @endcomponent

        {!! Form::open(['route' => $path_controller.'.index', 'method' => 'GET']) !!}
        <table class="table">
            <tr>
                <td>CI</td>
                <td>
                    @if(is_null($ci))
                        {!! Form::text("ci",null,["id"=>"ci","class"=>"form-control","autofocus"=>true])!!}
                    @else
                        {!! Form::text("ci",$ci,["id"=>"ci","class"=>"form-control"])!!}
                    @endif
                </td>
                <td>Nombre Completo</td>
                <td>
                    @if(is_null($nombre))
                        {!! Form::text("nombre",null,["id"=>"nombre","class"=>"form-control","autofocus"=>true])!!}
                    @else
                        {!! Form::text("nombre",$nombre,["id"=>"nombre","class"=>"form-control"])!!}
                    @endif
                </td>
            </tr>
            <tr>
                <td>Apellido Paterno</td>
                <td>
                    @if(is_null($apellido_paterno))
                        {!! Form::text("apellido_paterno",null,["id"=>"apellido_paterno","class"=>"form-control","autofocus"=>true])!!}
                    @else
                        {!! Form::text("apellido_paterno",$apellido_paterno,["id"=>"apellido_paterno","class"=>"form-control"])!!}
                    @endif
                </td>
                <td>Apellido Materno</td>
                <td>
                    @if(is_null($apellido_materno))
                        {!! Form::text("apellido_materno",null,["id"=>"apellido_materno","class"=>"form-control","autofocus"=>true])!!}
                    @else
                        {!! Form::text("apellido_materno",$apellido_materno,["id"=>"apellido_materno","class"=>"form-control"])!!}
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </td>
            </tr>
        </table>
        {!! Form::close() !!}

        <div class="card-body">
            <div class="block-flat">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            @include(config("options.button_generic"),["action"=>"create","class"=>"btn btn-success","text"=>"Registrar nueva persona"])
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
                                            @include(config("options.button_group_actions"),["id"=>$row->id])
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