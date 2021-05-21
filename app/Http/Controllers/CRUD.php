<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use App\Models\barang;
use App\Models\User;

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

    public function product()
    {
        $data = [
            'produk' => $this->barang->allData()
        ];
        if (Auth::check()) {
            return view('afterlogin.product', $data);
        } else {
            return view('beforelogin.product', $data);
        }
    }

    public function jualBarang(Request $request)
    {
        $request->validate([
            'namabarang' => 'required',
            'hargabarang' => 'required|numeric',
            'alamatbarang' => 'required',
            'deskripsibarang' => 'required',
            'fotobarang' => 'required|image|mimes:jpeg,png,jpg,gif,svg|'
        ], [
            'namabarang.required' => 'Masukkan Nama Barang',
            'hargabarang.required' => 'Masukkan Harga Barang',
            'alamatbarang.required' => 'Masukkan Alamat Barang',
            'deskripsibarang.required' => 'Masukkan Deskripsi Barang',
            'fotobarang.required' => 'Masukkan Foto'
        ]);
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
    public function updateProfile(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ], [
            'foto.required'=>redirect('/profile')
        ]);
        $user = Auth::user();
        $foto = Auth::user()->foto;
        if ($foto) {
            $reqfile = 'assets/images/user/'.$foto;
            if (Storage::url($reqfile)) {
                File::delete($reqfile);
            }
            
            $file = $request->file('foto');
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filenameSimpan = $filename . '.' . $extension;
            $file->move(public_path() . '/assets/images/user', $filenameSimpan);
            $user->foto = $filenameSimpan;
            $user->save();
            return redirect('/profile');
        }
    }
}
