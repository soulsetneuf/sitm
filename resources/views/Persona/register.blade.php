@extends('layouts.master')
@section('AdmTitle', 'Lista de personas')
@section('personas_active','class="panel panel-default dropdown active"')
@section('personas_collapse','class="panel-collapse"')
@section('rptasistencias_active','class="panel panel-default dropdown"')
@section('rptasistencias_collapse','class="panel-collapse collapse"')
@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ route($path_controller.'.index') }}">Inicio</a></li>
        <li class="active"><a href="{{ route($path_controller.'.create') }}">Registrar nueva persona</a></li>
    </ol>
    <br>
    <div class="card">
        @component(config("options.card_header")) @slot("title") Registrar nueva persona @endslot @endcomponent
        <div class="card-body">
            {!! Form::open(['route' => $path_controller.'.store', 'method' => 'post', "files"=>true]) !!}
            @include($path_view.".form")
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    @component(config("options.button_form"))
                        @slot("class") btn btn-primary @endslot
                        @slot("title") Registrar @endslot
                    @endcomponent
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="col-lg-12"></div>
@endsection