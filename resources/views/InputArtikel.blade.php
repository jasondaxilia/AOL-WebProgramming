@extends('layout')

@section('container')
    <style>

    </style>
    <div class="container text-start">

        <h1>Create Article</h1>

        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        {{-- action="{{ route('articles.store') }}" --}}

        <form method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="judulArtikel">Judul Artikel:</label>
                <input type="text" name="judulArtikel" id="judulArtikel" required>
            </div>
            <div class="form-group">
                <label for="namaPenulisArtikel">Nama Penulis Artikel:</label>
                <input type="text" name="namaPenulisArtikel" id="namaPenulisArtikel" required>
            </div>
            <div class="form-group">
                <label for="tglArtikel">Tanggal Artikel:</label>
                <input type="date" name="tglArtikel" id="tglArtikel" required>
            </div>
            <div class="form-group">
                <label for="isiArtikel">Isi Artikel:</label>
                <textarea name="isiArtikel" id="isiArtikel" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="artikelImagePath">Upload Gambar Artikel:</label>
                <input type="file" name="artikelImagePath" id="artikelImagePath" accept="image/*">
            </div>
            <button type="submit">Submit</button>
        </form>

    </div>
@endsection
