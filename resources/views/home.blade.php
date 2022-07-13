@extends('layouts.app')

@section('content')

<div class="hero">
    <div class="container hero-text">
        <div class="row">
            <div class="col-5">
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
            <div class="col-7">
                <img src="{{ asset('img/book-hero.png') }}" style="max-width: 800px">
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" id="catalog">
    <h1 class="text-center fw-bold">Katalog Kami</h2>
    <section class="catalog-card-list">
        @foreach ($books as $book)
            <a href="/product/{{ $book->id }}" class="catalog-card shadow text-decoration-none">
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
</div>

@endsection
