<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index ()
    {
        $name = 'Ignas Lunenas';
        $email = 'hey@ignart.lt';
        $phone = '+37060455792';

        // masyvas ⬇️

        $interests = [

            'Kava',
            'Kompas',
            'Kodas',
            'Dar kazkas'

        ];

        $data = compact('name', 'email' ,'phone', 'interests');

        return view('contact', $data);
    }
}
