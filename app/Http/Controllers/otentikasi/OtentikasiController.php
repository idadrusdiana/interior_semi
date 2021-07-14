<?php

namespace App\Http\Controllers\otentikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class OtentikasiController extends Controller
{
    public function index()
    {
        return view('otentikasi.login');
    }

    public function login(Request $request)
    {
        // dd($request->all());
        $data = User::where('email', $request->email)->firstOrFail(); //mengecek email, apakah email yang di inputkan dengan email yang ada di database sudah sama
        // dd($data); //untuk mengecek isi dari variable $data
        if ($data) {
            if(Hash::check($request->password,$data->password)){
                session(['berhasil_login' => true]);
                return redirect('/index');
            }
        }
        return redirect('/')->with('message', 'Email atau Password Salah');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
}
