<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Estudiante;
class EstudianteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Registrar()
    {
        return view('Registrar_Estudiante');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request->all());



       $request->validate([
           'nombre'=>'required',
           'apellido'=> 'required',
           'rut' => 'required',
           'correo' => 'required',
           'carrera' => 'required',
           'telefono' => 'required|integer',
//
         ]);
//
         Estudiante::create($request->all());
      
         //METODO ALTERNATIVO
         
    //   $Estudiante = new Estudiante([
    //     'nombre' => $request->get('nombre'),
    //     'apellido'=> $request->get('apellido'),
    //     'rut'=> $request->get('rut'),
    //     'correo'=> $request->get('correo'),
    //     'carrera'=> $request->get('carrera'),
    //     'telefono'=> $request->get('telefono'),
    //   ]);
    //   $Estudiante->save();


         return view('Registrar_Estudiante')
             ->with('ESTUDIANTE REGISTRADO');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
