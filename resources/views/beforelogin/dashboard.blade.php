@extends('beforelogin.template')
@section('title','Tuku Gadget')
@section('content')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-01">
            </div>
            <div class="banner-item-02">
            </div>
            <div class="banner-item-03">
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="search-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <form method="GET" action="{{ route('search') }}">
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

    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Latest Products</h2>
                        <a href="{{ route('product') }}">view all products <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                @foreach ($produk as $item)
                <div class="col-md-4">
                    <div class="product-item">
                        <a href="{{ route('detail') }}"><img src="{{ url ('assets/images/barang/'.$item->gambar)}}" alt=""></a>
                        <div class="down-content">
                            <a href="{{ route('detail') }}">
                                <h4>{{ $item->nama }}</h4>
                            </a>
                            <h6>Rp. {{ number_format($item->harga) }}</h6>
                            <p>{{ $item->deskripsi }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
