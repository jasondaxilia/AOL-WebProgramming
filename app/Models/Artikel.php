<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Artikel extends Model
{
    //
    use HasFactory, HasApiTokens;
    protected $primarykey = 'id';
    protected $fillable = ['judulArtikel', 'namaPenulisArtikel', 'isiArtikel', 'tanggalArtikel', 'artikelImagePath'];

}
