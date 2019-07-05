<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Tipo_actividad;
use App\Actividad_titulacion;
use Illuminate\Support\Facades\Validator;
use DB;
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

    public function Inscripcion(){

        $actividad_list = DB::table('tipo_actividads')->get();
        $estudiante_list = DB::table('estudiantes')->get();
        $academico_list = DB::table('academicos')->get();
        return view('Inscripcion')->with('actividad_list',$actividad_list)->with('estudiante_list',$estudiante_list)->with('academico_list',$academico_list);
    }

    public function RegistroInscripcion(){

        $actividad_list = DB::table('tipo_actividads')->get();
        $actividad_titulacions = DB::table('actividad_titulacions')->get();
        return view('Registrar_Inscripcion')->with('actividad_list',$actividad_list)->with('actividad_titulacions',$actividad_titulacions);   
    }
    public function RegistroExamen(){

        $actividad_list = DB::table('tipo_actividads')->get();
        $actividad_titulacions = DB::table('actividad_titulacion')->get();
        return view('Registrar_Examen')->with('actividad_list',$actividad_list)->with('actividad_titulacions',$actividad_titulacions);
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
    public function ActualizarIncripciones($request)
    {

        $id = $request->get("id_actividad");
        $inscripcion = actividade_titulacion::find($id);
        $inscripcion->numero_inscripcion = $request->get("numero");
        $inscripcion->save();
        
    }
    public function ActualizarFinalizar()
    {
        $id = $request->get("id_actividad");
        $inscripcion = actividade_titulacion::find($id);
        $inscripcion->numero_inscripcion = $request->get("Estado");
        $inscripcion->save();
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
        $request->validate([
            'titulo'=>'required',
            'estado'=>'required',
            'fecha_registro'=>'required',
            'semestre_registro'=>'required',
            'fecha_inicio'=>'required',
            'fecha_termino'=>'required',
            'fecha_examen'=>'required',
            'nota'=>'required',
            'id_organizacion'=>'required',
            'id_tipo_actividad'=>'required'
            
        
        ]);
        if($isChecked = $request->has('ELIMINAR')){
            $id = $request->get('id_Actividad');
            return self::destroy($id);
        }
        else{
        $actividade_titulacion->estado = actividade_titulacion::find($request->get('estado'));
        $actividade_titulacion->titulo =  $request->get('titulo');
        $actividade_titulacion->cant_max = $request->get('cantEst');
        $actividade_titulacion->duracion = $request->get('duracion');
        $actividade_titulacion->fecha_registro = $request->get('fecha_registro');
        $actividade_titulacion->semestre_registro = $request->get('semestre_registro');
        $actividade_titulacion->fecha_inicio = $request->get('fecha_inicio');
        $actividade_titulacion->fecha_termino = $request->get('fecha_termino');
        $actividade_titulacion->fecha_examen = $request->get('fecha_examen');
        $actividade_titulacion->nota = $request->get('nota');
        $actividade_titulacion->id_organizacion = $request->get('id_organizacion');
        $actividade_titulacion->id_tipo_actividad = $request->get('id_tipo_actividad');
        $actividade_titulacion->save();
        \Session::flash('success','Modificacion de actividad con exito.');
    
        }
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
        \Session::flash('success','Eliminacion de actividad con exito.');
    
    }

    

    public function Modificar(Request $request)
    {
        
        $request->validate([
            'nombre'=>'required',
            'cantEst'=>'required',
            'duracion'=>'required',
            
        
        ]);
        
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

        \Session::flash('success','Modificacion de actividad con exito.');
    
        }
    }
}
