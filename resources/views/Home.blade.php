@php
    use Illuminate\Support\Str;
@endphp

@extends('layout')

@section('container')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <div class="d-grid" style="margin: 0px">
        {{-- HeroImage --}}
        <section id="heroImage">
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
                <div
                    style="color: white;position: absolute; font-size:25px; font-weight: 500; padding:510px 0px 0px 100px; ">
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
        </section>
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
        <section id="donate" style="padding-top: 97px">
            <div class="row py-0 mx-0 justify-content-center" style="background-color: #D3A029; width: 100%; margin: 0;">
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

                                    <input type="radio" id="international" name="tipedonasis" value="International"
                                        required>
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
                                <button id="donate" type="submit" class="button px-5 py-2"
                                    style="color: white; background-color: #D3A029; border-radius: 10px">Donate
                                    Now</button>
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

        </section>

        {{-- Total Donation --}}
        <div class=" py-4" style="background-color: #D3A029; color: white">
            <div class="container my-5">
                <div class="row justify-content-center" style="font-size: 50px; font-weight: 800;">
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

        {{-- artikel --}}
        <section id="artikel" style="padding-top: 60px">
            <div class="mx-auto my-5">
                <div class="h1 text-center" style="font-weight: 700">Articles</div>
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
                                                <div class=""
                                                    style="font-size: 10px; font-weight: 600; color:#696969">
                                                    {{ $artikel->namaPenulisArtikel }} |
                                                    {{ \Carbon\Carbon::parse($artikel->tanggalArtikel)->format('d-m-Y') }}
                                                </div>
                                                <div class="card-text" style="font-weight: 500">
                                                    {{ Str::limit($artikel->isiArtikel, 250) }}</div>
                                            </div>
                                            <div class="col ">
                                                <a id="findMore" class="btn mt-3"
                                                    href="/articles/{{ $artikel['id'] }}"> Find More
                                                </a>
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
        </section>

        {{-- About Us --}}
        <section id="aboutus">
            <div class="row p-0 m-0">
                <div class="card border-0 p-0 ">
                    <img class="card-img " src="{{ asset('img/BG.png') }}" alt="">
                    <div class="card-img-overlay" style="top: 20%">
                        <img class="mx-auto d-block" src="{{ asset('img/Smile.png') }}" alt="">
                        <p class="card-text text-center text-white" style="font-size: 28px; font-weight: 500">
                            Zero Hunger is a platform dedicated to eradicating global hunger
                            <br>
                            in line with SDG 2: Zero Hunger. Our team of activists,
                            <br>
                            nutritionists, and environmentalists promotes sustainable
                            <br>
                            food practices to ensure universal access to nutritious food.
                        </p>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="row mb-5">
                        <div class="row justify-content-center"
                            style="font-size: 60px; font-weight: 700; margin-bottom: 10px">
                            Our Vision
                        </div>
                        <div class="row text-center"
                            style="font-size: 22px; font-weight: 450; width: 50%; margin-left: auto; margin-right: auto;">
                            Achieving SDG 2, Zero Hunger, requires a focused approach. First,
                            we must raise awareness about the pressing issues of hunger and malnutrition,
                            ensuring that communities understand their impact. Next, we should provide support by delivering
                            essential resources, such as nutritious food,
                            farming tools, and education on sustainable agriculture. Finally, we need to empower change by
                            building resilience and self-reliance,
                            helping communities create sustainable solutions to break the cycle of hunger for the long term.
                        </div>
                    </div>
                    <div class="row">
                        <div class="row justify-content-center"
                            style="font-size: 60px; font-weight: 700; margin-bottom: 10px">
                            Our Mission
                        </div>
                        <div class="row text-center"
                            style="font-size: 22px; font-weight: 450; width: 50%; margin-left: auto; margin-right: auto;">
                            Our mission is to create a world where every child sleeps well-fed,
                            free from the pains of hunger. We strive to empower families with access
                            to nutritious food and the resources needed to grow their own, fostering resilience and
                            self-reliance.
                            By building sustainable food systems that prioritize inclusivity and equity, we aim to leave no
                            one behind in the fight against hunger and malnutrition.
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
@endsection
