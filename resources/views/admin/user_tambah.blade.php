@extends('admin.layouts.master')

@section('judul-halaman', 'Halaman User')

@section('konten')
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center">
            <strong>TAMBAH DATA USER</strong>
        </div>
        <div class="card-body">
            <a href="/user" class="btn btn-primary">Kembali</a>
            <br/>
            <br/>

            <form method="post" action="/user/store">

                {{ csrf_field() }}

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="name" class="form-control" placeholder="Idad Rusdiana">

                    @if($errors->has('name'))
                        <div class="text-danger">
                            {{ $errors->first('name')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="idadrusdiana01@gmail.com">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" placeholder="Kp. Seketando RT.01/13 Desa Cangkorah Kec. Batujajar Kab. Bandung Barat"></textarea>
                     @if($errors->has('alamat'))
                        <div class="text-danger">
                            {{ $errors->first('alamat')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Whatsapp</label>
                    <input type="text" name="whatsapp" class="form-control" placeholder="6289622938113">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Idad">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control" placeholder="A12341">
                </div>
                <div class="form-group">
                    <label>role</label>
                    <input type="text" name="role" class="form-control" placeholder="Admin">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
