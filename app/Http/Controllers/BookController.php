<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    function show($id)
    {
        return view('product', [
            'book' => Book::find($id)
        ]);
    }

    function product()
    {
        return view('products', [
            'books' => Book::all()
        ]);
    }
}
