@extends('beforelogin.template')
@section('title','Tuku Gadget')
@section('content')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-01">
                <div class="text-content">
                    <h4>Best Offer</h4>
                    <h2>New Arrivals On Sale</h2>
                </div>
            </div>
            <div class="banner-item-02">
                <div class="text-content">
                    <h4>Flash Deals</h4>
                    <h2>Get your best products</h2>
                </div>
            </div>
            <div class="banner-item-03">
                <div class="text-content">
                    <h4>Last Minute</h4>
                    <h2>Grab last minute deals</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="search-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <form>
                        <div class="input-group">
                            <input type="search" name="searchbar" id="searchbar" class="form-control" placeholder="Search Product..">
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
                        <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                @foreach ($produk as $item)
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
            </div>
        </div>
    </div>
@endsection
