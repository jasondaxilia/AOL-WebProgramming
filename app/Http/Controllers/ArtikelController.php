<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function insertData()
    {
        $users = [
            [
                'judulArtikel' => 'Hunger numbers stubbornly high for three consecutive years as global crises deepen: UN report',
                'namaPenulisArtikel' => 'Tri Wahyuni',
                'isiArtikel' => 'Forum diskusi global yang diprakarsai Foreign Policy Community of Indonesia (FPCI) kembali mengundang para tokoh dunia dan pakar dari berbagai bidang untuk mendiskusikan isu-isu terkini dunia ',
                'tanggalArtikel' => $this->convertDate('24/July/2024'),
                'artikelImagePath' => 'img/NewsImage/newsImage1.png'
            ],
            [
                'judulArtikel' => 'Tantangan Zero Hunger Demi Berantas Kelaparan',
                'namaPenulisArtikel' => 'Diananda Rahmasari ',
                'isiArtikel' => 'Dalam rangka memperingati Hari Pangan Sedunia yang jatuh pada 16 Oktober lalu, Direktur Eksekutif dari United Nations World Food Programme (WFP) Ertharin Cousin ',
                'tanggalArtikel' => $this->convertDate('4/September/2023'),
                'artikelImagePath' => 'img/NewsImage/newsImage2.png'
            ],
        ];

        DB::table('artikels')->insert($users);
        return "Data inserted successfully!";
    }

    private function convertDate($dateString)
    {
        $months = [
            'Januari' => '01',
            'Februari' => '02',
            'Maret' => '03',
            'April' => '04',
            'Mei' => '05',
            'Juni' => '06',
            'Juli' => '07',
            'Agustus' => '08',
            'September' => '09',
            'Oktober' => '10',
            'November' => '11',
            'Desember' => '12'
        ];

        list($day, $monthName, $year) = explode('/', $dateString);

        $month = isset($months[$monthName]) ? $months[$monthName] : '00';

        return "{$year}-{$month}-{$day}";
    }
}
