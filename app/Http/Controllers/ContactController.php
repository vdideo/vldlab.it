<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validazione dei dati
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        // Salvataggio nel database
        $contactMessage = ContactMessage::create($validated);

        // Invio email
        try {
            Mail::to('dideo.vl@gmail.com')->send(new ContactMail($contactMessage));
        } catch (\Exception $e) {
            \Log::error('Errore invio email contatto: '.$e->getMessage());
        }

        // Ritorna con messaggio di successo
        return redirect()->route('contacts', ['locale' => app()->getLocale()])->with('success', __('messages.contacts.form_success'));
    }
}
