<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonaCreateRequest;
use App\Http\Requests\PersonaUpdateRequest;
use App\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    var $path_view="Persona";
    var $path_controller="persona";
    public function index(Request $request)
    {
        return \View::make($this->path_view.'.index', ["obj"=>Persona::paginate(10), "path_controller"=>$this->path_controller, "path_view"=>$this->path_view]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \View::make($this->path_view.'.register', ["path_controller"=>$this->path_controller,"path_view"=>$this->path_view]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonaCreateRequest $request)
    {
        Persona::create($request->all());
        return redirect()->route($this->path_controller.".index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->notFound(Persona::find($id));
        return \View::make($this->path_view.'.show',["obj"=>Persona::find($id),"path_controller"=>$this->path_controller,"path_view"=>$this->path_view]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->notFound(Persona::find($id));
        return \View::make($this->path_view.'.edit',["value"=>Persona::find($id),"path_controller"=>$this->path_controller,"path_view"=>$this->path_view]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PersonaUpdateRequest $request, $id)
    {
        Persona::find($id)->fill($request->all())->save();
        return redirect()->route($this->path_controller.".index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->notFound(Persona::find($id));
        $_institucion  = Persona::find($id);
        $_institucion->_estado         = 'X';
        $_institucion->_id_usuario     = \Auth::user()->id;
        $_institucion->save();
        return $this->show($id);
    }
}