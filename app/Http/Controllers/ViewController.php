<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function indexAbout()
    {
        if (Auth::check()) {
            return view('afterlogin.about-us');
        } else {
            return view('beforelogin.about-us');
        }
    }
    public function indexJualBarang()
    {
        if (Auth::check()) {
            return view('afterlogin.jual-barang');
        } else {
            return redirect('/indexLogin');
        }

    }
}
