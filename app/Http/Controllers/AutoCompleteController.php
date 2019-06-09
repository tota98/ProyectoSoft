<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;
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
            ->where('nombre', 'LIKE', "%{$query}%")->get(); 
            $output = '<ul class = "dropdown-menu" style ="display:block; position:relative">';
            foreach($data as $row)
            {
                $output .='
                <li><a href="#">'.$row->nombre."-".$row->apellido."-".$row->correo."-".$row->carrera."-".$row->telefono.'</a></li>
                
                ';
            }
            $output .= '</ul>';
            echo $output;
            
          }

            
    } 
}
