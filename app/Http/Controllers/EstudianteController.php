<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Estudiante;
use Illuminate\Support\Facades\Validator;
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


        
        $validator = Validator::make($request->all(), [
            
           'nombre'=>'required',
           'apellido'=> 'required',
           'rut' => 'required',
           'correo' => 'required',
           'carrera' => 'required',
           'telefono' => 'required|integer',
//
         ]);

         if ($validator->fails() or self::check($request->input('rut')) == false) {
             if(self::check($request->input('rut')) == false){

                return back()->with('error',"ERROR: rut invalido.");
             }
            $errors = $validator->messages();
            if ( ! empty( $errors ) ) {

                $Errores = "";
                foreach ( $errors->all() as $error ) {
                    $Errores .= $error . " \n ";
                    
            
                }
            } //llama metodo del baner, con los errores concatenados.
            return back()->with('error',"ERROR:\n ". $Errores );
       }
        else{
            Estudiante::create($request->all());
            return back()->with('success','Estudiante registrado con exito.');

        }
         
      
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

}