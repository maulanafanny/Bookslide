@extends('layouts.app')

@section('content')

<div class="hero">
    <div class="container hero-text" style="max-width: 1150px">
        <div class="row">
            <div class="col-lg-5 col-sm-12">
                <h1 style="line-height: 50px">
                    Selamat Datang di Bookslide <br>
                    Brand New & Used
                </h1>
                <p class="hero-text-small mt-4">
                    Order buku baru maupun bekas hanya di Bookslide,
                    Online Bookstore termurah dan terlengkap di Indonesia.
                    Kami menyediakan buku yang terbaik hanya untuk Anda.
                </p>
                <a href="#catalog" class="btn btn-grd px-4 py-2 mt-3 shadow-sm">
                    Katalog Kami
                </a>
            </div>
            <img class="col-7 p-0 ps-5 mt-5 d-none d-lg-block hero-book" src="{{ asset('img/book-hero.png') }}">
        </div>
    </div>
</div>

<br>
<br>
<br>

<div class="container">
    <h1 class="text-center fw-bold">Mengapa Memilih Bookslide?</h1>
    <br><br>
    <div class="row justify-content-center">
        <div class="col-lg-3 col-sm-12 col-md-12 mb-3 offers-section">
            <h3 class="fw-semibold mb-4"><i class="bi bi-truck me-3 fs-3"></i>Pengiriman Gratis</h3>
            <p class="hero-text-small" style="color: black">
                Bookslide menawarkan pengiriman gratis ke seluruh wilayah
                Indonesia, yang memungkinkan Anda untuk membeli buku dari 
                kami meskipun Anda tinggal jauh dari kantor pusat kami. 
                Proses pengiriman cepat dan aman.
            </p>
        </div>
        <div class="col-lg-3 col-sm-12 col-md-12 mb-3 offers-section">
            <h3 class="fw-semibold mb-4"><i class="bi bi-tags me-3 fs-3"></i>Diskon & Promo</h3>
            <p class="hero-text-small" style="color: black">
                Dapatkan penawaran menarik dan promo terbatas dari kami.
                Klien reguler Bookslide mendapat keuntungan dari potongan
                harga beli buku dan diskon untuk buku baru dari katalog kami, 
                yang diperbarui setiap hari.
            </p>
        </div>
        <div class="col-lg-3 col-sm-12 col-md-12 mb-3">
            <h3 class="fw-semibold mb-4"><i class="bi bi-patch-check me-3 fs-3"></i></i>Kepuasan Terjamin</h3>
            <p class="hero-text-small" style="color: black">
                Kami berharap Anda menyukai layanan pembelian buku kami. Tim 
                kami berusaha semaksimal mungkin untuk menawarkan kepada Anda 
                pengalaman pembelian buku yang mudah dan menyenangkan kapan saja 
                sepanjang tahun.
            </p>
        </div>
    </div>
</div>

<br>
<br>
<br>
<br>
<br>

<div style="background-color: #f6f6f6; padding: 100px 0;">

<div class="container-fluid text-center" id="catalog">
    <h1 class="text-center fw-bold">Katalog Kami</h1>
    <br>
    <section class="catalog-card-list">
        @foreach ($books as $book)
            <a href="/product/{{ $book->id }}" class="catalog-card text-start shadow text-decoration-none">
                <header class="catalog-card-header"  style="overflow: hidden">
                    <div class="mx-auto text-center">
                        <img src="{{ $book->cover }}" class="img-fluid p-3" style="height: 350px">
                    </div>
                    <p class="mb-1">{{ $book->pengarang }}</p>
                    <h2>{{ $book->judul }}</h2>
                </header>
            </a>
        @endforeach
    </section>
    <br>
    <a href="/product" class="btn btn-grd px-4 py-2 shadow">
        Lihat Selengkapnya
    </a>
</div>

</div>

@endsection
