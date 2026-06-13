<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class SatwaController extends Controller
{
    public function index(Request $request)
{
    // Mengambil data 'jenis' dari URL: ?jenis=darat
    $habitat = $request->query('habitat');

    // Cek: Jika ada filter jenis, ambil data spesifik. Jika tidak, ambil semua.
    if ($habitat) {
        $dataSatwa = Animal::where('habitat', $habitat)->get();
    } else {
        $dataSatwa = Animal::all();
    }

    // Kirim data ke View 'satwa.blade.php'
    return view('satwa', compact('dataSatwa'));
    
}
public function show($id)
{
    // Mencari data satwa berdasarkan ID, jika tidak ketemu akan muncul 404
    $animal = \App\Models\Animal::findOrFail($id);

    return view('satwa_detail', compact('animal'));
}
}