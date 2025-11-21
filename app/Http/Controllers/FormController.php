<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\FormMail;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validate fields (optional but recommended)
       $data = $request->validate([
            'prenom'             => 'required|string',
            'nom'                => 'required|string',
            'mairie'             => 'nullable|string',
            'personnes_mairie'   => 'nullable|string',
            'beach'              => 'nullable|string',
            'personnes_beach'    => 'nullable|string',
            'houppa'             => 'nullable|string',
            'personnes_houppa'   => 'nullable|string',
            'hotel'              => 'nullable|string',
            'message_maries'     => 'nullable|string',
        ]);
        // return $data;
        // Send email to your address
        Mail::to('tanukashyap889@gmail.com')->send(new FormMail($data));

        return redirect('thank-you')->with('success', 'Form submitted successfully!');
    }
}
