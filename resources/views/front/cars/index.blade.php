@extends('front.layout')
		
@section('content')      

<div class="container">
                <article>
                    <ol class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="#">Cars</a></li>
                    </ol>
                </article>
            </div>
        </section>
        <main>
            <section class="news newsPage">
                <div class="container">
                    <h3>Automobili iz <strong>Svajcarske</strong></h3>
                    <div class="row">

                        @foreach($allCars as $car)
                        <div class="col-sm-6 col-md-4">
                            <figure class="newsItem">
                                <div class="imgNews">
                                    <img class="img-responsive" 
                                         src="{{\Storage::disk('public')->url('/cars/' . $car->photo_filename)}}"
                                         alt="{{$car->title}}"/>
                                  </div>

                                <figcaption>
                                    <a href="{{url('/cars/car/' . $car->id)}}"><h4><strong>{{$car->model}}</strong> - {{$car->title}}</h4></a>
                                    <button type="button" class="btn items">{{$car->created_at}}</button>
                                    <p>{{$car->description}}</p>

                                </figcaption>
                            </figure>
                        </div>
                 @endforeach
                    </div>
                </div>
            </section>
      

        </main>
        @endsection