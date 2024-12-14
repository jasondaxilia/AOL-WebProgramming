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
            'artikelImagePath' => 'newsImage2.png',
            'tanggalArtikel' => '2023-10-10',
            'isiArtikel' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque modi ipsam deserunt. Voluptas rem numquam, animi, dolore officia dicta delectus iste similique ratione doloribus, ea ducimus minus facilis neque soluta?',
            'namaPenulisArtikel' => 'Jane Doe',
            'judulArtikel' => 'Teknologi Pertanian di Asia Selatan: Solusi untuk Ketahanan Pangan',
        ]);
    }
}
