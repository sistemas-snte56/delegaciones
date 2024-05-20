<?php

namespace App\Http\Controllers;

use App\Models\Delegacion;
use App\Models\DelegacionCt;
use App\Models\Maestro;
use App\Models\Nomenclatura;
use App\Models\Region;
use App\Models\TipoDelegacion;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\PDF;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class DelegacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
        // $delegaciones = Delegacion::all();
        $delegaciones = Delegacion::orderBy('id', 'desc')->get();
        
        // return $delegaciones;
        return view('config.delegaciones.index', compact('delegaciones'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $regiones = Region::pluck('region','id')->toArray();

        $regiones = Region::all()->mapWithKeys(function ($item) {
            return [$item->id => $item->region . ' - ' . $item->sede];
        })->toArray();



        $tipo_delegacion = TipoDelegacion::pluck('tipo','id')->toArray();

        $TipoDelegacion = TipoDelegacion::all();

        return view('config.delegaciones.create',compact('tipo_delegacion','regiones','TipoDelegacion'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'select_region' => 'required',
            'fecha_inicio' => 'required',
            'fecha_final' => 'required',
            'TipoDelegacionId' => 'required',
            'nomenclatura' => 'required',
            'num_delegacional' => 'required',
            'nivel_delegacional' => 'required',
            'sede_delegacional' => 'required',
            'domicilio_delegacional' => 'required',
            'cp_delegacional' => 'required|numeric|digits:5',
            'ciudad_delegacional' => 'required',
            'estado_delegacional' => 'required',
        ]);



        // Declaramos las variables IdNomenclatura y NumDelegacional que obtendran el 
        // valor del formulario para saber si existe la delegación
        $IdNomenclatura = $request->input('nomenclatura');
        $NumDelegacional = $request->input('num_delegacional');
        
        // Declaramos la variable para dar el valor de id_delegacion_o_ct
        $IdDelegacionCt = null;
        
        
        // Verifica la existencia de registros con los valores proporcionados
        $existeRegistro = Delegacion::where('id_nomenclatura', $IdNomenclatura)
                                    ->where('num_delegaciona',$NumDelegacional)
                                    ->exists();

        if ($existeRegistro) {
            return redirect()->back()->with('warning', 'La Delegación ya se encuentra registrada.');
        }
        
        $delegacion = new Delegacion();
        
        $delegacion->id_region = $request->input('select_region');
        $delegacion->id_tipo_delegacion = $request->input('TipoDelegacionId');
        
        if ($delegacion->id_tipo_delegacion == 1 || $delegacion->id_tipo_delegacion == 2) {
            $IdDelegacionCt = "1";
        } elseif ( $delegacion->id_tipo_delegacion == 3 ){ 
            $IdDelegacionCt = "2";
        }

        $delegacion->id_delegacion_o_ct = $IdDelegacionCt;
        $delegacion->id_nomenclatura = $request->input('nomenclatura');
        $delegacion->num_delegaciona  = $request->input('num_delegacional');
        $delegacion->nivel_delegaciona  = strtoupper($request->input('nivel_delegacional'));
        $delegacion->sede_delegaciona  = strtoupper($request->input('sede_delegacional'));
        $delegacion->fecha_inicio_delegaciona = Carbon::createFromFormat('d-m-Y', $request->input('fecha_inicio'));
        $delegacion->fecha_final_delegaciona = Carbon::createFromFormat('d-m-Y', $request->input('fecha_final'));
        $delegacion->direccion_delegaciona = strtoupper($request->input('domicilio_delegacional'));
        $delegacion->cp_delegaciona  = $request->input('cp_delegacional');
        $delegacion->ciudad_delegaciona  = strtoupper($request->input('ciudad_delegacional'));
        $delegacion->estado_delegaciona  = strtoupper($request->input('estado_delegacional'));
        $delegacion->save();

        $ultimaDelegacion = $delegacion->id;


        if ($request->input('TipoDelegacionId') == 1) {
            // return "Vamos a colocar informacion de la secretaria de activos";
           

            for ($i=1; $i < 8; $i++) { 
                $maestro = new Maestro();
                $maestro->id_delegacion = $ultimaDelegacion;
                $maestro->id_secretaria = $i;
                $maestro->titulo = "EMPTY";
                $maestro->nombre = "EMPTY";
                $maestro->apaterno = "EMPTY";
                $maestro->amaterno = "EMPTY";
                $maestro->id_genero = 1;
                $maestro->email = "empty@email.com";
                $maestro->telefono = "EMPTY";
                $maestro->direccion = "EMPTY";
                $maestro->cp = "EMPTY";
                $maestro->ciudad = "EMPTY";
                $maestro->estado = "EMPTY";
                $maestro->id_users = Auth::user()->id;
                $maestro->save();
            }

               
        } elseif ($request->input('TipoDelegacionId') == 2) {
            // return "Vamos a colocar informacion de la secretaria de jubilados";
            for ($i=8; $i < 15; $i++) { 
                $maestro = new Maestro();
                $maestro->id_delegacion = $ultimaDelegacion;
                $maestro->id_secretaria = $i;
                $maestro->titulo = "EMPTY";
                $maestro->nombre = "EMPTY";
                $maestro->apaterno = "EMPTY";
                $maestro->amaterno = "EMPTY";
                $maestro->id_genero = 1;
                $maestro->email = "empty@email.com";
                $maestro->telefono = "EMPTY";
                $maestro->direccion = "EMPTY";
                $maestro->cp = "EMPTY";
                $maestro->ciudad = "EMPTY";
                $maestro->estado = "EMPTY";
                $maestro->id_users = Auth::user()->id;
                $maestro->save();
            }            
           
        } elseif ($request->input('TipoDelegacionId') == 3) {
            // return "Vamos a colocar informacion de representantes de centro de trabajo";
            $maestro = new Maestro();
            $maestro->id_delegacion = $ultimaDelegacion;
            $maestro->id_secretaria = 15;
            $maestro->titulo = "EMPTY";
            $maestro->nombre = "EMPTY";
            $maestro->apaterno = "EMPTY";
            $maestro->amaterno = "EMPTY";
            $maestro->id_genero = 1;
            $maestro->email = "empty@email.com";
            $maestro->telefono = "EMPTY";
            $maestro->direccion = "EMPTY";
            $maestro->cp = "EMPTY";
            $maestro->ciudad = "EMPTY";
            $maestro->estado = "EMPTY";
            $maestro->id_users = Auth::user()->id;
            $maestro->save();           
        }
        

        // return redirect('/delegaciones')->with('success', 'Su registro se guardo con éxito.');

        return redirect()->route('delegacion.index')->with('success','Su registro se guardo con éxito.');
    
    }



    /**
     * Display the specified resource.
     */
    public function show(Delegacion $delegacion, $id)
    {
        // $delegacion = Delegacion::find($id);
        //$delegacion->load('maestros');
        
        // $delegacion = Delegacion::with('maestros')->find($id);
        
        $delegacion = Delegacion::with(['maestros' => function ($query) {
            $query->orderBy('id', 'desc');
        }])->find($id);

        // dd($delegacion);
        return view('config.delegaciones.show', compact('delegacion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Delegacion $delegacion, $id)
    {
        $regiones = Region::all()->mapWithKeys(function ($item) {
            return [$item->id => $item->region . ' - ' . $item->sede];
        })->toArray();


        $tipo_delegaciones = TipoDelegacion::all()->pluck('tipo','id')->toArray();
        //dd($tipo_delegaciones);
        $delegacion =  Delegacion::find($id);
        // dd($delegacion);
        $nomenclaturas = Nomenclatura::all()->pluck('nomenclatura', 'id')->toArray();


        //$delegacion = Delegacion::with('maestros','tipo_delegacion','nomenclatura')->find($id);


        return view('config.delegaciones.edit', compact('delegacion','regiones','tipo_delegaciones','nomenclaturas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Delegacion $delegacion, $id)
    {
        $delegacion = Delegacion::find($id);
        $IdDelegacionCt = null;

        $validation = $request->validate([
            'select_region' => 'required',
            'fecha_inicio' => 'required',
            'fecha_final' => 'required',
            'tipodelegacion' => 'required',
            'nomenclatura' => 'required',
            'num_delegacional' => 'required',
            'nivel_delegacional' => 'required',
            'sede_delegacional' => 'required',
            'domicilio_delegacional' => 'required',
            'cp_delegacional' => 'required|numeric|digits:5',
            'ciudad_delegacional' => 'required',
            'estado_delegacional' => 'required',
        ]);        

        //$delegacion->id_delegacion_o_ct = $IdDelegacionCt;

        $delegacion->id_region = $request->input('select_region');
        $delegacion->id_tipo_delegacion = $request->input('tipodelegacion');
        
        if ($delegacion->id_tipo_delegacion == 1 || $delegacion->id_tipo_delegacion == 2) {
            $IdDelegacionCt = "1";
        } elseif ( $delegacion->id_tipo_delegacion == 3 ){ 
            $IdDelegacionCt = "2";
        }

        $delegacion->id_delegacion_o_ct = $IdDelegacionCt;
        $delegacion->id_nomenclatura = $request->input('nomenclatura');
        $delegacion->num_delegaciona  = $request->input('num_delegacional');
        $delegacion->nivel_delegaciona  = strtoupper($request->input('nivel_delegacional'));
        $delegacion->sede_delegaciona  = strtoupper($request->input('sede_delegacional'));
        $delegacion->fecha_inicio_delegaciona = $request->input('fecha_inicio');
        $delegacion->fecha_final_delegaciona = $request->input('fecha_final');
        $delegacion->direccion_delegaciona = strtoupper($request->input('domicilio_delegacional'));
        $delegacion->cp_delegaciona  = $request->input('cp_delegacional');
        $delegacion->ciudad_delegaciona  = strtoupper($request->input('ciudad_delegacional'));
        $delegacion->estado_delegaciona  = strtoupper($request->input('estado_delegacional'));
        
        $delegacion->save();
        
        // return back();
        return redirect()->route('delegacion.show',$delegacion)->with('success_update','Actualizacion con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Delegacion $delegacion, $id)
    {
        $delegacion = Delegacion::find($id);
        if (!$delegacion) {
            return abort(404);
        }
        $delegacion->delete();
        return back()->with('delete', 'Su registro ha sido eliminado.');
    }

    /**
     * Obtener las nomenclaturas
     */

    public function getNomenclaturas($TipoDelegacionId)
    {
        $nomenclaturas = Nomenclatura::where('id_tipo_delegacion',$TipoDelegacionId)->pluck('nomenclatura','id');
        return response()->json($nomenclaturas);
    }

    /*public function generarPDf()
    {
        $delegaciones = Delegacion::all();
        $pdf = PDF::loadView('delegaciones.pdf', compact('delegaciones'));
        return $pdf->download('delegaciones.pdf');
    }*/


    public function printHoja(Delegacion $delegacion, $id)
    {
        $delegacion = Delegacion::with(['maestros' => function ($query) {
            $query->orderBy('id', 'asc');
        }])->find($id);

        $pdf = PDF::loadView('config.delegaciones.print', compact('delegacion'))
            ->setPaper('letter','portrait')
            ->setOption(['dpi' => 150, 'defaultFont' => 'Arial'])
            ->setWarnings(false)
            ->save('myfile.pdf');

        // Devolver el PDF como stream
        return $pdf->stream();

    }

    public function printHojaDatos(Delegacion $delegacion, $id)
    {
        $delegacion = Delegacion::with(['maestros' => function ($query) {
            $query->orderBy('id', 'asc');
        }])->find($id);

        return view('config.delegaciones.date', compact('delegacion'));
        // return view('config.delegaciones.edit', compact('delegacion','regiones','tipo_delegaciones','nomenclaturas'));

    }

}
