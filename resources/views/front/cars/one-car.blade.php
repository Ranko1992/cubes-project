@extends('front.layout')
		
@section('content')   
        <section class="productInfo">
            <div class="container">
                <div class="row gallery">
                    <div class="col-xs-12">
                        <h3 class="text-uppercase">{{$car->title}} - {{$car->model}}</h3>
                       

                    </div>
                    <div class="col-md-7">

                        <div id="main_area" class="center-block">
                            <!-- Slider -->
                            <div class="row">

                                <div class="col-sm-12">
                                    <div class="col-xs-12" id="slider">
                                        <!-- Top part of the slider -->
                                        <div class="row">
                                            <div class="col-sm-12" id="carousel-bounding-box">
                                                <div class="carousel slide" id="myCarousel">
                                                    <!-- Carousel items -->
                                                    <div class="carousel-inner">
                                                        <div class="active item" data-slide-number="0">
                                                           
                                                            <img class="img-responsive"
                                                                 src="{{\Storage::disk('public')->url('/cars/' . $car->photo_filename)}}"
                                         alt="{{$car->title}}"/>
                                                        </div>

                                                        <div class="item" data-slide-number="1">
                                                           <img class="img-responsive"
                                                                src="{{\Storage::disk('public')->url('/cars/' . $car->photo_filename_1)}}"
                                         alt="{{$car->title}}"/>
                                                        </div>

                                                        <div class="item" data-slide-number="2">
                                                            <img class="img-responsive" src="img/productGallery2.jpg" alt=""/>
                                                        </div>

                                                        <div class="item" data-slide-number="3">
                                                            <img class="img-responsive" src="img/productGallery3.jpg" alt=""/>
                                                        </div>

                                                        <div class="item" data-slide-number="4">
                                                           <img class="img-responsive" src="img/productGallery4.jpg" alt=""/>
                                                        </div>

                                                        <div class="item" data-slide-number="5">
                                                            <img class="img-responsive" src="img/productGallery5.jpg" alt=""/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Slider-->
                                </div>
                                <div class="col-sm-12" id="slider-thumbs">
                                    <!-- Bottom switcher of slider -->
                                    <!-- Thumbnail items -->
                                    <h4 class="text-uppercase">More photos</h4>
                                    <ul class="hide-bullets clearfix">
                                        <li class="col-xs-4">
                                            <a class="thumbnail" id="carousel-selector-0">
                                                <img class="img-responsive" <img class="img-responsive" src="{{\Storage::disk('public')->url('/cars/' . $car->photo_filename_1)}}"
                                         alt="{{$car->title}}"/>
                                            </a>
                                        </li>
                                        <li class="col-xs-4">
                                            <a class="thumbnail" id="carousel-selector-1"><img class="img-responsive" src="{{\Storage::disk('public')->url('/cars/' . $car->photo_filename_1)}}"
                                         alt="{{$car->title}}"/>
                                            </a>
                                        </li>
                                        <li class="col-xs-4">
                                            <a class="thumbnail" id="carousel-selector-2"><img class="img-responsive" src="img/productGallery2.jpg" alt=""/>
                                            </a>
                                        </li>
                                        <li class="col-xs-4">
                                            <a class="thumbnail" id="carousel-selector-3"><img class="img-responsive" src="img/productGallery3.jpg" alt=""/>
                                            </a>
                                        </li>
                                        <li class="col-xs-4">
                                            <a class="thumbnail" id="carousel-selector-4"><img class="img-responsive" src="img/productGallery4.jpg" alt=""/>
                                            </a>
                                        </li>
                                        <li class="col-xs-4">
                                            <a class="thumbnail" id="carousel-selector-5"><img class="img-responsive" src="img/productGallery5.jpg" alt=""/>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12 productRate starrr">
                        <div>
                            <h4 class="text-uppercase">Product rate</h4>
                            <a class="fa fa-cog fa-cog-yellow" href="#"></a>
                            <a class="fa fa-cog fa-cog-yellow" href="#"></a>
                            <a class="fa fa-cog fa-cog-yellow" href="#"></a>
                            <a class="fa fa-cog" href="#"></a>
                            <a class="fa fa-cog" href="#"></a>
                            <p class="pull-right"><b>4585</b> votes / <b>97</b> last week</p>
                        </div>
                        <div class="productColor">
                            <h4 class="text-uppercase">Color </h4>
                            <div class="row">
                                <div class="col-xs-4">
                                    <p class="flex-center"><span></span> Pink kitty</p>
                                </div>
                                <div class="col-xs-4">
                                    <p class="flex-center"><span></span> Noble silver</p>
                                </div>
                                <div class="col-xs-4">
                                    <p class="flex-center"><span></span> Deep black</p>
                                </div>
                            </div>
                        </div>
                        <div class="productType">
                            <h4 class="text-uppercase">Type </h4>
                            <button class="btn btn-default" type="button">Halogen</button>
                            <button class="btn btn-default" type="button">Biksenon</button>
                            <button class="btn btn-default" type="button">LED</button>
                            <h4 class="text-uppercase">Price </h4>
                            <div>
                                <h2>$2849<sup>99</sup> </h2>
                                <button class="btn btn-primary">Buy now</button>
                            </div>
                        </div>
                        <div class="model">
                            <h4 class="text-uppercase">Compatible models </h4>
                            <a href="#">BMW X3</a>,
                            <a href="#">BMW X5</a>
                        </div>
                        <div class="description">
                            <h4 class="text-uppercase">Description</h4>
                            <p>Ea ullum liber aperiri mi, impetus ate philosophia ad duo, quem regione ne ius. Vis quis lobortis dissentias ex, in du aft philosophia, malis necessitatibus no mei. Volumus sensibus qui ex, eum duis doming ad. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                        </div>
                        <div class="technicalCharacteristics">
                            <h4 class="text-uppercase">Technical characteristics</h4>
                            <div class="row">
                                <div class="col-xs-3">
                                    <p>Material</p>
                                </div>
                                <div class="col-xs-9">
                                    <p>Plastic, Steel, Aluminum, Glass</p>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <p>Width</p>
                                </div>
                                <div class="col-xs-9">
                                    <p>150mm</p>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <p>Height</p>
                                </div>
                                <div class="col-xs-9">
                                    <p>40mm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           
            </div>
        </section>
	
@endsection
