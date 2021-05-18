<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;

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
    public function __construct()
    {
        $this->barang = new barang();
    }


    public function dashboardLogin()
    {
        $data = [
            'produk'=>$this->barang->allData()
        ];
        if (session('berhasil_Login')) {
            return view('afterlogin.dashboard',$data);
        } else {
            return view('beforelogin.dashboard',$data);
        }
    }
}
