<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donasi;
use App\Models\Artikel;

class HomeController extends Controller
{
    // untuk masukin artikel, tidak dipake karena lebih memilih untuk masukin artikel dari seeder manual
    // public function artikelStore()
    // {
    //     $data = [
    //         'judulArtikel' => 'Sample Article Title',
    //         'artikelImagePath' => 'path/to/image.jpg',
    //         'tanggalArtikel' => '2023-10-01',
    //         'namaPenulisArtikel' => 'John Doe',
    //         'isiArtikel' => 'This is the content of the article.',
    //     ];
    //     Artikel::create($data);
    //     return response()->json(['message' => 'Data inserted successfully']);
    // }

    // untuk masukin donasi
    public function donationStore(Request $request)
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

    //untuk view Home agar semuanya bisa tampil
    public function index()
    {
        //untuk menampilkan 
        $totalDomestic = Donasi::where('tipedonasis', 'Domestic')->sum('totaldonasis');
        $totalInternational = Donasi::where('tipedonasis', 'International')->sum('totaldonasis');
        $totalDonation = Donasi::selectRaw('tipedonasis,SUM(totaldonasis) as total_ammount')->groupBy('tipedonasis')->get();

        //untuk menampilkan artikel
        $artikels = Artikel::latest()->paginate(3);

        return view('Home', compact('totalDomestic', 'totalInternational', 'totalDonation', 'artikels'));
    }
}
