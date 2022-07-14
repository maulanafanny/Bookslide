<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        return view('dashboard.dashboard', [
            'books' => Book::all()
        ]);
    }
}
