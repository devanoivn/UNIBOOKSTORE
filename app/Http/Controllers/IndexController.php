<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Publisher;


class IndexController extends Controller
{
    
    public function index(Request $request)
    {
        $query = Book::with('publisher');

        if ($request->has('cari') && $request->cari != '') {
            $query->where('judul', 'like', '%' . $request->cari . '%');
        }

        $books = $query->get();
        $publishers = Publisher::all();

        return view('index', compact('books', 'publishers'));
    }

}
