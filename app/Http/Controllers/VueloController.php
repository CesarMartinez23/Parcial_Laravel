<?php

namespace App\Http\Controllers;

use App\Models\Vuelo;
use Illuminate\Http\Request;

class VueloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['vuelos'] = Vuelo::All();
        return view('vuelos.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('vuelos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $vueloData = request()->except('_token');
        Vuelo::insert($vueloData);
        return redirect()->route('vuelos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $vuelo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $vuelo = Vuelo::findOrFail($id);
        return view('vuelos.edit', compact('vuelo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $vueloData = request()->except('_token', '_method');
        Vuelo::where('id', '=', $id)->update($vueloData);
        return redirect('vuelos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Vuelo::destroy($id);
        return redirect('vuelos');
    }
}
