<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Employ;
use Illuminate\Http\Request;

class EmployController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return Employ::all();
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employ= new Employ();
        $employ->dni=$request->dni;
        $employ->nombre=$request->nombre;
        $employ->apellido=$request->apellido;
        $employ->direccion=$request->direccion;
        $employ->telefono=$request->telefono;
        $employ->save();

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $employ= Employ::findOrFail($request->id);
        $employ->dni=$request->dni;
        $employ->nombre=$request->nombre;
        $employ->apellido=$request->apellido;
        $employ->direccion=$request->direccion;
        $employ->telefono=$request->telefono;
        $employ->save();

        return $employ;
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $employ=Employ::destroy($request->id);

        return $employ;
        //
    }
}
