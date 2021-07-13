{{-- menghubungkan ke view template master --}}
@extends('admin.layouts.master')

{{-- isi bagian judul halaman
cara penulisan isi section yang pendek --}}
@section('judul-halaman', 'Halaman Barang')


{{-- isi bagian konten --}}
{{-- cara penulisan isi section yang panjang --}}
@section('konten')
    <div class="container">
        <h3>&nbsp; Daftar Barang</h3>
        <div class="card-body">
            <a href="/barang/tambah" class="btn btn-primary">Input Barang Baru</a>
            <br/>
            <br/>
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th style="text-align: center">No</th>
                        <th style="text-align: center">Nama</th>
                        <th style="text-align: center">Harga</th>
                        <th style="text-align: center">Stock</th>
                        <th style="text-align: center">Picture</th>
                        <th style="width: 11%; text-align:center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($barang as $b)
                    <tr>
                        <td style="text-align: center">{{ $loop->iteration }}</td>
                        <td style="width: 20%;">{{ $b->name }}</td>
                        <td style="width: 20%;">{{ $b->harga }}</td>
                        <td>{{ $b->stock }}</td>
                        <td style="width: 20%;"><img src="{{ URL::to('/') }}/images/{{ $b->picture }}" width="70px" alt=""> </td>
                        <td style="width: 20%; text-align: center;">
                            <a href="/barang/edit/{{ $b->id }}" class="btn btn-warning">Edit</a>
                            <a href="/barang/hapus/{{ $b->id }}" onclick="return confirm('Apakah anda yakin anda menghapus data ini?')" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
