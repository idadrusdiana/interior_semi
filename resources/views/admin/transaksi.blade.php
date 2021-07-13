{{-- menghubungkan ke view template master --}}
@extends('admin.layouts.master')

{{-- isi bagian judul halaman
cara penulisan isi section yang pendek --}}
@section('judul-halaman', 'Halaman Transaksi')

{{-- isi bagian konten --}}
{{-- cara penulisan isi section yang panjang --}}
@section('konten')
    <h3>&nbsp; Daftar Transaksi</h3>
    <div class="card-body">
        <br/>
        <br/>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th style="text-align: center">No</th>
                    <th style="text-align: center">Tgl Transaksi</th>
                    <th style="text-align: center">Nama Pembeli</th>
                    <th style="text-align: center">Nama Barang</th>
                    <th style="text-align: center">Quantity</th>
                    <th style="text-align: center">Harga</th>
                    <th style="width: 11%; text-align:center">Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach($barang as $b) --}}
                <tr>
                    <td style="text-align: center"></td>
                    {{-- <td style="width: 20%;">{{ $b->name }}</td>
                    <td style="width: 20%;">{{ $b->harga }}</td>
                    <td>{{ $b->stock }}</td>
                    <td style="width: 20%;"><img src="{{ URL::to('/') }}/images/{{ $b->picture }}" width="70px" alt=""> </td>
                    <td style="width: 20%; text-align: center;">
                        <a href="/barang/edit/{{ $b->id }}" class="btn btn-warning">Edit</a>
                        <a href="/barang/hapus/{{ $b->id }}" onclick="return confirm('Apakah anda yakin anda menghapus data ini?')" class="btn btn-danger">Hapus</a>
                    </td> --}}
                </tr>
                {{-- @endforeach --}}
            </tbody>
        </table>
    </div>
@endsection
