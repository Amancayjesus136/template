<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class PerfilController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function store(Request $request)
    {
        Contact::create($request->all());
        return redirect()->back()->with('success', 'actualizado exitosamente');
    }
}
