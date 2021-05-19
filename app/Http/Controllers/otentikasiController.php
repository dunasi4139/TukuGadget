<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class otentikasiController extends Controller
{
    public function indexLogin(){
        return view('beforelogin.login');
    }

    public function login(Request $request){
        $request->validate([
            'username' => 'required|string',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            
            return redirect('/');
        }
        
        return back()->with('wrong', 'Username dan/atau password salah');
    }
    public function indexRegister()
    {
        return view('beforelogin.register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:50',
            'email' => 'required',
            'username' => 'required|string|min:3|max:20',
            'noHP' => 'required|numeric',
            'password' => 'required|string|min:8|max:50'
        ],[
            'name.required'=> 'Masukkan Nama',
            'email.required'=> 'Masukkan Email',
            'username.required'=> 'Masukkan Username',
            'noHP.required'=> 'Masukkan NO HP',
            'password.required'=> 'Masukkan Password'
        ]);

        $occupied = False;

        if (User::where('username', '=', $request['username'])->exists()) {
            $occupied = True;
        }

        if ($occupied){
            return back()->with('occupied', 'Username sudah terpakai');
        }  else {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'username' => $request->username,
                'noHP' => $request->noHP,
                'password' => bcrypt($request->password),
            ]);
            return redirect('/');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();  
        $request->session()->invalidate();
        return redirect('/');
    }

}
