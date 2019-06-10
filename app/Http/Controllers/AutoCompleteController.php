<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;
use App\Academico;
use DB;
class AutoCompleteController extends Controller
{
    //

    public function index()
    {
        return view('search');
    }
 
    public function fetch(Request $request)
    {
       
          if($request->get('query'))
          {
            $query = $request->get('query');
            
           
            $data = DB::table('estudiantes')
            ->where('rut', 'LIKE', "%{$query}%")->orWhere('nombre', 'LIKE', "%{$query}%")->get(); 
            $output = '<ul class = "dropdown-menu" style ="display:block; position:relative">';
            foreach($data as $row)
                
            {
         



                $output .='
                <li><a href="#">'.$row->nombre."-".$row->apellido."-".$row->correo."-".$row->carrera."-".$row->telefono."-".$row->id.'</a></li>
                ';

                
            }
            $output .= '</ul>';
            echo $output;
            
          }

            
    } 
     public function store(Request $request)
    {
       
          if($request->get('query'))
          {
            $query = $request->get('query');
            
           
            $data = DB::table('academicos')
            ->where('rut', 'LIKE', "%{$query}%")->orWhere('nombre', 'LIKE', "%{$query}%")->get(); 
            $output = '<ul class = "dropdown-menu" style ="display:block; position:relative">';
            foreach($data as $row)
                
            {
         



                $output .='
                <li><a href="#">'.$row->nombre."-".$row->apellido."-".$row->correo."-".$row->id.'</a></li>
                ';

                
            }
            $output .= '</ul>';
            echo $output;
            
          }

            
    } 
    

}
