<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;
use App\Academico;
use App\Actividad;
use DB;
class AutoCompleteController extends Controller
{
    //

    public function index()
    {
        return view('search');
    }
 
    public function ActualizarEstudiante(Request $request)
    {
       
          if($request->get('query'))
          {
            $query = $request->get('query');
            
           
            $data = DB::table('estudiantes')
            ->where('rut', 'LIKE', "%{$query}%")->orWhere('nombre', 'LIKE', "%{$query}%")->get(); 
            $output = '<ul class = "dropdown-menu pre-scrollable"  style ="display:block;  max-height: 120px;">';
            foreach($data as $row)
                
            {
         



                $output .='
                <li><a href="#">'.$row->nombre." | ".$row->apellido." | ".$row->correo." | ".$row->carrera." | ".$row->telefono." | ".$row->id.'</a></li>
                ';

                
            }
            $output .= '</ul>';
            echo $output;
            
          }

            
    } 
     public function ActualizarAcademico(Request $request)
    {
       
          if($request->get('query'))
          {
            $query = $request->get('query');
            
           
            $data = DB::table('academicos')
            ->where('rut', 'LIKE', "%{$query}%")->orWhere('nombre', 'LIKE', "%{$query}%")->get(); 
            $output = '<ul class = "dropdown-menu pre-scrollable"  style ="display:block;  max-height: 120px;">';
            foreach($data as $row)
                
            {
         



                $output .='
                <li><a href="#"> '.$row->nombre." | ".$row->apellido." | ".$row->correo." | ".$row->id.'</a></li>
                ';

                
            }
            $output .= '</ul>';
            
            echo $output;
            
          }

            
    } 

    public function ActualizarActividad(Request $request)
    {
       
          if($request->get('query'))
          {
            $query = $request->get('query');
            
           
            $data = DB::table('tipo_actividads')
            ->where('id', 'LIKE', "%{$query}%")->orWhere('nombre', 'LIKE', "%{$query}%")->get(); 
            $output = '<ul class = "dropdown-menu pre-scrollable"  style ="display:block;  max-height: 120px;">';
            foreach($data as $row)
                
            {
         



                $output .='
                <li><a href="#">'.$row->nombre." | ".$row->cant_max." | ".$row->duracion." | ".$row->participacion_organizacion." | ".$row->id.'</a></li>
                ';

                
            }
            $output .= '</ul>';
            
            echo $output;
            
          }

            
    } 
    

}
