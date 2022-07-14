@extends('dashboard.dashboard')

@section('content')

@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show shadow" role="alert">
    {{ session()->get('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="container-fluid">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Daftar Buku</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="/dashboard/book/create" class="btn btn-sm btn-outline-success">Tambah Data Baru</a>
        </div>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Pengarang</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Genre</th>
                <th scope="col">Harga</th>
                <th scope="col" style="min-width: 130px"></th>
            </tr>
        </thead>
        <tbody>
            @php $i = 1; @endphp
            @foreach ($books as $book)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $book->judul }}</td>
                <td>{{ $book->pengarang }}</td>
                <td>{{ $book->penerbit }}</td>
                <td>{{ $book->genre }}</td>
                <td>{{ number_format($book->harga) }}</td>
                <td class="text-center">
                    <a href="/dashboard/book/{{ $book->id }}" class="btn btn-sm btn-primary">
                        <i class="bi bi-eye"></i>
                    </a>
                    <a href="/dashboard/book/{{ $book->id }}/edit" class="btn btn-sm btn-warning">
                        <i class="bi bi-pen"></i>
                    </a>
                    <form class="d-inline" action="{{ route('book.destroy', $book->id) }}" method="POST">
                        @method('delete')
                        @csrf
                        <button class="btn btn-sm btn-danger m-1" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
</div>
@endsection