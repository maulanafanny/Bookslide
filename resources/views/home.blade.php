@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container-fluid">
    <h2 class="text-center fw-bold">Katalog Kami</h2>
    <section class="catalog-card-list">
        <a href="#" class="catalog-card shadow text-decoration-none">
            <header class="catalog-card-header">
                <p>14 Juni 2022</p>
                <h2>Card Tricks, Fanny Maulana Rizky</h2>
            </header>
        </a>
        
        <a href="#" class="catalog-card shadow text-decoration-none">
            <header class="catalog-card-header">
                <p>14 Juni 2022</p>
                <h2>Card Tricks, Fanny Maulana Rizky</h2>
            </header>
        </a>
        
        <a href="#" class="catalog-card shadow text-decoration-none">
            <header class="catalog-card-header">
                <p>14 Juni 2022</p>
                <h2>Card Tricks, Fanny Maulana Rizky</h2>
            </header>
        </a>

        <a href="#" class="catalog-card shadow text-decoration-none">
            <header class="catalog-card-header">
                <p>14 Juni 2022</p>
                <h2>Card Tricks, Fanny Maulana Rizky</h2>
            </header>
        </a>
        
        <a href="#" class="catalog-card shadow text-decoration-none">
            <header class="catalog-card-header">
                <p>14 Juni 2022</p>
                <h2>Card Tricks, Fanny Maulana Rizky</h2>
            </header>
        </a>
        
        <a href="#" class="catalog-card shadow text-decoration-none">
            <header class="catalog-card-header">
                <p>14 Juni 2022</p>
                <h2>Card Tricks, Fanny Maulana Rizky</h2>
            </header>
        </a>
    </section>
</div>
@endsection
