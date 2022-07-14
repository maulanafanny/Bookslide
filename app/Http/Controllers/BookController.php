<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    function show($id)
    {
        return view('product', [
            'book' => Book::find($id),
            'route' => Book::find($id)->judul
        ]);
    }

    function product()
    {
        return view('products', [
            'books' => Book::paginate(4),
            'route' => 'Produk'
        ]);
    }
}
