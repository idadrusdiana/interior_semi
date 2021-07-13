@extends('admin.layouts.master')

@section('judul-halaman', 'Halaman Barang')

@section('konten')
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center">
            <strong>EDIT DATA BARANG</strong>
        </div>
        <div class="card-body">
            <a href="/barang" class="btn btn-primary">Kembali</a>
            <br/>
            <br/>

            <form method="post" action="/barang/update/{{ $barang->id }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{-- {{ method_field('PUT') }} --}}
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ $barang->name }}">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" name="harga" id="harga" class="form-control" value="{{ $barang->harga }}">
                    @if($errors->has('harga'))
                        <div class="text-danger">
                            {{ $errors->first('harga')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Stock</label>
                    <input type="number" name="stock" id="stock" class="form-control" value="{{ $barang->stock }}">
                    @if($errors->has('stock'))
                        <div class="text-danger">
                            {{ $errors->first('stock')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Picture</label> <br>
                    <input type="file" class="form-control-file" name="picture" id="picture"><br>
                    <img src="{{ URL::to('/') }}/images/{{ $barang->picture }}" width="200px" alt="">
                    <input type="hidden" class="form-control-file" id="hidden_image" name="hidden_image" value="{{ $barang->picture }}">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
