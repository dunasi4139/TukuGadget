@extends('beforelogin.template')
@section('content')

<body class="jualbarang-page">
    <div class="jualbarang-wrap">
        <div class="jualbarang-html">
            <form class="jualbarang-form" method="POST" action="">
                @csrf
                <h1>Jual Barang</h1>
                <br>
                <div class="jualbarang-form">
                    <div class="jualbarang-html">

                        <div class="group">
                            <label for="user" class="label">NAMA BARANG</label>
                            <input id="user" type="text" class="input" name="namabarang">
                        </div>
                        <div class="group">
                            <label for="checkbox" class="label">JENIS BARANG</label>
                            <input id="check" type="checkbox" class="input" name="jenisbarang">
                        </div>
                        <div class="group">
                            <label for="user" class="label">HARGA BARANG</label>
                            <input id="user" type="text" class="input" name="hargabarang">
                        </div>
                        <div class="group">
                            <label for="user" class="label">ALAMAT</label>
                            <input id="user" type="textarea" class="input" name="alamatbarang">
                        </div>
                        <div class="group">
                            <label for="user" class="label">DESKRIPSI BARANG</label>
                            <input id="user" type="textarea" class="input" name="deskripsibarang">
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="jualbarang">
                        </div>

                    </div>
            </form>
        </div>
    </div>
    </div>
@endsection