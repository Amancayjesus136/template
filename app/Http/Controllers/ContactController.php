<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Carbon;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listado()
    {
        $nombresContactosRecientes = Contact::where('estado', 0)->pluck('name');
        $contactos = Contact::all();
        return view('contact.listado', compact('contactos', 'nombresContactosRecientes'));
    }

    public function actualizar_contacto(string $id)
    {
        $contacto = Contact::findOrFail($id);
        return redirect()->back()->with('success', 'Actividad actualizado exitosamente');
    }

    public function editar_contacto(Request $request, string $id)
    {
        $contacto = Contact::findOrFail($id);
        $contacto->update($request->all());
        return redirect()->back()->with('success', 'actualizado exitosamente');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
