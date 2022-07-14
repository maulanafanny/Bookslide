@extends('dashboard.dashboard')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data Buku</h1>
    </div>
    <div class="container mb-5" style="height: auto">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header">{{ __('Form Data Buku') }}</div>

                    <div class="card-body">
                        <form method="POST" action="/dashboard/book/{{ $book->id }}">
                            @method('PUT')
                            @csrf

                            <div class="row mb-3">
                                <label for="judul" class="col-md-4 col-form-label text-md-end">{{ __('Judul') }}</label>
                                <div class="col-md-6">
                                    <input id="judul" value="{{ $book->judul }}" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" required autocomplete="judul" autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="pengarang" class="col-md-4 col-form-label text-md-end">{{ __('Pengarang') }}</label>
                                <div class="col-md-6">
                                    <input id="pengarang" value="{{ $book->pengarang }}" type="text" class="form-control @error('pengarang') is-invalid @enderror" name="pengarang" value="{{ old('pengarang') }}" required autocomplete="pengarang" autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="penerbit" class="col-md-4 col-form-label text-md-end">{{ __('Penerbit') }}</label>
                                <div class="col-md-6">
                                    <input id="penerbit" value="{{ $book->penerbit }}" type="text" class="form-control @error('penerbit') is-invalid @enderror" name="penerbit" value="{{ old('penerbit') }}" required autocomplete="penerbit" autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="genre" class="col-md-4 col-form-label text-md-end">{{ __('Genre') }}</label>
                                <div class="col-md-6">
                                    <input id="genre" value="{{ $book->genre }}" type="text" class="form-control @error('genre') is-invalid @enderror" name="genre" value="{{ old('genre') }}" required autocomplete="genre" autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="deskripsi" class="col-md-4 col-form-label text-md-end">{{ __('Deskripsi') }}</label>
                                <div class="col-md-6">
                                    <textarea id="deskripsi" type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ old('deskripsi') }}" required autocomplete="deskripsi" autofocus>{{ $book->deskripsi }}</textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="cover" class="col-md-4 col-form-label text-md-end">{{ __('Cover') }}</label>
                                <div class="col-md-6">
                                    <input id="cover" type="text" value="{{ $book->cover }}" class="form-control @error('cover') is-invalid @enderror" name="cover" value="{{ old('cover') }}" required autocomplete="cover" autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="harga" class="col-md-4 col-form-label text-md-end">{{ __('Harga') }}</label>
                                <div class="col-md-6">
                                    <input id="harga" type="text" value="{{ $book->harga }}" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga') }}" required autocomplete="harga" autofocus>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Simpan') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection