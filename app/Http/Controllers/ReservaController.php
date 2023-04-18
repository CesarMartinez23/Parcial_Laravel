<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['reservas'] = Reserva::All();
        return view('reservas.index', $data );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reservas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $reservaData = request()->except('_token');
        Reserva::insert($reservaData);
        return redirect()->route('reservas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $reserva)
    {
        //
        $reserva = Reserva::findOrFail($reserva);
        return view('reservas.edit', compact('reserva'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $reserva)
    {
        //
        $reservaData = request()->except('_token', '_method');
        Reserva::where('id', '=', $reserva)->update($reservaData);
        return redirect('reservas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $reserva)
    {
        //
        Reserva::destroy($reserva);
        return redirect('reservas');
    }
}
