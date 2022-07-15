@extends('dashboard.dashboard')

@section('content')
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
        </div>
    </div>
</div>
@endsection
