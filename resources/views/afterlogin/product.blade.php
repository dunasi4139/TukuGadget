@extends('afterlogin.template')
@section('title','Product - Tuku Gadget')
@section('content')

<div class="search-bar-product">
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

    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Products</h2>
                    </div>
                </div>

                @if(isset ($dataCari))
                @foreach ($dataCari as $item)
                <div class="col-md-4">
                    <div class="product-item">
                        <a href="{{ route('detail' , ['id'=>$item->id]) }}"><img src="{{ url ('assets/images/barang/'.$item->gambar)}}" alt=""></a>
                        <div class="down-content">
                            <a href="{{ route('detail' , ['id'=>$item->id]) }}">
                                <h4>{{ $item->nama }}</h4>
                            </a>
                            <strong>Rp. {{ number_format($item->harga) }}</strong>
                            <p>{{ Str::limit($item->deskripsi, 100) }}</p>
                        </div>
                    </div>
                </div>
                {{ $dataCari->links() }}
                @endforeach

                @else
                @foreach ($produk as $item)
                <div class="col-md-4">
                    <div class="product-item">
                        <a href="{{ route('detail' , ['id'=>$item->id]) }}"><img src="{{ url ('assets/images/barang/'.$item->gambar)}}" alt=""></a>
                        <div class="down-content">
                            <a href="{{ route('detail' , ['id'=>$item->id]) }}">
                                <h4>{{ $item->nama }}</h4>
                            </a>
                            <br>
                            <strong>Rp. {{ number_format($item->harga) }}</strong>
                            <p>{{ Str::limit($item->deskripsi, 100) }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                

                @endif
            </div>
            
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    @if(isset ($dataCari))
                  <li>{{ $dataCari->links() }}</li>
                  @else 
                  <li>{{ $produk->links() }}</li>
                  @endif
                </ul>
              </nav>
        </div>
    </div>

            @if (session('message'))
                <div class="alert alert-danger" role="alert" style="padding: 5px; font-size: 400px;">
                    {{ session('message') }}
                </div>
            @endif
                

@endsection
