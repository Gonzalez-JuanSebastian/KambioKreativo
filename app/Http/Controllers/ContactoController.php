<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|max:255',
            'email' => 'required|email',
            'empresa' => 'nullable|string|max:255',
            'telefono' => 'nullable|string|max:20',
            'servicio' => 'required',
            'mensaje' => 'required|min:10', 
        ]);

        $contacto = Contacto::create($validated);

        Mail::to('gonzalez.juansebastian.r@gmail.com')->send(new ContactoMailable($contacto));

        return back()->with('success', '¡Mensaje enviado! Te contactaremos pronto.');
    }
}