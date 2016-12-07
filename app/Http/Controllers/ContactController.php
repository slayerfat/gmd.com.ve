<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    /**
     * Shows the contact view.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('contact');
    }

    public function newMessage(Request $request)
    {
        if (!$request->input('email')) {
            return response('Datos requeridos', 400);
        }

        return response($request->all());
    }
}
