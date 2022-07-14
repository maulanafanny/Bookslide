@extends('dashboard.dashboard')

@section('content')
    <div style="display:flex; width: 70%; margin: auto; margin-top: 100px; margin-bottom: 100px;">
        <div style="display: flex; width:250px; height: 370px; margin-top: auto; margin-bottom: auto; margin-right: 20px;">
            <img class="imgcol shadow-lg" src="{{ $book->cover }}" style="display: flex; width:250px; height: 370px;">
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
            </div>
        </div>
    </div>
@endsection
