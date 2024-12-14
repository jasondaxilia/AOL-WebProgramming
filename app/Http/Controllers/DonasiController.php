<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'nama' => 'required|string|max:255',
            'totaldonasis' => 'required|integer|min:1',
            'tipedonasis' => 'required|string|in:Domestic,International',
        ]);
        
        $totaldonasis = $request->manualdonasi ? $request->manualdonasi : $request->totaldonasis;

        // Simpan data ke database
        Donasi::create([
            'nama' => $request->input('nama'),
            'totaldonasis' => $totaldonasis,
            'tipedonasis' => $request->input('tipedonasis'),
        ]);

        return redirect()->back()->with('success', 'Donasi berhasil disimpan!');
    }
}
