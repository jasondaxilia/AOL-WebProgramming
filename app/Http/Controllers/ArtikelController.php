<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function store()
    {
        $data = [
            'judulArtikel' => 'Sample Article Title',
            'artikelImagePath' => 'path/to/image.jpg',
            'tanggalArtikel' => '2023-10-01',
            'namaPenulisArtikel' => 'John Doe',
            'isiArtikel' => 'This is the content of the article.',
        ];
        Artikel::create($data);
        return response()->json(['message' => 'Data inserted successfully']);
    }
}
