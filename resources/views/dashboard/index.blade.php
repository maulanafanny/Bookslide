@extends('dashboard.dashboard')

@section('content')
<section class="container-fluid">
    <br>
    <h2>Halaman Admin Bookslide</h2>
    <br>
    <div class="row">
        <div class="col-sm-6 col-lg-3 col-md-6 mt-4">
            <div class="card shadow" style="background-image: linear-gradient(to right top, #ff96a0, #f8808a, #f06973, #e7515c, #dc3545);">
                <div class="card-body p-4">
                    <i class="bi bi-journals dashboard-card-icons bg-danger shadow-sm"></i>
                    <h2>Jumlah Buku</h2>
                    <h1 class="m-0" style="font-size: 60px">{{ $books }}</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 col-md-6 mt-4">
            <div class="card shadow" style="background-image: linear-gradient(to right top, #abb0b6, #9ba1a7, #8b9299, #7b838b, #6c757d);">
                <div class="card-body p-4">
                    <i class="bi bi-person dashboard-card-icons bg-secondary shadow-sm"></i>
                    <h2>Jumlah User</h2>
                    <h1 class="m-0" style="font-size: 60px">{{ $users }}</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 col-md-6 mt-4">
            <div class="card shadow" style="background-image: linear-gradient(to right top, #b0d0ff, #8bb9ff, #67a1ff, #4288ff, #0d6efd);">
                <div class="card-body p-4">
                    <i class="bi bi-currency-exchange dashboard-card-icons bg-primary shadow-sm"></i>
                    <h2>Transaksi</h2>
                    <h1 class="m-0" style="font-size: 60px">35</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 col-md-6 mt-4">
            <div class="card shadow">
                <div class="card-body p-4" style="background-image: linear-gradient(to right top, #90d6b6, #75c29d, #59ae84, #3c9a6c, #198754);">
                    <i class="bi bi-check-circle dashboard-card-icons bg-success shadow-sm"></i>
                    <h2>Total Terjual</h2>
                    <h1 class="m-0" style="font-size: 60px">200</h1>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection