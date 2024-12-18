@php
    use Illuminate\Support\Str;
@endphp

@extends('layout')

@section('container')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>

    <div class="d-grid" style="margin: 0px;padding: 0px">
        {{-- HeroImage --}}
        <div class="row" style="margin: 0 ; overflow: hidden">
            <img src="{{ asset('img/image1.png') }}" alt="" class=""
                style="margin: 0;padding:0 ; position: relative;">
            <div class=""
                style="color: white;position: absolute; font-size:75px;font-weight: 900; padding:310px 0px 0px 100px">
                A World
            </div>
            <div class=""
                style="color: white;position: absolute; font-size:75px;font-weight: 900; padding:390px 0px 0px 100px">
                Without Hunger
            </div>
            <div style="color: white;position: absolute; font-size:25px; font-weight: 500; padding:510px 0px 0px 100px; ">
                A world without hunger envisions a future where every person
                <br>
                has access to sufficient safe, and nutritious food to lead a healthy
                <br>
                and active life. It involves eliminating food insecurity,
                <br>
                addressing malnutrition, and creating sustainable food systems
                <br>
                that prioritize equity, resilience, and environmental stewardship.
                <br>
                It envisions sustainable and equitable food systems that prioritize
                <br>
                the well-being of all people, ensuring no one goes hungry while protecting the environment
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
                    <div class="d-flex gap-3" style="font-size: 60px;font-weight: 700">
                        <div style="color: #D3A029">1</div>
                        <div>in</div>
                        <div style="color: #D3A029">11</div>
                    </div>
                    <div style="font-size: 18px; font-weight: 600">People experience hunger</div>
                </div>
                <div class="row" style="padding-left: 75px">
                    <div class="d-flex gap-3" style="font-size: 60px;font-weight: 700">
                        <div style="color: #D3A029">733</div>
                        <div>Million</div>
                    </div>
                    <div style="font-size: 18px; font-weight: 600">People Sleep Hungry Each Night
                    </div>
                </div>
                <div class="row" style="padding-left: 75px">
                    <div style="font-size: 60px;font-weight: 700; color: #D3A029">130,000</div>
                    <div style="font-size: 18px; font-weight: 600">People in the Horn of Africa are
                        on
                        <br>
                        the brink of death from starvation
                    </div>
                </div>
            </div>
        </div>

        {{-- Donation --}}
        <div id="donate" class="row py-0 mx-0 justify-content-center"
            style="background-color: #D3A029; width: 100%; margin: 0;">
            <div class="col col-md-3 m-5 py-5" style="border-radius: 15px; background-color: white">
                <div class="d-grid text-end">
                    <form action="{{ route('donasi.store') }}" method="POST">
                        @csrf
                        <!-- Nominal Options -->
                        <div class="row justify-content-center align-content-center pb-4">
                            <div class="col text-end">
                                <button type="button" class="amount-option px-4 py-2" data-donasi="10000"
                                    onclick="selectButton(this)"
                                    style="width: 150px; border-radius: 4px; border-color: #D3A029; border-style: solid">Rp10.000
                                </button>
                            </div>
                            <div class="col text-start">
                                <button type="button" class="amount-option px-4 py-2" data-donasi="25000"
                                    onclick="selectButton(this)"
                                    style="width: 150px; border-radius: 4px; border-color: #D3A029; border-style: solid">Rp25.000
                                </button>
                            </div>
                        </div>
                        <div class="row justify-content-center align-content-center pb-4">
                            <div class="col text-end">
                                <button type="button" class="amount-option px-4 py-2" data-donasi="50000"
                                    onclick="selectButton(this)"
                                    style="width: 150px; border-radius: 4px; border-color: #D3A029; border-style: solid">Rp50.000
                                </button>
                            </div>
                            <div class="col text-start">
                                <button type="button" class="amount-option px-4 py-2" data-donasi="100000"
                                    onclick="selectButton(this)"
                                    style="width: 150px; border-radius: 4px; border-color: #D3A029; border-style: solid">Rp100.000
                                </button>
                            </div>
                        </div>


                        <!-- Input Nominal (Tombol Pilihan atau Manual) -->
                        <div class="row justify-content-center">
                            <input id="manualdonasi" class="justify-content-center text-center"
                                style="width: 327px; height: 40px; border-radius: 4px; border-color: #D3A029;border-style: solid"
                                type="number" name="manualdonasi" placeholder="Rp0,00" oninput="manualInput()" />
                        </div>

                        <!-- Input Hidden untuk Menyimpan Nilai Donasi -->
                        <input type="hidden" name="totaldonasis" id="totaldonasis">

                        <!-- Destination Options -->
                        <div class="row justify-content-center align-content-center py-4">
                            <div class="radio-group d-flex gap-3">
                                <input type="radio" id="domestic" name="tipedonasis" value="Domestic" required>
                                <label for="domestic">Domestic</label>

                                <input type="radio" id="international" name="tipedonasis" value="International" required>
                                <label for="international">International</label>
                            </div>
                        </div>

                        <!-- Input Name -->
                        <div class="row justify-content-center">
                            <input class="justify-content-center text-center"
                                style="width: 327px; height: 40px; border-radius: 4px; border-color: #D3A029;border-style: solid"
                                type="text" name="nama" placeholder="Name" required>
                        </div>

                        <!-- Donate Button -->
                        <div class="text-center pt-3">
                            <button type="submit" class="button px-5 py-2"
                                style="color: white; background-color: #D3A029; border-radius: 10px">Donate Now</button>
                            <div style="font-size: 10px">100% of your donation goes to help those in need</div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col d-flex justify-content-end align-items-center py-5 text-end"
                style="max-width: 700px ;font-size: 70px; font-weight: 800; color: white">
                Join Us <br> Fight Against <br> Hunger
            </div>
        </div>

        {{-- Total Donation --}}
        <div class="" style="background-color: #D3A029">
            <div class="" style="background-color: #D3A029; color: white">
                <div class="container">
                    <div class="row justify-content-center"
                        style="font-size: 50px; font-weight: 800; margin-top: 75px; margin-bottom: 50px">
                        TOTAL DONATION
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <div class="row justify-content-center"
                                style="font-size: 60px; font-weight: 700; margin-bottom: 10px">
                                Rp{{ number_format($totalDomestic, 0, ',', '.') }}
                            </div>
                            <div class="row justify-content-center" style="font-size: 35px; font-weight: 700">
                                Domestic
                            </div>
                        </div>
                        <div class="col">
                            <div class="row justify-content-center"
                                style="font-size: 60px; font-weight: 700; margin-bottom: 10px">
                                Rp{{ number_format($totalInternational, 0, ',', '.') }}
                            </div>
                            <div class="row justify-content-center" style="font-size: 35px; font-weight: 700">
                                International
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- News --}}
        <div id="news" class="mx-auto my-5">
            <div class="h1 text-center" style="font-weight: 700">Article</div>
            <div class="mx-auto mb-5" style="width: 50%">
                <div class="d-grid gap-3">
                    @if ($artikels->isEmpty())
                        <div class="d-flex justify-content-center h1 ">
                            There is no Article yet!!!
                        </div>
                    @else
                        @foreach ($artikels as $artikel)
                            <div class="card ">
                                <div class="card-body d-flex gap-3">
                                    <div class="col">
                                        <img src="{{ asset('img/NewsImage/' . $artikel->artikelImagePath) }}"
                                            alt="" width="450px">
                                    </div>
                                    <div class="col">
                                        <div class="col">
                                            <div class="card-title h5" style="font-weight: 700">
                                                {{ $artikel->judulArtikel }}
                                            </div>
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
                </div>
                <div class="mt-2">
                    {{ $artikels->links('pagination::bootstrap-5') }}
                </div>
                @endif
            </div>
        </div>

        {{-- About Us --}}
        <div class="row" style="margin: 0px; overflow: hidden">
            <img src="{{ asset('img/BG.png') }}" alt="" width="100%" style="padding: 0 ;position: relative">
            <div class="d-grid justify-content-center gap-3" style="margin-top: 300px ;position: absolute">
                <div class="row justify-content-center">
                    <img src="{{ asset('img/Smile.png') }}" alt="" style="width: 750px; height: auto;">
                </div>
                <div class="row text-center" style="color: #ffffff;font-size:25px; font-weight: 500; text-align:center ">
                    Zero Hunger is a platform dedicated to eradicating global hunger
                    <br>
                    in line with SDG 2: Zero Hunger. Our team of activists,
                    <br>
                    nutritionists, and environmentalists promotes sustainable
                    <br>
                    food practices to ensure universal access to nutritious food.
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <div class="row justify-content-center"
                        style="font-size: 60px; font-weight: 700; margin-bottom: 10px">
                        Our Vision
                    </div>
                    <div class="row justify-content-center" style="font-size: 35px; font-weight: 700">
                        1. Raise Awareness <br>
                        2. Provide Support <br>
                        3. Empower Change
                    </div>
                </div>
                <div class="col">
                    <div class="row justify-content-center"
                        style="font-size: 60px; font-weight: 700; margin-bottom: 10px">
                        Our Mission
                    </div>
                    <div class="row justify-content-center" style="font-size: 35px; font-weight: 700">
                        1. Every child sleeps well-fed. <br>
                        2. Families access and grow nutritious food. <br>
                        3. Sustainable food systems leave no one behind.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
