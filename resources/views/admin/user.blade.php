{{-- menghubungkan ke view template master --}}
@extends('admin.layouts.master')

{{-- isi bagian judul halaman
cara penulisan isi section yang pendek --}}
@section('judul-halaman', 'Halaman User')

{{-- isi bagian konten --}}
{{-- cara penulisan isi section yang panjang --}}
@section('konten')
    <h3>&nbsp; Daftar User</h3>
    {{-- <div class="container"> --}}
        <div class="card-body">
            <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary">Input User Baru</button>
            <br/>
            <br/>
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Username</th>
                        <th>Whatsapp</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $u)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $u->name }}</td>
                        <td>{{ $u->email }}</td>
                        <td>{{ $u->alamat }}</td>
                        <td>{{ $u->username }}</td>
                        <td>{{ $u->whatsapp }}</td>
                        <td>{{ $u->role }}</td>
                        <td>
                            <a href="/user/edit/{{ $u->id }}" class="btn btn-warning">Edit</a>
                            <a href="/user/hapus/{{ $u->id }}" onclick="return confirm('Apakah anda yakin anda menghapus data ini?')" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        {{-- </div> --}}
    </div>
    {{-- modal --}}
    <div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Data User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/user/store" method="POST" enctype="multipart/form-data">
                        @csrf
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
                            <input type="password" name="password" class="form-control" placeholder="A12341">
                        </div>
                        <div class="form-group">
                            <label>Role</label>
                            <select class="form-control" name="role">
                                <option value="Admin">Admin</option>
                                <option value="User">User</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

