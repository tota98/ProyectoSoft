<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Academico;
use Illuminate\Support\Facades\Validator;
use Session;
use View;
class AcademicoController extends Controller
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
        return view('Registrar_Academico');
    }
    public function Actualizar()
    {
        $academicos = Academico::all();
        return view('Actualizar_Academico',compact('academicos'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            
           'rut' => 'required',
           'nombre'=>'required',
           'apellido'=> 'required',
           'correo' => 'required',

         ]);

         if ($validator->fails() or self::check($request->input('rut')) == false) {
             
            $errors = $validator->messages();
            if ( ! empty( $errors ) ) {

                $Errores = "";
                foreach ( $errors->all() as $error ) {
                    $Errores .= $error . " \n ";
            
                }
            }
                if(self::check($request->input('rut')) == false and $request->input('rut') != NULL){

                    return back()->with('error',"ERROR:\n "."rut invalido \n". $Errores );
                    
                 }
                 
                 else{
                    return back()->with('error',"ERROR:\n ". $Errores );
                 }
                
            } //llama metodo del baner, con los errores concatenados.
            
       
         $Academico = new Academico([
            'rut'=> $request->get('rut'),
            'nombre' => $request->get('nombre'),
            'apellido'=> $request->get('apellido'),
            'correo'=> $request->get('correo'),
         ]);
         $Academico->save();
         return back()->with('success','Academico registrado con exito.');
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
        $academico = Academico::find($id);
        $academico->delete();
        \Session::flash('success','Eliminacion de academico con exito.');
    
        
    
    }

    public function check($rut) {

        $cleanedRut = $this->clean($rut);

        if (! $cleanedRut)
            return false;

        list($numero, $digitoVerificador) = explode('-', $cleanedRut);

        //Validamos requisitos m�nimos
        if ((($digitoVerificador != 'K') && (! is_numeric($digitoVerificador))) || (count(str_split($numero)) > 11))
            return false;

        //Validamos que todos los caracteres del n�mero sean d�gitos
        foreach(str_split($numero) as $chr) {
            if (! is_numeric($chr))
                return false;
        }

        //Calculamos el digito verificador
        $digit = $this->digitoVerificador($numero);

        //Comparamos el digito verificador calculado con el entregado
        if($digit == $digitoVerificador)
            return true;

        return false;
    }

    public function clean($originalRut, $incluyeDigitoVerificador = true) {

        //Eliminamos espacios al principio y final
        $originalRut = trim($originalRut);
        //En caso de existir, eliminamos ceros ("0") a la izquierda
        $originalRut = ltrim($originalRut, '0');
        $input		= str_split($originalRut);
        $cleanedRut	= '';
        foreach ($input as $key => $chr) {
            //Digito Verificador
            if ((($key + 1) == count($input)) && ($incluyeDigitoVerificador)){
                if (is_numeric($chr) || ($chr == 'k') || ($chr == 'K'))
                    $cleanedRut .= '-'.strtoupper($chr);
                else
                    return false;
            }
            //N�meros del RUT
            elseif (is_numeric($chr))
                $cleanedRut .= $chr;
        }

        if (strlen($cleanedRut) < 3)
            return false;

        return $cleanedRut;
    }

    public function digitoVerificador($rut) {
        //Preparamos el RUT recibido
        $numero = $this->clean($rut, false);
        //Calculamos el d�gito verificador
        $txt		= array_reverse(str_split($numero));
        $sum		= 0;
        $factors	= array(2,3,4,5,6,7,2,3,4,5,6,7);
        foreach($txt as $key => $chr) {
            $sum += $chr * $factors[$key];
        }

        $a			= $sum % 11;
        $b			= 11-$a;

        if($b == 11)
            $digitoVerificador	= 0;
        elseif($b == 10)
            $digitoVerificador	= 'K';
        else
            $digitoVerificador = $b;
        //Convertimos el n�mero a cadena para efectos de poder comparar
        $digitoVerificador = (string)$digitoVerificador;
        return $digitoVerificador;
    }
    public function Modificar(Request $request)
    {
      //dd($request->all());
        
        $request->validate([
            'nombre'=>'required|regex:/^[\pL\s\-]+$/u',
            'apellido'=>'required|regex:/^[\pL\s\-]+$/u',
            'correo'=>'required|email',
            'id_Academico' =>'required',
        ]);
        
          








        if($request->get('eliminar')=="on")
        {
            $id = $request->get('id_Academico');
            return self::destroy($id);
        }
        else
        {
        $academico = Academico::find($request->get('id_Academico'));
        $academico->nombre =$request->get('nombre');
        $academico->apellido =$request->get('apellido');
        $academico->correo =$request->get('correo');
        $academico->save();
        \Session::flash('success','Modificacion de estudiante con exito.');
    
        }
    }

}
