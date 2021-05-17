<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CRUD extends Controller
{
    public function indexJualBarang()
    {
        if (session('berhasil_Login')) {
            return view('afterlogin.jual-barang');
        } else {
            return redirect('/indexLogin');
        }

    }
}
