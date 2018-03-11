@extends('front.layout')
		
@section('content')
 <!--SLIDER-->
        <article class="container-fluid slide_carusel">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="6000" data-pause="hover">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img class="img-responsive" src="/skins/front/img/index_slider.jpg" alt=""/>
                        <div class="carousel-caption">
                            <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                            <h2>Gear</h2><br>
                            <p>automotive psd template</p>
                        </div>
                        <div class="carousel-caption-right">
                            <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="/skins/front/img/index_slider1.jpg" alt=""/>
                        <div class="carousel-caption">
                            <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                            <h2>Gear</h2><br>
                            <p>automotive psd template</p>

                        </div>
                        <div class="carousel-caption-right">
                            <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="/skins/front/img/index_slider2.jpg" alt=""/>
                        <div class="carousel-caption">
                            <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                            <h2>Gear</h2><br>
                            <p>automotive psd template</p>
                        </div>
                        <div class="carousel-caption-right">
                            <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">

                    <span class="sr-only">Next</span>
                </a>
            </div>

        </article>
        <main>

       <!-- OVDE UBACI NEKI NAZIV tipa MARKE AUTOMOBILA KOJE RADIMO -->
            <section class="container cars">
                <div class="owl-carousel">
                    <div class="item">
                        <a href="#"><img src="/skins/front/img/bmw_logo.png" alt=""/></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="/skins/front/img/citroen.png" alt=""/></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="/skins/front/img/fiat_logo.png" alt=""/></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="/skins/front/img/honda.png" alt=""/></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="/skins/front/img/kia_logo.png" alt=""/></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="/skins/front/img/man_logo.png" alt=""/></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="/skins/front/img/nissan.png" alt=""/></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="img/wv_logo.png" alt=""/></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="/skins/front/img/bmw_logo.png" alt=""/></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="/skins/front/img/citroen.png" alt=""/></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="/skins/front/img/fiat_logo.png" alt=""/></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="/skins/front/img/honda.png" alt=""/></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="/skins/front/img/kia_logo.png" alt=""/></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="/skins/front/img/man_logo.png" alt=""/></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="/skins/front/img/nissan.png" alt=""/></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="/skins/front/img/wv_logo.png" alt=""/></a>
                    </div>

                </div>


            </section>

            <!-- OVO STAVLJAM ZA USLUGE  -->
            <section class="pumpOptions">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <article class="part center-block">

                                <figure>
                                    <img class="center-block" src="/skins/front/img/devices_icon.png" alt=""/>
                                    <figcaption class="text-center">
                                        <a href="#"><h3>Devices</h3></a>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                                            Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney 
                                            College in Virginia, looked up one of the more obscure Latin words.</p>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <article class="part center-block">

                                <figure>
                                    <img class="center-block" src="/skins/front/img/chip_icon.png" alt=""/>
                                    <figcaption class="text-center">
                                        <a href="#"><h3>Devices</h3></a>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                                            Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney 
                                            College in Virginia, looked up one of the more obscure Latin words.</p>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <article class="part center-block">

                                <figure>
                                    <img class="center-block" src="/skins/front/img/sock_icon.png" alt=""/>
                                    <figcaption class="text-center">
                                        <a href="#"><h3>Devices</h3></a>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                                            Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney 
                                            College in Virginia, looked up one of the more obscure Latin words.</p>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <article class="part center-block">

                                <figure>
                                    <img class="center-block" src="/skins/front/img/wheels_icon.png" alt=""/>
                                    <figcaption class="text-center">
                                        <a href="#"><h3>Devices</h3></a>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                                            Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney 
                                            College in Virginia, looked up one of the more obscure Latin words.</p>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
            <!--OVO STAVLJAM ZA AUTOMOBILE IZ UVOZA***  -->
            <section class="news">
                <div class="container">
                    <h3 class="text-center">Automobili iz uvoza</h3>
                    <div class="row">
                        <div class="col-xs-10">
                            <div class="slider"><!-- The slider -->
                                <div><!-- A mandatory div used by the slider -->
                                    <!-- Each div below is considered a slide -->
                                    <div>
                                        <figure class="newsItem">
                                            <div class="imgNews">
                                                <img class="img-responsive" src="/skins/front/img/news_car.jpg" alt=""/>
                                                <div class="hoverNews text-center">
                                                    <a href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                                                    <a href="#"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                                                    <a href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                                                </div>
                                            </div>

                                            <figcaption>
                                                <a href="#"><h4>READY FOR TRACK DAY</h4></a>
                                                <button type="button" class="btn items">25 April 2015</button>
                                                <button type="button" class="btn items">Add comment</button>
                                                <p>Ea ullum liber aperiri mi, impetus ate philosophia ad duo, quem regione ne ius.
                                                    Vis quis lobortis dissentias ex, in du aft philosophia, malis necessitatibus no mei. 
                                                    Volumus sensibus qui ex, eum duis doming ad.</p>

                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div>
                                        <figure class="newsItem">
                                            <div class="imgNews">
                                                <img class="img-responsive" src="/skins/front/img/news_car.jpg" alt=""/>
                                                <div class="hoverNews text-center">
                                                    <a href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                                                    <a href="#"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                                                    <a href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                                                </div>
                                            </div>
                                            <figcaption>
                                                <a href="#"><h4>READY FOR TRACK DAY</h4></a>
                                                <button type="button" class="btn items">25 April 2015</button>
                                                <button type="button" class="btn items">Add comment</button>
                                                <p>Ea ullum liber aperiri mi, impetus ate philosophia ad duo, quem regione ne ius.
                                                    Vis quis lobortis dissentias ex, in du aft philosophia, malis necessitatibus no mei. 
                                                    Volumus sensibus qui ex, eum duis doming ad.</p>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div>
                                        <figure class="newsItem">
                                            <div class="imgNews">
                                                <img class="img-responsive" src="/skins/front/img/news_car1.jpg" alt=""/>
                                                <div class="hoverNews text-center">
                                                    <a href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                                                    <a href="#"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                                                    <a href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                                                </div>
                                            </div>
                                            <figcaption>
                                                <a href="#"><h4>READY FOR TRACK DAY</h4></a>
                                                <button type="button" class="btn items">25 April 2015</button>
                                                <button type="button" class="btn items">Add comment</button>
                                                <p>Ea ullum liber aperiri mi, impetus ate philosophia ad duo, quem regione ne ius.
                                                    Vis quis lobortis dissentias ex, in du aft philosophia, malis necessitatibus no mei. 
                                                    Volumus sensibus qui ex, eum duis doming ad.</p>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div>
                                        <figure class="newsItem">
                                            <div class="imgNews">
                                                <img class="img-responsive" src="/skins/front/img/news_car.jpg" alt=""/>
                                                <div class="hoverNews text-center">
                                                    <a href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                                                    <a href="#"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                                                    <a href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                                                </div>
                                            </div>
                                            <figcaption>
                                                <a href="#"><h4>READY FOR TRACK DAY</h4></a>
                                                <button type="button" class="btn items">25 April 2015</button>
                                                <button type="button" class="btn items">Add comment</button>
                                                <p>Ea ullum liber aperiri mi, impetus ate philosophia ad duo, quem regione ne ius.
                                                    Vis quis lobortis dissentias ex, in du aft philosophia, malis necessitatibus no mei. 
                                                    Volumus sensibus qui ex, eum duis doming ad.</p>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div>
                                        <figure class="newsItem">
                                            <div class="imgNews">
                                                <img class="img-responsive" src="/skins/front/img/news_car1.jpg" alt=""/>
                                                <div class="hoverNews text-center">
                                                    <a href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                                                    <a href="#"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                                                    <a href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                                                </div>
                                            </div>
                                            <figcaption>
                                                <a href="#"><h4>READY FOR TRACK DAY</h4></a>
                                                <button type="button" class="btn items">25 April 2015</button>
                                                <button type="button" class="btn items">Add comment</button>
                                                <p>Ea ullum liber aperiri mi, impetus ate philosophia ad duo, quem regione ne ius.
                                                    Vis quis lobortis dissentias ex, in du aft philosophia, malis necessitatibus no mei. 
                                                    Volumus sensibus qui ex, eum duis doming ad.</p>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div>
                                        <figure class="newsItem">
                                            <div class="imgNews">
                                                <img class="img-responsive" src="/skins/front/img/news_car.jpg" alt=""/>
                                                <div class="hoverNews text-center">
                                                    <a href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                                                    <a href="#"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                                                    <a href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                                                </div>
                                            </div>
                                            <figcaption>
                                                <a href="#"><h4>READY FOR TRACK DAY</h4></a>
                                                <button type="button" class="btn items">25 April 2015</button>
                                                <button type="button" class="btn items">Add comment</button>
                                                <p>Ea ullum liber aperiri mi, impetus ate philosophia ad duo, quem</p>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xs-2 controlsNews">

                            <span id="go-left" class="glyphicon glyphicon-menu-left"></span>
                            <span id="go-right" class="glyphicon glyphicon-menu-right"></span>



                        </div>

                    </div>
                </div>
            </section>

            <!--OVO STAVLJAM NA KRAJ SA NAZIVOM ***OCENA NASEG RADA U BROJKAMA***  -->
            <section class="soldParts">
                <div class="transparentColor">
                    <div class="container">
                        <div  class="row">
                            <article class="col-xs-6 col-md-3 text-center">
                                <h3>2580</h3>
                                <p>Gear boxes</p>
                            </article>
                            <article class="col-xs-6 col-md-3 text-center">
                                <h3>1820</h3>
                                <p>Tuning goods</p>
                            </article>
                            <article class="col-xs-6 col-md-3 text-center">
                                <h3>4582</h3>
                                <p>Oil and supplies</p>
                            </article>
                            <article class="col-xs-6 col-md-3 text-center">
                                <h3>2524</h3>
                                <p>Devices</p>
                            </article>
                        </div>
                    </div>
                </div>
            </section>






            <!-- VIDETI DA LI MOZE ZA NESTO DA SE ISKORISTI-->
            <section class="portfolio">
                <div class="container">
                    <div class="row equal">
                        <div class="col-xs-12 col-md-5 col-lg-5">
                            <figure class="figure center-block">
                                <img src="/skins/front/img/portfolioItem.jpg"   class="img-responsive double" alt="A generic square placeholder image with rounded corners in a figure.">
                                <figcaption class="figure-caption">
                                    <a href="#"><h4>New Tuning Packge for Range Rover Sport</h4></a>
                                    <a href="#"><p>24 comments</p></a>
                                </figcaption>
                            </figure> 
                        </div>
                        <div class="col-xs-12 col-md-5 col-lg-5">
                            <div class="row">
                                <div class=" col-sm-12">
                                    <figure class="figure center-block">
                                        <img src="/skins/front/img/portfolioItem1.jpg"   class="img-responsive" alt="A generic square placeholder image with rounded corners in a figure.">
                                        <figcaption class="figure-caption">
                                            <a href="#"><h4>New Tuning Packge for Range Rover Sport</h4></a>
                                            <a href="#"><p>24 comments</p></a>
                                        </figcaption>
                                    </figure> 
                                </div>
                            </div>
                            <div class="row">
                                <div class=" col-sm-6">
                                    <figure class="figure center-block">
                                        <img src="/skins/front/img/porfolioItem2.jpg"   class="img-responsive" alt="A generic square placeholder image with rounded corners in a figure.">
                                        <figcaption class="figure-caption">
                                            <a href="#"><h4>New Tuning Packge for Range Rover Sport</h4></a>
                                            <a href="#"><p>24 comments</p></a>
                                        </figcaption>
                                    </figure> 
                                </div>
                                <div class="col-sm-6">
                                    <figure class="figure center-block">
                                        <img src="/skins/front/img/porfolioItem2.jpg"    class="img-responsive" alt="A generic square placeholder image with rounded corners in a figure.">
                                        <figcaption class="figure-caption">
                                            <a href="#"><h4>New Tuning Packge for Range Rover Sport</h4></a>
                                            <a href="#"><p>24 comments</p></a>
                                        </figcaption>
                                    </figure> 
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-2 col-lg-2 cen">
                            <figure class="figure center-block">
                                <img src="/skins/front/img/porfolioItem3.jpg"    class="img-responsive double" alt="A generic square placeholder image with rounded corners in a figure.">
                                <figcaption class="figure-caption">
                                    <a href="#"><h4>New Tuning Packge for Range Rover Sport</h4></a>
                                    <a href="#"><p>24 comments</p></a>
                                </figcaption>
                            </figure> 
                        </div>  
                    </div>
                </div>
            </section>  
            <section class="googleMap">

                <div class="mapWrapper">
                    <div id='gmap_canvas' ></div>		  
                </div>

                <div class="formWrapp">

                    <div class="formContact">
                        <div class="adress">
                            <h2>Kontaktirajte nas</h2>
                            <h3>061 14 96 195</h3>
                            <p>Dejana Dubajica 53<br> Zemun polje, 11000 Beograd</p>
                        </div>
                        <form class="form-group">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Name" aria-label="...">
                                    </div><!-- /input-group -->
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Email" aria-label="...">
                                    </div><!-- /input-group -->
                                </div><!-- /.col-lg-6 -->
                                <div class="col-xs-12">
                                    <div class="input-group">
                                        <button class="btn btn-default formBtn" type="submit">Kontaktirajte nas</button>
                                    </div><!-- /input-group -->
                                </div>

                            </div><!-- /.row -->
                        </form>			    
                    </div>
                </div>
            </section>
        </main>
         @endsection