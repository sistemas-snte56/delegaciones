<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regiones = Region::all();

        return view('config.regiones.index', compact('regiones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return "Crear una nueva Región";
        return view('config.regiones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Definiendo la regla de validación
        $validation = $request->validate([
            'region' => 'required|string',
            'sede' => 'required|string',
        ]);

        $region = new Region();
        $region->region = strtoupper($request->input('region')) ;
        $region->sede = strtoupper($request->input('sede'));
        $region->save();

        return redirect('/regiones')->with('success', 'Su registro se guardo con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Region $region)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Region $region, $id)
    {
        $region = Region::find($id);
        return view('config.regiones.edit', compact('region'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Region $region, $id)
    {

        $region = Region::find($id);

        // Definiendo la regla de validación
        $validation = $request->validate([
            'region' => 'required|string',
            'sede' => 'required|string',
        ]);


        $region->region = strtoupper($request->input('region')) ;
        $region->sede = strtoupper($request->input('sede'));
        $region->save();

        return redirect('/regiones')->with('update', 'Su registro ha sido actualizdo con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Region $region, $id)
    {
        // $region = Region::find($id);
        
        // if(!$region) {
        //     return abort(404);
        // }

        // $region->delete();

        // return back()->with('delete', 'Su registro ha sido eliminado.');
        
        try {
            $region = Region::find($id);
            $region->delete();
            return back()->with('delete', 'Su registro ha sido eliminado.');
        } catch (QueryException $e) {
            if ($e->getCode() == 23000) {
                // return response()->json(['message' => 'No es posible borrar el registro debido a que corresponde a otras delegaciones'], 422);
                return back()->with('error', 'Error al eliminar la región.');
            } else {
                // Si es otra excepción, puedes manejarla según tus necesidades
                // return response()->json(['message' => 'Error desconocido al eliminar el registro'], 500);
                return back()->with('error', 'Error desconocido al eliminar el registro.');
            }
        }
    }
}
