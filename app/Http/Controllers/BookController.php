<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.bookcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'genre' => 'required',
            'deskripsi' => 'required',
            'cover' => 'required',
            'harga' => 'required'
        ]);

        Book::create($validatedData);
        return redirect('/dashboard/books')->with('success', 'Berhasil menambahkan data buku baru!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('dashboard.bookview', [
			'book' => $book
		]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.bookedit', [
            'book' => Book::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'genre' => 'required',
            'deskripsi' => 'required',
            'cover' => 'required',
            'harga' => 'required'
        ]);

        Book::where('id', $id)->update($validatedData);

        return redirect('/dashboard/books')->with('success', 'Berhasil mengubah data buku!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::destroy($id);
        return redirect('/dashboard/books')->with('success', 'Berhasil menghapus data buku!');
    }
    
    function product(Book $books)
    {
        return view('products', [
            'books' => $books->filter()->paginate(12)->withQueryString(),
            'route' => 'Produk'
        ]);
    }

    function single($id)
    {
        $book = Book::find($id);
        
        return view('product', [
            'book' => $book,
            'route' => $book->judul,
            'books' => Book::relatedProducts($book)->take(4)->get()
        ]);
    }

}
