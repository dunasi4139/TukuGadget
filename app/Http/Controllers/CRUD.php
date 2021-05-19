<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\barang;

class CRUD extends Controller
{

    public function __construct()
    {
        $this->barang = new barang();
    }


    public function dashboard()
    {
        $data = [
            'produk' => $this->barang->latestProduct()
        ];
        if (Auth::check()) {
            return view('afterlogin.dashboard', $data);
        } else {
            return view('beforelogin.dashboard', $data);
        }
    }

    public function jualBarang(Request $request)
    {
        $file = $request->file('fotobarang');
        $filenameWithExt = $file->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $filenameSimpan = $filename . '.' . $extension;
        barang::create([
            'nama' => $request->namabarang,
            'jenis' => $request->jenisbarang,
            'harga' => $request->hargabarang,
            'alamat' => $request->alamatbarang,
            'deskripsi' => $request->deskripsibarang,
            'gambar' => $filenameSimpan,
        ]);
        $file->move(public_path() . '/assets/images/barang', $filenameSimpan);
        return redirect('/');
    }

    public function search(Request $request)
    {

        if (Auth::check()) {
            if ($request->has('search')) {
                $dataCari = barang::where('nama', 'LIKE', '%' . $request->search . '%')->get();
                return view('afterlogin.product', ['dataCari' => $dataCari]);
            } else if (url('/search')) {
                return view('afterlogin.product');
            } else {
                return redirect('/search')->with('message', 'Username sudah terpakai');
            }
        } else {
            if ($request->has('search')) {
                $dataCari = barang::where('nama', 'LIKE', '%' . $request->search . '%')->get();
                return view('beforelogin.product', ['dataCari' => $dataCari]);
            } else if (url('/search')) {
                return view('beforelogin.product');
            } else {
                return redirect('/search')->with('message', 'Username sudah terpakai');
            }
        }
    }
}
