@extends('admin.layouts.master')

@section('judul-halaman', 'Halaman Barang')

@section('konten')
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center">
            <strong>TAMBAH DATA BARANG</strong>
        </div>
        <div class="card-body">
            <a href="/barang" class="btn btn-primary">Kembali</a>
            <br/>
            <br/>

            <form method="post" action="/barang/store" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Kitchen set">
                    @if($errors->has('name'))
                        <div class="text-danger">
                            {{ $errors->first('name')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" name="harga" id="harga" class="form-control" placeholder="12000">
                    @if($errors->has('harga'))
                        <div class="text-danger">
                            {{ $errors->first('harga')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Stock</label>
                    <input type="number" name="stock" id="stock" class="form-control" placeholder="5">
                    @if($errors->has('stock'))
                        <div class="text-danger">
                            {{ $errors->first('stock')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Picture</label> <br>
                    <input type="file" name="picture" id="picture">
                    @if($errors->has('picture'))
                        <div class="text-danger">
                            {{ $errors->first('picture')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
