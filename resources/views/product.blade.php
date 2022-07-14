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

    <div style="display:flex; width: 70%; margin: auto; margin-top: 100px; margin-bottom: 100px;">
        <div style="display: flex; width:250px; height: 370px; margin-top: auto; margin-bottom: auto; margin-right: 20px;">
            <img class="imgcol cover-img-shadow" src="{{ $book->cover }}" style="display: flex; width:250px; height: 370px;">
        </div>
        <div style="padding-left: 40px">
            <p class="text" style="color: #212529; padding-top: 8px;">{{ $book->pengarang }}</p>
            <h1 style="font-weight: bold; font-size: 38px;">{{ $book->judul }}</h1>
            <hr
                style="background-color: crimson; width: 25%;  border: none; height: 3px; position: relative; display: inline-block;">
            <p class="text" style="color: #93a6ab; font-size: 14px; margin-bottom: 20px;">
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
