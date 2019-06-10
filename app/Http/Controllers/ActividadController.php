<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Actividad;
use Illuminate\Support\Facades\Validator;
class ActividadController extends Controller
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
        return view('Registrar_Actividad');
    }
    public function Actualizar()
    {
        $actividades = Actividad::all();
        return view('Actualizar_Actividad',compact('actividades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
        $validator = Validator::make($request->all(), [
            'nombre'=>'required',
            'cant_max'=> 'required',
            'duracion' => 'required',
            'participacion_organizacion' => 'required',
    

         ]);

         if ($validator->fails()) {
             
            $errors = $validator->messages();
            if ( ! empty( $errors ) ) {

                $Errores = "";
                foreach ( $errors->all() as $error ) {
                    $Errores .= $error . " \n ";
            
                }
                return back()->with('error',"ERROR:\n ". $Errores );
            }
                
                
            } //llama metodo del baner, con los errores concatenados.
            //Estudiante::create($request->all());
       
        $Actividad = new Actividad([
            'nombre' => $request->get('nombre'),
            'cant_max'=> $request->get('cant_max'),
            'duracion'=> $request->get('duracion'),
            'participacion_organizacion'=> $request->get('participacion_organizacion'),
            
        ]);
        $Actividad->save();
        return back()->with('success','Actividad registrada con exito.');
       
         
      
         //METODO ALTERNATIVO
            
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
        
    }

   /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actividades = Actividad::find($id);
        $actividades->delete();
        return back()->with('success','Eliminacion de actividad con exito.');
    }

    

    public function Modificar(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'nombre'=>'required',
            'cant_max'=>'required',
            'duracion'=>'required',
            'participacion_organizacion'=>'required',
        
        ]);
        if($isChecked = $request->has('ELIMINAR')){
            $id = $request->get('id_Estudiante');
            return self::destroy($id);
        }
        else{
        $estudiante = Estudiante::find($request->get('id_Estudiante'));
        $estudiante->nombre =  $request->get('nombre');
        $estudiante->apellido = $request->get('apellido');
        $estudiante->correo = $request->get('correo');
        $estudiante->carrera = $request->get('carrera');
        $estudiante->telefono = $request->get('telefono');
        $estudiante->save();

        return back()->with('success','Modificacion de estudiante con exito.');
        }
    }
}
