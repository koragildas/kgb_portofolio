<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        Log::info('Formulaire contact : ', $validated);

        try {
            Mail::to('contact.kogitech@gmail.com')->send(new ContactMessage($validated));

            Log::info('Mail envoyé avec succès');
            return response()->json(['message' => 'Message sent successfully !']);
        } catch (\Exception $e) {
            Log::error('Erreur mail : ' . $e->getMessage());
            return response()->json(['error' => 'An error has occurred '], 500);
        }
    }
}
