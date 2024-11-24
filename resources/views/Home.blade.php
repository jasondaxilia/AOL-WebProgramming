@extends('layout')

@section('container')
    <div class="d-grid" style="margin: 0px;padding: 0px">
        <div class="row" style="margin: 0 ; overflow: hidden">
            <img src="{{ asset('img/image1.png') }}" alt="" class=""
                style="margin: 0;padding:0 ; position: relative;">
            <div class=""
                style="color: white;position: absolute; font-size:60px;font-family: Montserrat;font-weight: 900; padding:250px 0px 0px 100px;">
                A World
                <br>
                Without Hunger
            </div>
            <div
                style="color: white;position: absolute; font-size:20px; font-family: Montserrat; font-weight: 400; padding:415px 0px 0px 100px; ">
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
        <div class="row" style="margin: 0px; overflow: hidden">
            <div class="col "
                style="padding: 0px; font-size: 50px; font-family: Montserrat; font-weight: 800; padding: 3em 0 3em 3em">
                Currently
                <br> Happen in
                <br> Our
                World
            </div>
            <div class="col align-items-center" style="padding: 0px">
                <div>
                    <div class="row" style="font-size: 40px;font-weight: 400">1 in 11</div>
                    <div>People experience hunger</div>
                </div>
                <div>
                    <div class="row" style="font-size: 40px;font-weight: 400">733 Million</div>
                    <div>People Sleep Hungry Each Night</div>
                </div>
                <div>
                    <div class="row" style="font-size: 40px;font-weight: 400">130,000</div>
                    <div>People in the Horn of Africa are on the brink of death from starvation</div>
                </div>
            </div>
        </div>
    </div>
@endsection
