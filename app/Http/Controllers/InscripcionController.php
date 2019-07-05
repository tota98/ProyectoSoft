<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Tipo_actividad;
use App\Estudiante;
use App\Organizacion;
use App\Academico;
use App\Actividad_titulacion;
use App\actividad_profesor;
use Illuminate\Support\Facades\Validator;
use DB;
class InscripcionController extends Controller
{   
    public function registrar(Request $request)
    {
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'titulo'=>'required',
            'id_Actividad'=> 'required',
            'id_academico_1' => 'required',
            'fechaInicio' =>'required',
            'fechaTermino'=>'required',
            'alumno0' => 'required'
            
            
    

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
            }
            
            $SQLfechaInicio = date('Y/m/d', strtotime($request->get('fechaInicio')));
            $SQLfechaTermino = date('Y/m/d', strtotime($request->get('fechaTermino')));
            
            $Actividad_Titulacion = Actividad_titulacion::create([
                'titulo' => $request->get('titulo'),
                'estado'=> "INGRESADA",
                'fecha_registro'=> date('Y/m/d'),
                'semestre_registro' => 1,
                'fecha_inicio' => $SQLfechaInicio,
                'fecha_termino' => "2019/09/01",
                'fecha_examen' => null,
                'nota' => null,
                'id_organizacion' =>null,
                'id_tipo_actividad' => $request->get('id_Actividad'),
                
                
            ]);
            
            //se guarda en base de datos y se guarda la ID para su uso despues.
            $Actividad_Titulacion->save();
            $id_actividad = $Actividad_Titulacion->id;
            $id_organizacion;
            
            for( $i = 1; $i <= 2;$i++){
            if($request->get('id_academico_'.$i) != null){
                $actividadProfesor = actividad_profesor::create([
                    'id_actividad_titulacion' => $id_actividad,
                    'id_academico'=> $request->get('id_academico_'.$i),
                 ]);
                 $actividadProfesor->save();
                }
            }
            


            //dd($id_actividad);
             
            for( $i = 0; $i < 5;$i++){
                $estudiante = Estudiante::find($request->get('alumno'.$i)); 
                if(!empty($estudiante)){
                    $estudiante->actividad_titulacion_id =$id_actividad;
                    $estudiante->save();
                }
                
            }    

                
            if($request->get('nombreOrganizacion')!=null && $request->get('nombreTutor')!=null){
                $Organizacion = Organizacion::create([
                    'nombre_organizacion' => $request->get('nombreOrganizacion'),
                    'nombre_tutor'=> $request->get('nombreTutor'),
                    'correo_tutor'=> "aleatorio@aleatorio.com",
                    
                    
                   
                     
                ]);
                $Organizacion->save();
                //se guarda en base de datos y se guarda la ID para su uso despues.
                $id_organizacion = $Organizacion->id;

                $Actividad_Titulacion->id_organizacion = $id_organizacion;
                $Actividad_Titulacion->save();    


            }


        return back()->with('success','Tipo_actividad registrada con exito.');
       
         
      
         //METODO ALTERNATIVO
            
        }   
}
