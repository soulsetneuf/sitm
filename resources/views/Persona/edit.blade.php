@extends('layouts.master')
@section('AdmTitle', 'Editar persona')
@section('personas_active','class="panel panel-default dropdown active"')
@section('personas_collapse','class="panel-collapse"')
@section('rptasistencias_active','class="panel panel-default dropdown"')
@section('rptasistencias_collapse','class="panel-collapse collapse"')
@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ route($path_controller.'.index') }}">Inicio</a></li>
        <li class="active"><a href="{{ route($path_controller.'.edit', $value->id) }}">Editar datos personales</a></li>
    </ol>
    <br>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <div class="title">Editar datos personales</div>
            </div>
        </div>
        <div class="card-body">
            {!! Form::model($value,['route' => [$path_controller.'.update',$value->id], 'method' => 'put',"files"=>"true"]) !!}
            @include($path_view.".form")
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Editar
                    </button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="col-lg-12"></div>
@endsection