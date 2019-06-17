<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Tipo_actividad;
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
        $actividades = Tipo_actividad::all();
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
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'nombre'=>'required',
            'cant_max'=> 'required',
            'duracion' => 'required',
            
    

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
            if($request->get('participacion_organizacion') == null){
                $request['participacion_organizacion'] = 'off';
                
            }
            
        $Tipo_actividad = new Tipo_actividad([
            'nombre' => $request->get('nombre'),
            'cant_max'=> $request->get('cant_max'),
            'duracion'=> $request->get('duracion'),
            
            'participacion_organizacion'=> $request->get('participacion_organizacion'),
            
        ]);
        $Tipo_actividad->save();
        return back()->with('success','Tipo_actividad registrada con exito.');
       
         
      
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
        $actividades = Tipo_actividad::find($id);
        $actividades->delete();
        return back()->with('success','Eliminacion de actividad con exito.');
    }

    

    public function Modificar(Request $request)
    {
        
        $request->validate([
            'nombre'=>'required',
            'cantEst'=>'required',
            'duracion'=>'required',
            
        
        ]);
        if($request->get('participacion_organizacion') == null){
            $request['participacion_organizacion'] = 'off';
            //dd($request->all());
        }
        if($isChecked = $request->has('ELIMINAR')){
            $id = $request->get('id_Actividad');
            return self::destroy($id);
        }
        else{
        $Tipo_actividad = Tipo_actividad::find($request->get('id_Actividad'));
        $Tipo_actividad->nombre =  $request->get('nombre');
        $Tipo_actividad->cant_max = $request->get('cantEst');
        $Tipo_actividad->duracion = $request->get('duracion');
        $Tipo_actividad->participacion_organizacion = $request->get('participacion_organizacion');
        $Tipo_actividad->save();

        return back()->with('success','Modificacion de actividad con exito.');
        }
    }
}
