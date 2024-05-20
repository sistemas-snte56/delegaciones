<?php

namespace App\Http\Controllers;

use App\Models\Delegacion;
use App\Models\Maestro;
use App\Models\Region;
use App\Models\TipoDelegacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MaestroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maestros = Maestro::all();
        return view('config.maestros.index', compact('maestros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $regiones = Region::all()->mapWithKeys(function ($item) {
        //     return [$item->id => $item->region . ' - ' . $item->sede];
        // })->toArray();

        // $delegaciones = Delegacion::all()->toArray();
        // return view('config.maestros.create',compact('regiones','delegaciones'));
        return view('config.maestros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validacion = Validator::make($request->all(),[
            'select_tipo_delegacion' => 'required',
            'select_region' => 'required',
            'select_delegacion' => 'required',
            'select_secretaria' => 'required',
            'select_titulo' => 'required',
            'nombre' => 'required',
            'apaterno' => 'required',
            'amterno' => 'required',
            'select_genero' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'cp' => 'required',
            'ciudad' => 'required',
            'estado' => 'required',
        ]);

        if ($validacion->fails()) {
            return redirect()->back()->withErrors($validacion)->withInput();
        }

        $esDuplicado = Maestro::where('id_delegacion',$request->input('select_delegacion'))
                              ->where('id_secretaria', $request->input('select_secretaria'))
                              ->first();

       // dd($esDuplicado);
        $maestro = new Maestro();

        if ($esDuplicado) {
            return redirect()->route('maestro.create')->with('warning', 'Registro duplicado.');
        } else {

            $maestro->id_delegacion = $request->input('select_delegacion');
            $maestro->id_secretaria = $request->input('select_secretaria');
            $maestro->titulo = $request->input('select_titulo');
            $maestro->nombre = strtoupper($request->input('nombre'));
            $maestro->apaterno = strtoupper($request->input('apaterno'));
            $maestro->amaterno = strtoupper($request->input('amterno'));
            $maestro->id_genero = $request->input('select_genero');
            $maestro->telefono = strtoupper($request->input('telefono'));
            $maestro->email = $request->input('email');
            $maestro->direccion = strtoupper($request->input('direccion'));
            $maestro->cp = $request->input('cp');
            $maestro->ciudad = strtoupper($request->input('ciudad'));
            $maestro->estado = strtoupper($request->input('estado'));
            $maestro->save();
        }
        return redirect('/maestros')->with('success', 'Su registro se guardo con éxito.');
        // return view('config.maestros.index')->with('success','Su registro se guardo con éxito.');
        // return redirect()->route('maestro.index',$maestro)->with('update', 'Registro actualizado con éxito.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Maestro $maestro)
    {
        // $delegacion = Delegacion::find($id);
        //$delegacion->load('maestros');
        
        // $delegacion = Delegacion::with('maestros')->find($id);
        
        // $delegacion = Delegacion::with(['maestros' => function ($query) {
        //     $query->orderBy('id', 'desc');
        // }])->find($id);

        // // dd($delegacion);
        // return view('config.delegaciones.show', compact('delegacion'));
        
        return view('config.maestros.show',compact('maestro'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Maestro $maestro)
    {    
        return view('config.maestros.edit',compact('maestro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Maestro $maestro)
    {
        $validation = $request->validate([
            'titulo' => 'required',
            'nombre' => 'required',
            'apaterno' => 'required',
            'genero' => 'required',
            'telefono' => 'required|numeric|digits:10',
            'email' => 'required|email|unique:maestros,email,'.$maestro->id,
            'direccion' => 'required',
            'cp' => 'required|numeric|digits:5',
            'ciudad' => 'required',
            'estado' => 'required',
        ]);

        
        $maestro->titulo = $request->input('titulo');
        $maestro->nombre = strtoupper($request->input('nombre'));
        $maestro->apaterno = strtoupper($request->input('apaterno'));
        $maestro->amaterno = strtoupper($request->input('amaterno'));
        $maestro->id_genero = $request->input('genero');
        $maestro->telefono = strtoupper($request->input('telefono'));
        $maestro->email = $request->input('email');
        $maestro->direccion = strtoupper($request->input('direccion'));
        $maestro->cp = $request->input('cp');
        $maestro->ciudad = strtoupper($request->input('ciudad'));
        $maestro->estado = strtoupper($request->input('estado'));
    
 
        $maestro->update();
        return redirect()->route('maestro.show',$maestro)->with('update', 'Registro actualizado con éxito.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Maestro $maestro)
    {
        $maestro->delete();
        // return redirect()->route('maestro.index');
        return redirect()->back(); // Redirigir de vuelta a la página anterior
    }
}
