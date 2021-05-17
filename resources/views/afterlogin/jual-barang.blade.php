@extends('afterlogin.template')
@section('content')

<body class="jualbarang-page">
    <div class="jualbarang-wrap">
        <div class="jualbarang-html">
            <form class="jualbarang-form" method="POST" action="">
                @csrf
                <h1>Jual Barang</h1>
                <br>
                <div class="jualbarang-form">
                    <div class="jual-htm">

                        <div class="group">
                            <label for="namabarang" class="label">NAMA BARANG</label>
                            <input id="namabarang" type="text" class="input" name="namabarang">
                        </div>
                        <div class="group">
                            <label for="checkbox" class="label">JENIS BARANG</label>
                            <select name="jenisbarang" id="jenisbarang" class="input">
                                <option class="input" value="komputer">Komputer</option>
                                <option class="input" value="handphone">Handphone</option>
                                <option class="input" value="laptop">Laptop</option>
                                <option class="input" value="komponenPC">Komponen PC</option>
                                <option class="input" value="elektronik">Elektronik Lainnya</option>
                            </select>
                        </div>
                        <div class="group">
                            <label for="hargabarang" class="label">HARGA BARANG</label>
                            <input id="hargabarang" type="text" class="input" name="hargabarang">
                        </div>
                        <div class="group">
                            <label for="alamat" class="label">ALAMAT</label>
                            <textarea name="alamatbarang" id="alamat" class="input" cols="30" rows="10"></textarea>
                        </div>
                        <div class="group">
                            <label for="deskripsibarang" class="label">DESKRIPSI BARANG</label>
                            <textarea name="deskripsibarang" id="deskripsibarang" class="input" cols="30" rows="10"></textarea>
                        </div>
                        <div class="group">
                            <label for="fotobarang" class="label">Foto Barang</label>
                            <input type="file" name="fotobarang" id="fotobarang" class="input">
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="jual">
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
@endsection