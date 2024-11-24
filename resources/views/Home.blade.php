@extends('layout')

@section('container')
    <div class="d-grid" style="margin: 0px;padding: 0px">
        {{-- HeroImage --}}
        <div class="row" style="margin: 0 ; overflow: hidden">
            <img src="{{ asset('img/image1.png') }}" alt="" class=""
                style="margin: 0;padding:0 ; position: relative;">
            <div class=""
                style="color: white;position: absolute; font-size:60px;font-family: Montserrat;font-weight: 900; padding:250px 0px 0px 100px">
                A World
            </div>
            <div class=""
                style="color: white;position: absolute; font-size:60px;font-family: Montserrat;font-weight: 900; padding:320px 0px 0px 100px">
                Without Hunger
            </div>
            <div
                style="color: white;position: absolute; font-size:20px; font-family: Montserrat; font-weight: 400; padding:405px 0px 0px 100px; ">
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
                style="padding: 0px; font-size: 85px; font-family: Montserrat; font-weight: 800;">
                Currently
                <br> Happen in
                <br> Our
                World
            </div>
            <div class="col d-grid align-items-center py-5 gap-3" style="padding: 0; margin-left: 250px">
                <div class="row" style="padding-left: 75px">
                    <div style="font-size: 60px;font-weight: 700; font-family: Montserrat">1
                        in 11</div>
                    <div style="font-size: 18px; font-weight: 600; font-family: Montserrat">People experience hunger</div>
                </div>
                <div class="row" style="padding-left: 75px">
                    <div style="font-size: 60px;font-weight: 700; font-family: Montserrat">733 Million</div>
                    <div style="font-size: 18px; font-weight: 600; font-family: Montserrat">People Sleep Hungry Each Night
                    </div>
                </div>
                <div class="row" style="padding-left: 75px">
                    <div style="font-size: 60px;font-weight: 700; font-family: Montserrat">130,000</div>
                    <div style="font-size: 18px; font-weight: 600; font-family: Montserrat">People in the Horn of Africa are
                        on
                        <br>
                        the brink of death from starvation
                    </div>
                </div>
            </div>
        </div>

        {{-- Donation --}}
        <div class="row d-flex" style="background-color: #D3A029; margin: 0">
            <div class="col">
                <form action="">
                    <div class="row">
                        <div class="col">Rp10.000</div>
                        <div class="col">Rp25.000</div>
                    </div>
                    <div class="row">
                        <div class="col">Rp50.000</div>
                        <div class="col">Rp100.000</div>
                    </div>
                    <div class="row"></div>
                    <div class="row"></div>
                </form>
            </div>

            <div class="col d-flex justify-content-end align-items-center py-5 text-end"
                style="padding: 0px; font-size: 70px; font-family: Montserrat; font-weight: 800; color: white">
                Join Us <br> Fight Against <br> Hunger
            </div>
        </div>

        {{-- News --}}
        <div class="d-grid">
            <div class="row gap-4 my-5" style="margin: 0">
                <div class="col text-end"><img src="{{ asset('img/newsImage2.png') }}" alt=""></div>
                <div class="col">
                    <div style="font-size: 40px; font-weight: 600; font-family: Montserrat; max-width: 600px;">Tantangan
                        Zero
                        Hunger Demi Berantas Kelaparan</div>
                    <div style="font-size: 15px; font-weight: 600; font-family: Montserrat">19 Oktober 2015 | Tri Wahyuni
                    </div>
                    <div style="font-size: 18px; font-weight: 500; font-family: Montserrat; max-width: 600px">Dalam rangka
                        memperingati Hari Pangan Sedunia yang jatuh pada 16 Oktober lalu,
                        Direktur Eksekutif
                        dari United Nations World Food Programme (WFP) Ertharin Cousin
                    </div>
                    <button type="button" class="btn btn-outline-warning border-4"
                        style="color: black;font-size: 20px; font-weight: 600; font-family: Montserrat; padding: 5px 15px 5px 15px">
                        Find Out More</button>
                </div>
            </div>
        </div>
    </div>
@endsection
