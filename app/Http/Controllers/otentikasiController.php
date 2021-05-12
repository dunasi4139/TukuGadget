<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class otentikasiController extends Controller
{
    public function indexLogin()
    {
        return view('beforelogin.login');
    }
    public function login(Request $request)
    {
        $data = User::where('username', $request->username)->first();
        if ($data) {
            if (Hash::check($request->password, $data->password)) {
                session(['berhasil_Login' => true]);
                return redirect('/');
            }
        }
        return redirect('/indexLogin')->with('message', 'Username dan/atau Password Salah');
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
}
