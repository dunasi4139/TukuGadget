<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function indexAbout()
    {
        if (session('berhasil_Login')) {
            return view('afterlogin.about-us');
        } else {
            return view('beforelogin.about-us');
        }
    }
}
