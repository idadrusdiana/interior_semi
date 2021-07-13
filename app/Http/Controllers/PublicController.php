<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class PublicController extends Controller
{

    public function index()
    {
        return view('public.home');
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $this->validate($request,[
    		'name' => 'required',
    		'email' => 'required',
            'alamat' => 'required',
            'whatsapp' => 'required',
            'username' => 'required',
            'password' => 'required',
            'role' => 'required'
    	]);

        $data_user = new User;
        $data_user->name = $request->name;
        $data_user->email = $request->email;
        $data_user->alamat = $request->alamat;
        $data_user->whatsapp = $request->whatsapp;
        $data_user->username = $request->username;
        $data_user->password = bcrypt($request->password);
        $data_user->role =  'User';
        $data_user->save();

        return redirect('/')->with('sukses', 'data berhasil terdaftar');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
