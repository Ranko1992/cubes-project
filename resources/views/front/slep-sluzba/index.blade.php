@extends('front.layout')

@section('content')

<section class="bredcrumbs">

	    <div class="container">
		<article>
		    <ol class="breadcrumb">
			<li><a href="{{url('/')}}">Home</a></li>
			<li><a href="#">Auto prikolice</a></li>
		    </ol>
		</article>
	    </div>
	</section>
        <main>


	    <section class="aboutUs">
		<div class="container">
                    <h2>Auto prikolice</h2>
                    @foreach($trailors as $trailor)
		    <div class="row">
			<div class="col-md-6 center-block">
			    <figure>
				<img class="img-responsive"
                                      src="{{\Storage::disk('public')->url('/trailors/' . $trailor->photo_filename)}}"
                                         alt="{{$trailor->title}}"
			    </figure>
			</div>
			<div class="col-md-6 center-block">
                            <h1>{{$trailor->title}}</h1>
                            <p>{!!$trailor->description!!}</p>
                            <p class="text-success">{{$trailor->price}} eur</p>
			</div>
		    </div>
                    @endforeach
                   
		</div>
                  <div class="text-center">
		{{$trailors->links()}}
                    </div>
	    </section>
            

	   

	</main>



@endsection

