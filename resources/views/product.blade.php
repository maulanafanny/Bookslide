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
        <h3 class="mb-0 py-5"><strong>{{ Breadcrumbs::render('product', $book) }}</strong></h3>
    </div>
</div>

<div class="row justify-content-center container align-items-center" style="margin: 100px auto;">
    <div class="col-lg-3 col-sm-12 col-md-5 text-center product-cover">
        <img class="shadow img-fluid" src="{{ $book->cover }}">
    </div>
    <div class="col-lg-8 col-sm-12 col-md-7">
        <p class="" style="color: #212529;">{{ $book->pengarang }}</p>
        <h1 class="fw-bold" style="font-size: 38px;">{{ $book->judul }}</h1>
        <hr style="background-color: crimson; width: 25%;  border: none; height: 3px; position: relative; display: inline-block;">
        <p style="color: #93a6ab; font-size: 14px; margin-bottom: 20px;">
            {{ $book->deskripsi }}
        </p>
        <div>
            <h6 class="fs-5 pe-5 fw-bold" style="display: inline-block;">
                Rp {{ number_format($book->harga,2,",",".") }}
            </h6>
            <a href="#" class="btn btn-grd px-4 py-2 shadow-sm my-auto me-3">
                <i class="bi bi-cart-check-fill"></i>
            </a>
            <a href="#" class="btn btn-grd px-4 py-2 shadow-sm my-auto">
                <i class="bi bi-bookmark-heart-fill"></i>
            </a>
        </div>
    </div>
</div>
@endsection
