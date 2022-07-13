@extends('layouts.app')

@section('content')
<script>
    $(document).ready(function () {
        $("nav").addClass("bg-light navbar-light shadow").removeClass("navbar-dark");
        $('.btn-nav').removeClass("btn-outline-light").addClass("btn-outline-secondary");
        $('#logo-brand').attr('src', '{{ asset("img/logo-dark.png") }}');
    });
</script>

<div class="container-fluid mb-5 breadcrumbs">
    <div class="container pl-1">
        <h3 class="mb-0 py-5"><strong>List Produk</strong></h3>
    </div>
</div>

{{-- <div class="container mb-5">
    <div class="row">
        <div class="col-md-auto px-0">
            <button class="btn btn-danger p-3 shadow" style="border-radius: 10px 0 0 10px">Semua Acara</button>
        </div>
        <div class="col-md-auto px-0">
            <button class="btn btn-light p-3 shadow" style="border-radius: 0 10px 10px 0">Acara Mendatang</button>
        </div>
    </div>
</div> --}}

<!-- Cards -->
<div class="container">
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
    {{-- <div class="container px-0">
        {{ $books->links() }}
    </div> --}}
</div>

@endsection