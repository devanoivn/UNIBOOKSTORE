<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Publisher;

class AdminController extends Controller
{
    // Tampilkan daftar buku dan penerbit
    public function index()
    {
        $books = Book::with('publisher')->get();
        $publishers = Publisher::all();
        return view('admin', compact('books', 'publishers'));
    }

    // Tambah data buku
    public function createBook()
    {
        $publishers = Publisher::all();
        return view('book.create', compact('publishers'));
    }

    public function storeBook(Request $request)
    {
        Book::create($request->all());
        return redirect()->route('admin.index')->with('success', 'Buku berhasil ditambahkan');
    }

    // Edit data buku
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $publishers = Publisher::all();
        return view('book.edit', compact('book', 'publishers'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'idbuku' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'judul' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'penerbit_id' => 'required|exists:publishers,id',
        ]);

        // Cari buku berdasarkan ID
        $book = Book::findOrFail($id);

        // Update data
        $book->update([
            'idbuku' => $request->idbuku,
            'kategori' => $request->kategori,
            'judul' => $request->judul,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'penerbit_id' => $request->penerbit_id,
        ]);

        return redirect()->route('admin.index')->with('success', 'Buku berhasil diperbarui!');
    }

    // Hapus data buku
    public function destroyBook($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect()->route('admin.index')->with('success', 'Buku berhasil dihapus');
    }

    // Tambah data penerbit
    public function createPublisher()
    {
  
        return view('publisher.create');
    }

    public function storePublisher(Request $request)
    {
        $request->validate([
            'idpenerbit' => 'required|unique:publishers,idpenerbit',
            'nama' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'telepon' => 'required'
        ]);
    
        Publisher::create([
            'idpenerbit' => $request->idpenerbit,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'telepon' => $request->telepon,
        ]);
    
        return redirect()->route('admin.index')->with('success', 'Penerbit berhasil ditambahkan');
    }
    
    // Edit data penerbit
    public function editPublisher($id)
    {
        $publisher = Publisher::findOrFail($id);
        return view('publisher.edit', compact('publisher'));
    }

    public function updatePublisher(Request $request, $id)
    {
        $publisher = Publisher::findOrFail($id);
        $publisher->update($request->all());
        return redirect()->route('admin.index')->with('success', 'Penerbit berhasil diperbarui');
    }

    // Hapus data penerbit
    public function destroyPublisher($id)
    {
        $publisher = Publisher::findOrFail($id);
        $publisher->delete();
        return redirect()->route('admin.index')->with('success', 'Penerbit berhasil dihapus');
    }

}
