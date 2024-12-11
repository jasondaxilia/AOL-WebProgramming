@php
    use Illuminate\Support\Str;
@endphp

@extends('layout')

@section('container')
    <div class="d-grid" style="margin: 0px;padding: 0px">
        {{-- HeroImage --}}
        <div class="row" style="margin: 0 ; overflow: hidden">
            <img src="{{ asset('img/image1.png') }}" alt="" class=""
                style="margin: 0;padding:0 ; position: relative;">
            <div class=""
                style="color: white;position: absolute; font-size:60px;font-weight: 900; padding:250px 0px 0px 100px">
                A World
            </div>
            <div class=""
                style="color: white;position: absolute; font-size:60px;font-weight: 900; padding:320px 0px 0px 100px">
                Without Hunger
            </div>
            <div style="color: white;position: absolute; font-size:20px; font-weight: 400; padding:405px 0px 0px 100px; ">
                A world without hunger is one where everyone has reliable access
                <br>
                to nutritious and sufficient food, free
                from food insecurity and malnutrition.
                <br>
                It envisions sustainable and equitable food systems that prioritize
                the well-being of all people,
                <br>
                ensuring no one goes hungry while protecting the environment
            </div>
        </div>

        {{-- Info --}}
        <div class="row my-5" style="margin: 0; overflow: hidden;">
            <div class="col d-flex align-items-center justify-content-end py-5"
                style="padding: 0px; font-size: 85px; font-weight: 800;">
                Currently
                <br> Happen in
                <br> Our
                World
            </div>
            <div class="col d-grid align-items-center py-5 gap-3" style="padding: 0; margin-left: 250px">
                <div class="row" style="padding-left: 75px">
                    <div style="font-size: 60px;font-weight: 700">1
                        in 11</div>
                    <div style="font-size: 18px; font-weight: 600">People experience hunger</div>
                </div>
                <div class="row" style="padding-left: 75px">
                    <div style="font-size: 60px;font-weight: 700">733 Million</div>
                    <div style="font-size: 18px; font-weight: 600">People Sleep Hungry Each Night
                    </div>
                </div>
                <div class="row" style="padding-left: 75px">
                    <div style="font-size: 60px;font-weight: 700">130,000</div>
                    <div style="font-size: 18px; font-weight: 600">People in the Horn of Africa are
                        on
                        <br>
                        the brink of death from starvation
                    </div>
                </div>
            </div>
        </div>

        {{-- Donation --}}
        <div class="row py-0 mx-0 justify-content-center" style="background-color: #D3A029; width: 100%; margin: 0;">
            <div class="col col-md-3 m-5 py-5" style="border-radius: 15px; background-color: white">
                <div class="d-grid text-end">
                    <!-- Nominal Options -->
                    <div class="row justify-content-center align-content-center pb-4">
                        <div class="col text-end">
                            <button class="amount-option btn-primary px-4 py-2"
                                style="width: 150px; border-radius: 4px; border-color: #D3A029; border-style: solid">Rp10.000
                            </button>
                        </div>
                        <div class="col text-start">
                            <button class="amount-option btn-primary px-4 py-2"
                                style="width: 150px; border-radius: 4px; border-color: #D3A029; border-style: solid">Rp25.000
                            </button>
                        </div>
                    </div>
                    <div class="row justify-content-center align-content-center pb-4">
                        <div class="col text-end">
                            <button class="amount-option btn-primary px-4 py-2"
                                style="width: 150px; border-radius: 4px; border-color: #D3A029; border-style: solid">Rp50.000
                            </button>
                        </div>
                        <div class="col text-start">
                            <button class="amount-option btn-primary px-4 py-2"
                                style="width: 150px; border-radius: 4px; border-color: #D3A029; border-style: solid">Rp100.000
                            </button>
                        </div>
                    </div>

                    <!-- Input Nominal -->
                    <div class="row justify-content-center">
                        <input class="justify-content-center text-center"
                            style="width: 327px; height: 40px; border-radius: 4px; border-color: #D3A029;border-style: solid"
                            type="text" placeholder="Rp0,00">
                    </div>

                    <!-- Destination Options -->
                    <div class="row justify-content-center align-content-center py-4">
                        <div class="col text-end">
                            <button class="destination-option btn-primary px-4 py-2"
                                style="width: 150px ;border-radius: 4px; border-color: #D3A029;border-style: solid">Domestic
                            </button>
                        </div>
                        <div class="col text-start">
                            <button class="destination-option btn-primary px-4 py-2"
                                style="width: 150px ;border-radius: 4px; border-color: #D3A029;border-style: solid">International
                            </button>
                        </div>
                    </div>

                    <!-- Input Name -->
                    <div class="row justify-content-center">
                        <input class="justify-content-center text-center"
                            style="width: 327px; height: 40px; border-radius: 4px; border-color: #D3A029;border-style: solid"
                            type="text" placeholder="Name">
                    </div>

                    <!-- Donate Button -->
                    <div class="text-center pt-3">
                        <button class="button px-5 py-2"
                            style="color: white; background-color: #D3A029; border-radius: 10px">Donate Now</button>
                        <div style="font-size: 10px">100% of your donation goes to help those in need</div>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-end align-items-center py-5 text-end"
                style="max-width: 700px ;font-size: 70px; font-weight: 800; color: white">
                Join Us <br> Fight Against <br> Hunger
            </div>
        </div>

        <!-- ganti warna option -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- jsnya -->
        <script src="{{ asset('js/script.js') }}"></script>

        {{-- News --}}
        <div class="class=vstack gap-2 mx-auto mt-5" style="width: 50%">
            @if ($artikels->isEmpty())
                <div>
                    There is no Article yet!!!
                </div>
            @else
                @foreach ($artikels as $artikel)
                    <div class="card mb-4">
                        <div class="card-body d-flex gap-3">
                            <div class="col">
                                <img src="{{ asset('img/NewsImage/' . $artikel->artikelImagePath) }}" alt=""
                                    width="450px">
                            </div>
                            <div class="col">
                                <div class="col">
                                    <div class="card-title h5" style="font-weight: 700">{{ $artikel->judulArtikel }}</div>
                                    <div class="" style="font-size: 10px; font-weight: 600; color:#696969">
                                        {{ $artikel->namaPenulisArtikel }} |
                                        {{ \Carbon\Carbon::parse($artikel->tanggalArtikel)->format('d-m-Y') }}
                                    </div>
                                    <div class="card-text" style="font-weight: 500">
                                        {{ Str::limit($artikel->isiArtikel, 200) }}</div>
                                </div>
                                <div class="col ">
                                    <button id="findMore" type="button" class="btn mt-2"
                                        style="border: 4px solid #D3A029 ; font-weight: 700">Find
                                        More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="mt-4">
                    {{ $artikels->links() }}
                </div> --}}

                {{-- <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav> --}}

                @if ($artikels->hasPages())
                    <nav>
                        <ul class="pagination">
                            {{-- Previous Page Link --}}
                            @if ($artikels->onFirstPage())
                                <li class="disabled"><span>&laquo;</span></li>
                            @else
                                <li><a href="{{ $artikels->previousPageUrl() }}" rel="prev">&laquo;</a></li>
                            @endif

                            {{-- Pagination Elements --}}
                            @foreach ($artikels as $element)
                                {{-- "Three Dots" Separator --}}
                                @if (is_string($element))
                                    <li class="disabled"><span>{{ $element }}</span></li>
                                @endif

                                {{-- Array Of Links --}}
                                @if (is_array($artikels))
                                    @foreach ($artikels as $page => $url)
                                        @if ($page == $artikels->currentPage())
                                            <li class="active"><span>{{ $page }}</span></li>
                                        @else
                                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach

                            {{-- Next Page Link --}}
                            @if ($artikels->hasMorePages())
                                <li><a href="{{ $artikels->nextPageUrl() }}" rel="next">&raquo;</a></li>
                            @else
                                <li class="disabled"><span>&raquo;</span></li>
                            @endif
                        </ul>
                    </nav>
                @endif
            @endif
        </div>
    </div>
@endsection
