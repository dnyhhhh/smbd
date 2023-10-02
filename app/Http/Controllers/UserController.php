<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function register()
    {
        $data['title'] = 'Register';
        return view('user/register', $data);
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:tb_user',
            'name' => 'required',
            'password' => 'required|confirmed', // Menggunakan 'confirmed' untuk validasi password_confirmation
        ]);

        $user = new User([
            'name' => $request->name,
            'nim' => $request->nim,
            'password' => Hash::make($request->password),
        ]);

        $user->save();

        return redirect()->route('login')->with('success', 'Berhasil Registrasi, Silahkan Login');
    }


    public function login()
    {
        $data['title'] = 'Login';
        return view('user/login', $data);
    }
    public function login_action(Request $request)
    {
        Session::flash('nim',$request->nim);
        $request->validate([
            'nim' => 'required',
            'password' => 'required',
        ],[
            'nim.required'=>'Nim wajib diisi',
            'password.required'=>'Password wajib diisi',
        ]);
        $infologin = [
        'nim'=>$request->nim,
        'password'=>$request->password,
        ];

        if(Auth::attempt($infologin)){
            return redirect()->route('layout-table');
        }else{
            return redirect('login')->withErrors('NIM dan Password yang dimasukan tidak valid');

        }
    }


}