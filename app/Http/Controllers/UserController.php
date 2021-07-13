<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\transaksi;
use App\Barang;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('admin.user', ['user' => $user]);
    }

    public function tambah()
    {
        return view('admin.user_tambah');
    }

    public function store(Request $request)
    {


        //statis tanpa form
        // $data_user = new User;
        // $data_user->name = "Idad";
        // $data_user->email = "idadrusdiana01@gmail.com";
        // $data_user->alamat = "Kp. Seketando RT.01 RW.13 Desa Cangkorah Kec. Batujajar";
        // $data_user->whatsapp = "6289622938113";
        // $data_user->username = "idad";
        // $data_user->password = "123";
        // $data_user->role = "Admin";
        // $data_user->save();

        // return "User has been created successfully!";

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
        $data_user->role = $request->role;
        $data_user->save();

        return redirect('/user');

    }

    public function addTransaksi($id)
    {
        $data_user = User::find($id);
        $data_user = Barang::find($id);
        $transaksi = new transaksi();
        $transaksi->total = "45000";
        $transaksi->tanggal = "2021-05-01";
        $transaksi->picture = "piture/data_d";
        $data_user->transaksi()->save($transaksi);

        return "Transaksi has been created succesfully!";
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('admin.user_edit',['user'=>$user]);
    }

    public function update(Request $request, $id)
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

        $user1 = array(
            'name' => $request->name,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'whatsapp' => $request->whatsapp,
            'username' => $request->username,
            'password'=> $request->password,
            'role' => $request->role,
        );

        $user = User::find($id);
        $user->update($user1);

        return redirect('/user');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/user');
    }
}
