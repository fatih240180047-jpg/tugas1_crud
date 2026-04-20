<?php

namespace App\Http\Controllers;

use App\Models\Buku; // PENTING: Panggil model Buku di sini
use Illuminate\Http\Request;

class BukuController extends Controller
{
    // 1. Menampilkan semua buku
    public function index() {
        $data_buku = Buku::all(); 
        return view('buku.index', compact('data_buku'));
    }

    // 2. Menyimpan buku baru
    public function store(Request $request) {
        Buku::create($request->all());
        return redirect()->route('buku.index');
    }

    // 3. Menghapus buku
    public function destroy($id) {
        $buku = Buku::find($id);
        $buku->delete();
        return redirect()->route('buku.index');
    }

    // 4. Menampilkan halaman form tambah
    public function create() {
        return view('buku.create');
    }

    // 5. Menampilkan halaman form edit
    public function edit($id) {
        $buku = Buku::find($id);
        return view('buku.edit', compact('buku'));
    }

    // 6. Menyimpan perubahan data (Update)
    public function update(Request $request, $id) {
        $buku = Buku::find($id);
        $buku->update($request->all());
        return redirect()->route('buku.index');
    }
}