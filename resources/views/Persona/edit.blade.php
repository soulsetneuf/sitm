@extends('layouts.master')
@section('AdmTitle', 'Editar persona')
@section('personas_active','class="panel panel-default dropdown active"')
@section('personas_collapse','class="panel-collapse"')
@section('rptasistencias_active','class="panel panel-default dropdown"')
@section('rptasistencias_collapse','class="panel-collapse collapse"')
@section('content')
    <ol class="breadcrumb">
        @include(config("options.breadcrumb_li"),["class"=>"","page"=>"index","id"=>"","title"=>"Inicio"])
        @include(config("options.breadcrumb_li"),["class"=>"active","page"=>"edit","id"=>$value->id,"title"=>"Editar datos personales"])
    </ol>
    <br>
    <div class="card">
        @component(config("options.card_header")) @slot("title") Editar datos personales @endslot @endcomponent
        <div class="card-body">
            {!! Form::model($value,['route' => [$path_controller.'.update',$value->id], 'method' => 'put',"files"=>"true"]) !!}
            @include($path_view.".form")
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    @component(config("options.button_form"))
                        @slot("class") btn btn-primary @endslot
                        @slot("title") Editar @endslot
                    @endcomponent
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="col-lg-12"></div>
@endsection