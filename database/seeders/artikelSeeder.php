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
            'isiArtikel' => 'Asia Selatan menghadapi tantangan besar dalam mencukupi kebutuhan pangan bagi populasinya yang besar. Perubahan iklim, polusi tanah, dan keterbatasan sumber daya air menjadi ancaman serius bagi sektor pertanian. Banyak petani kecil di wilayah ini masih menggunakan metode tradisional yang tidak efisien, sehingga hasil panen sering kali rendah.

Namun, teknologi modern menawarkan solusi untuk meningkatkan produktivitas. Misalnya, di India, drone digunakan untuk memantau kondisi tanaman secara real-time, memungkinkan petani mengidentifikasi penyakit lebih awal. Di Bangladesh, sensor tanah membantu mengoptimalkan penggunaan air untuk irigasi, mengurangi pemborosan dan meningkatkan hasil panen. Teknologi ini tidak hanya meningkatkan produktivitas tetapi juga mengurangi risiko kerugian akibat faktor lingkungan.

Selain itu, program pemerintah seperti *Pradhan Mantri Fasal Bima Yojana* memberikan perlindungan asuransi bagi petani terhadap kerugian panen akibat bencana alam. Hal ini memberikan stabilitas ekonomi dan mendorong adopsi teknologi baru. Dengan kombinasi inovasi teknologi dan dukungan kebijakan, Asia Selatan dapat memperkuat ketahanan pangannya.',
            'namaPenulisArtikel' => 'Jane Doe',
            'judulArtikel' => 'Teknologi Pertanian di Asia Selatan: Solusi untuk Ketahanan Pangan',
        ]);
    }
}
