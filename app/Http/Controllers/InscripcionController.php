<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Tipo_actividad;
use Illuminate\Support\Facades\Validator;
use DB;
class InscripcionController extends Controller
{
    public function registrar(Request $request)
    {
        dd($request->all());
        $validator = Validator::make($request->all(), [
            'titulo'=>'required',
            'id_Actividad'=> 'required',
            'id_academico_1' => 'required',
            'fechaInicio' =>'required',
            'fechaTermino'=>'required'
            
            
    

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
            
            
       
        return back()->with('success','Tipo_actividad registrada con exito.');
       
         
      
         //METODO ALTERNATIVO
            
    }  //
}
