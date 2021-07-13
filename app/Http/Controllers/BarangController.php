<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view('admin.barang', ['barang' => $barang]);
    }

    public function tambah()
    {
        return view('admin.barang_tambah');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
    		'name' => 'required',
    		'harga' => 'required',
            'stock' => 'required',
            'picture' => 'required|image|mimes:jepg,png,jpg|max:2048', //untuk format gambarnya dan ukurannya
    	]);

        //cara upload gambar di form
        $image = $request->file('picture');
        $namaFile = rand().''.$image->getClientOriginalExtension();

        $data_barang= array(
            'name' => $request->name,
            'harga' => $request->harga,
            'stock' => $request->stock,
            'picture' => $namaFile
        );
        $image->move(public_path().'/images', $namaFile);
        Barang::create($data_barang);

        return redirect('/barang')->with('sukses', 'data berhasil disimpan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $barang = Barang::find($id);
        return view('admin.barang_edit',['barang'=>$barang]);
    }

    public function update(Request $request, $id)
    {
        $old_image_name = $request->hidden_image;
        $image = $request->file('picture');
        if($image !=''){
            $request->validate([
                'name' => 'required',
                'harga' => 'required',
                'stock' => 'required',
                'picture' => 'required|image|mimes:jepg,png,jpg|max:2048',
            ]);
            $image_name = $old_image_name;
            $image->move(public_path().'/images', $image_name);
        }else{
            $request->validate([
                'name' => 'required',
                'harga' => 'required',
                'stock' => 'required',
            ]);
            $image_name = $old_image_name;
        }

        $barang1 = array(
            'name' => $request->name,
            'harga' => $request->harga,
            'stock' => $request->stock,
            'picture' => $image_name
        );

        $barang = Barang::find($id);
        $barang->update($barang1);
        return redirect('/barang')->with('sukses','data berhasil diubah');
    }

    public function destroy($id)
    {
        $hapus = Barang::find($id);
        $file = public_path('/img/').$hapus->picture;
        //cek jika gambar ada
        if(file_exists($file)){
            // maka hapus file di folder Public/img
            @unlink($file);
        }
        //hapus data di database
        $hapus->delete();
        return redirect('/barang')->with('sukses', 'data berhasil dihapus');
    }
}
