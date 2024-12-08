<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class artikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Artikel::create([
            'artikelImagePath' => 'path/to/image.jpg',
            'tanggalArtikel' => '2023-10-01',
            'isiArtikel' => 'This is the content of the article.',
            'namaPenulisArtikel' => 'John Doe',
            'judulArtikel' => 'Sample Article Title',
        ]);
    }
}
