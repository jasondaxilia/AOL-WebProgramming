@extends('layoutArtikel')



@section('container')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <div style=""></div>
    <div class="card d-block mx-auto mt-4" style="color: black; width: 65%">
        <div class="container p-5">
            <div class="card-title">
                <h1>{{ $artikel->judulArtikel }}</h1>
                <p>{{ $artikel->namaPenulisArtikel }} | {{ $artikel->tanggalArtikel }}</p>
            </div>
            <img class="card-img rounded-4 text-center" src="{{ asset('img/NewsImage/' . $artikel->artikelImagePath) }}"
                alt="" style="width: 65% ">
            <div class="mt-4">
                <p>{{ $artikel->isiArtikel }}</p>
            </div>
            <a id="findMore" href="{{ url()->previous() }}" class="btn">Back To Home</a>
        </div>
    </div>
@endsection
