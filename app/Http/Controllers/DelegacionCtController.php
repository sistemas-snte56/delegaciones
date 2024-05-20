<?php

namespace App\Http\Controllers;

use App\Models\DelegacionCt;
use Illuminate\Http\Request;

class DelegacionCtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $delegacionCt = DelegacionCt::all();
        return view('config.deleg_ct.index', compact('delegacionCt'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DelegacionCt $delegacionCt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DelegacionCt $delegacionCt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DelegacionCt $delegacionCt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DelegacionCt $delegacionCt)
    {
        //
    }
}
