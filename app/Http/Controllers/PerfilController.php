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
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->estado = $request->has('estado') ? $request->estado : 0;

        $contact->save();
        return redirect()->back()->with('success', 'actualizado exitosamente');
    }
}
