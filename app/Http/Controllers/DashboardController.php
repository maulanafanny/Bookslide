<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    function index()
    {
        if (Auth::guest()) {
            return view('auth.login');
        }

        return view('dashboard.index', [
            'books' => Book::all()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('dashboard.event', [
			'books' => $book
		]);
    }
}
