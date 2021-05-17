<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CRUD extends Controller
{
    public function indexJualBarang()
    {
        return view('afterlogin.jual-barang');
    }
}
