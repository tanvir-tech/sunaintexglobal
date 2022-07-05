@extends('layout/master')
@section("content")

        <div class="text-center bg-transparent ">
            <h1 id="welcome" class="text-success"></h1>
            <p id="moto" class="text-danger">
                All about fashion.
            </p>
        </div>

        <br>
        <br>

        <section id="description">
            <div class="row">
                <div class="col jumbotron">
                    <h3 class="text-success">
                        One stop Apparel sourcing house.
                    </h3>
                    <p>
                        Sunaina Tex Global is the fastest growing and mostly known ready to wear garments
                        manufacturer, exporter, buying & sourcing agent in Bangladesh. Sunaina Tex Global wants to
                        help you for more savings on the ready to wear garments that you buy from others. Why pay
                        a higher price for good looking, good quality apparels when Sunaina Tex Global can saves
                        money for you. We represent a number of major importers from UK, USA, FRANCE, SWEDEN,
                        SWITZERLAND, POLLAND, GERMANY, CANADA, RUSSIA, SPAIN, BRAZIL, MEXICO, ROMANIA, HUNGARY.
                        We are happy to offer the same services to you. From our office in Dhaka, the heart of low
                        cost and good quality ready to wear garments, we can supply your company any kind of
                        apparel you need.
                    </p>
                </div>
                <div class="col">
                    <img src="{{asset('images/products/st1.PNG')}}" alt="sunainatexglobal" width="500px" class="img-thumbnail">
                    {{-- {{asset('gallery/'.$item['gallery'])}}  --}}
                </div>

            </div>
        </section>

        <br><br>


        @endsection