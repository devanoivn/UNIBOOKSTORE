<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class PengadaanController extends Controller
{
    public function index()
    {
        // Dapatkan nilai stok minimum dari seluruh buku
        $minStok = Book::min('stok');
        $books = Book::with('publisher')->where('stok', $minStok)->get();

        return view('pengadaan', compact('books'));
    }
}
