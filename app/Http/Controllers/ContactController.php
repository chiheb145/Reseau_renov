<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('envoyer');
    }

    public function store(Request $request)
    {

    }

}
