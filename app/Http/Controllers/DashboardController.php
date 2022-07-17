<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    function index()
    {
        return view('dashboard.index', [
            'books' => Book::count(),
            'users' => User::count()
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
