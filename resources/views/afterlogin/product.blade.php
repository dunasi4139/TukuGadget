@extends('afterlogin.template')
@section('title','Search - Tuku Gadget')
@section('content')

    @if(isset ($dataCari))
                @foreach ($dataCari as $item)
                <div class="col-md-4">
                    <div class="product-item">
                        <a href="#"><img src="{{ url ('assets/images/barang/'.$item->gambar)}}" alt=""></a>
                        <div class="down-content">
                            <a href="#">
                                <h4>{{ $item->nama }}</h4>
                            </a>
                            <h6>Rp. {{ number_format($item->harga) }}</h6>
                            <p>{{ $item->deskripsi }}</p>
                        </div>
                    </div>
                </div>
                @endforeach

                <br><br><br><br>
            @endif
                @if (session('message'))
                <div class="alert alert-danger" role="alert" style="padding: 5px; font-size: 400px;">
                    {{ session('message') }}
                </div>
            @endif
                <div class="search-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 mx-auto">
                                <form method="GET" action="/search">
                                    <div class="input-group">
                                        <input type="search" name="search" id="searchbar" class="form-control" placeholder="Search Product..">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-link"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

@endsection
