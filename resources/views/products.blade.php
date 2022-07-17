@extends('layouts.app')

@section('content')
<script>
    $(document).ready(function () {
        $(".main-nav").addClass("bg-light navbar-light shadow").removeClass("navbar-dark");
        $('.btn-nav').removeClass("btn-outline-light").addClass("btn-outline-secondary");
        $('#logo-brand').attr('src', '{{ asset("img/logo-dark.png") }}');
    });
</script>

<div class="container-fluid mb-5 breadcrumbs">
    <div class="container pl-1">
        <h3 class="mb-0 py-5"><strong>{{ Breadcrumbs::render('products') }}</strong></h3>
    </div>
</div>

<div class="container">
    <div class="row align-items-center justify-content-center mb-3">
        <div class="col-lg-8 col-md-7 search-input">
            <form autocomplete="off" method="GET" action="/product" class="input-group shadow-sm">
                <input id="keyword" type="text" name="search-products" class="form-control py-2" placeholder="Cari Produk, Judul Buku, Penulis, Genre" aria-label="Cari Produk, Judul Buku, Penulis, Genre" aria-describedby="button-addon2">
                <button class="btn btn-outline btn-search" type="submit" id="button-addon2"><i class="bi bi-search fs-5"></i></button>
            </form>
            <ul id="result" class="dropdown-menu shadow-sm" style="border-radius: 0 0 0.25rem 0.25rem; border-top: transparent;">
            </ul>
        </div>
        <div class="col-lg-2 col-md-3">
            <a href="/product" class="btn btn-src px-4 py-2 shadow-sm" style="min-width: 161.45px">
                Reset Pencarian
            </a>
        </div>
    </div>
    <br>
    <section class="card-deck row justify-content-center">
        @foreach ($books as $book)
            <a href="/product/{{ $book->id }}" class="product-card shadow text-decoration-none col-3 m-3">
                <header class="catalog-card-header" style="overflow: hidden; white-space: nowrap;">
                    <div class="mx-auto text-center">
                        <img src="{{ $book->cover }}" class="img-fluid mx-1 my-3 px-0" style="height: 300px">
                    </div>
                    <p class="mb-1">{{ $book->pengarang }}</p>
                    <h2>{{ $book->judul }}</h2>
                    <h6 class="fs-5 pe-5 fw-bold" style="display: inline-block;">
                        Rp {{ number_format($book->harga,2,",",".") }}
                    </h6>
                </header>
            </a>
        @endforeach
    </section>
    <br>
    <div class="container px-0" style="max-width: 1200px">
        {{ $books->links('vendor.pagination.bootstrap-5') }}
    </div>
</div>
<br>
@endsection