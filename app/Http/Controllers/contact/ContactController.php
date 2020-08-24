<?php

namespace App\Http\Controllers\contact;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    //
    public function contactIndex()
    {
        return view('layout.contact');
    }
}
