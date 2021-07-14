<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>GGM Onetune Interior</title>
</head>
<body>
    <header>
        <div class="jumbotron text-center" style="margin-bottom:0">
            <h1>GGM INTERIOR CREATIVITY</h1>
            <p>solusinya interior</p>
        </div>
        <nav class="nav justify-content-end navbar-expand-sm bg-dark navbar-dark">
            <a href="#" class="navbar-brand" data-toggle="modal" data-target="#exampleModal">Registrasi</a>
            <a class="navbar-brand" href="{{ route('login1') }}">Login</a>
            <a class="navbar-brand" href="{{ route('logout') }}">Logout</a>
        </nav>
		{{-- <h2>GGM INTERIOR CREATIVITY</h2>
		<nav>
			<a href="/user ">User</a>
			|
			<a href="/barang">Barang<a>
            |
            <a href="/transaksi">Transaksi<a>
		</nav> --}}
	</header>
    <hr/>
    {{-- bagian judul halaman  --}}
    <h3>@yield('judul_halaman')</h3>

    {{-- bagian konten --}}
    @yield('konten')
    <br/>
    <hr/>

    <footer>
        <p style="text-align: center">&copy; <a href="https://www.ggminterior.com">www.ggminterior.com</a>. 2020 - 2021</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    {{-- Modal --}}
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
                    <form action="/store" method="POST" enctype="multipart/form-data">
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

</body>
</html>


