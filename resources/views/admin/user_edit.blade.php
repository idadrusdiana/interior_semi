@extends('admin.layouts.master')
@section('judul-halaman', 'Edit User')
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

            <form method="post" action="/user/update/{{ $user->id }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                    @if($errors->has('name'))
                        <div class="text-danger">
                            {{ $errors->first('name')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" value="" >{{ $user->alamat }}</textarea>
                     @if($errors->has('alamat'))
                        <div class="text-danger">
                            {{ $errors->first('alamat')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Whatsapp</label>
                    <input type="text" name="whatsapp" class="form-control" value="{{ $user->whatsapp }}">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="{{ $user->username }}">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" value="{{ $user->password }}">
                </div>
                <div class="form-group">
                    <label>Role</label>
                    <select class="form-control" name="role">
                        <option value="Admin" {{ $user->role == 'admin' ? 'selected': ''}}>Admin</option>
                        <option value="User" {{ $user->role == 'user' ? 'selected': ''}}>User</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
