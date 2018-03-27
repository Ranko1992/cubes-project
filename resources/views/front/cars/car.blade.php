@extends('front.layout')
		
@section('content')      

<div class="container">
                <article>
                    <ol class="breadcrumb">
                        <li><a href="{{url('/')}}">Pocetna</a></li>
                        <li><a href="#">Automobili iz uvoza</a></li>
                    </ol>
                </article>
            </div>
        </section>
        <main>
            <section class="news newsPage">
                <div class="container">
                    <h3>Automobili iz <strong>Svajcarske</strong><hr></h3>
                    <div class="row">

                        @foreach($allCars as $car)
                        <div class="col-sm-6 col-md-4">
                            <figure class="newsItem">
                                <div class="imgNews">
                                    <a class="img-responsive" href="{{url('/cars/one-car/' . $car->id)}}">
                                    <img class="img-responsive" 
                                         src="{{\Storage::disk('public')->url('/cars/' . $car->photo_filename)}}"
                                         alt="{{$car->title}}"
                                         
                                         />
                                    </a>
                                  </div>

                                <figcaption>
                                    <a href="{{url('/cars/one-car/' . $car->id)}}"><h4><strong>{{$car->title}}</strong> - {{$car->model}}</h4></a>
                                    <button type="button" class="btn items">{{$car->created_at}}</button>
                                    <a class="btn btn-info" href="{{url('/cars/one-car/' . $car->id)}}" role="button">Pogledaj ponudu</a>
                                    

                                </figcaption>
                            </figure>
                        </div>
                 @endforeach
                    </div>
                </div>
            </section>
      

        </main>
        @endsection