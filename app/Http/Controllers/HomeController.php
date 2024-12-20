<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use App\Models\Artikel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function donationStore(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'totaldonasis' => 'required|integer|min:1',
            'tipedonasis' => 'required|string|in:Domestic,International',
        ]);

        $totaldonasis = $request->manualdonasi ? $request->manualdonasi : $request->totaldonasis;

        Donasi::create([
            'nama' => $request->input('nama'),
            'totaldonasis' => $totaldonasis,
            'tipedonasis' => $request->input('tipedonasis'),
        ]);

        return redirect()->back()->with('success', 'Donasi berhasil disimpan!');
    }

    public function showArtikel($id)
    {
        $artikel = Artikel::findOrFail($id);
        // dd($artikel);
        return view('showArtikel', data: compact('artikel'));
    }

    public function index()
    {

        $totalDomestic = Donasi::where('tipedonasis', 'Domestic')->sum('totaldonasis');
        $totalInternational = Donasi::where('tipedonasis', 'International')->sum('totaldonasis');
        $totalDonation = Donasi::selectRaw('tipedonasis,SUM(totaldonasis) as total_ammount')->groupBy('tipedonasis')->get();

        $artikels = Artikel::latest()->paginate(3);

        return view('Home', data: compact('totalDomestic', 'totalInternational', 'totalDonation', 'artikels'));
    }
}
