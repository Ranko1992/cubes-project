@extends('admin.layout')

@section('content')
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="{{route('admin.cars.index')}}">Cars</a>
	</li>
	
	<li class="breadcrumb-item active">
		Add
	</li>
</ol>
<h1>Add new car</h1>
<hr>			

<div class="card mb-3">
	<div class="card-header">
		<i class="fa fa-table"></i> Add Car
	</div>
	<div class="card-body">

		<form action="" method="post">
			{{csrf_field()}}
			<div class="form-group">
				<label for="title">Naziv</label> 
				<input value="{{old('title')}}" name="title" placeholder="Enter Title" aria-describedby="titleHelpBlock" required="required" class="form-control here" type="text"> 
				@if($errors->has('title'))
				<div class="form-errors text-danger">
					@foreach($errors->get('title') as $errorMessage)
					<label class="error">{{$errorMessage}}</label>
					@endforeach
				</div>
				@endif
			</div> 
                        <div class="form-group">
				<label for="title">Model</label> 
				<input value="{{old('model')}}" name="title" placeholder="Enter Title" aria-describedby="titleHelpBlock" required="required" class="form-control here" type="text"> 
				@if($errors->has('model'))
				<div class="form-errors text-danger">
					@foreach($errors->get('model') as $errorMessage)
					<label class="error">{{$errorMessage}}</label>
					@endforeach
				</div>
				@endif
			</div> 
                        <div class="form-group">
				<label for="production_year">Godina proizvodnje</label> 
				<input value="{{old('production_year')}}" name="title" placeholder="Enter Title" aria-describedby="titleHelpBlock" required="required" class="form-control here" type="text"> 
				@if($errors->has('title'))
				<div class="form-errors text-danger">
					@foreach($errors->get('production_year') as $errorMessage)
					<label class="error">{{$errorMessage}}</label>
					@endforeach
				</div>
				@endif
			</div> 
                        <div class="form-group">
				<label for="miles">Predjena kilometraza</label> 
				<input value="{{old('miles')}}" name="title" placeholder="Enter Title" aria-describedby="titleHelpBlock" required="required" class="form-control here" type="text"> 
				@if($errors->has('title'))
				<div class="form-errors text-danger">
					@foreach($errors->get('miles') as $errorMessage)
					<label class="error">{{$errorMessage}}</label>
					@endforeach
				</div>
				@endif
			</div> 
			<div class="form-group">
				<label>Snaga u KWs</label> 
				<input value="{{old('power')}}" name="website_url" placeholder="Enter Website Url" class="form-control here" type="text"> 
				@if($errors->has('power'))
				<div class="form-errors text-danger">
					@foreach($errors->get('power') as $errorMessage)
					<label class="error">{{$errorMessage}}</label>
					@endforeach
				</div>
				@endif
			</div>
                        <div class="form-group">
				<label>Gorivo</label> 
				<input value="{{old('fuel')}}" name="website_url" placeholder="Enter Website Url" class="form-control here" type="text"> 
				@if($errors->has('fuel'))
				<div class="form-errors text-danger">
					@foreach($errors->get('fuel') as $errorMessage)
					<label class="error">{{$errorMessage}}</label>
					@endforeach
				</div>
				@endif
			</div>
                        
                        <!-- PHOTO FILES -->
                        <div class="form-group">
				<label>Website Url</label> 
				<input value="{{old('website_url')}}" name="website_url" placeholder="Enter Website Url" class="form-control here" type="text"> 
				@if($errors->has('website_url'))
				<div class="form-errors text-danger">
					@foreach($errors->get('website_url') as $errorMessage)
					<label class="error">{{$errorMessage}}</label>
					@endforeach
				</div>
				@endif
			</div>
                        <div class="form-group">
				<label>Website Url</label> 
				<input value="{{old('website_url')}}" name="website_url" placeholder="Enter Website Url" class="form-control here" type="text"> 
				@if($errors->has('website_url'))
				<div class="form-errors text-danger">
					@foreach($errors->get('website_url') as $errorMessage)
					<label class="error">{{$errorMessage}}</label>
					@endforeach
				</div>
				@endif
			</div>
                        <div class="form-group">
				<label>Website Url</label> 
				<input value="{{old('website_url')}}" name="website_url" placeholder="Enter Website Url" class="form-control here" type="text"> 
				@if($errors->has('website_url'))
				<div class="form-errors text-danger">
					@foreach($errors->get('website_url') as $errorMessage)
					<label class="error">{{$errorMessage}}</label>
					@endforeach
				</div>
				@endif
			</div>
                        <div class="form-group">
				<label>Website Url</label> 
				<input value="{{old('website_url')}}" name="website_url" placeholder="Enter Website Url" class="form-control here" type="text"> 
				@if($errors->has('website_url'))
				<div class="form-errors text-danger">
					@foreach($errors->get('website_url') as $errorMessage)
					<label class="error">{{$errorMessage}}</label>
					@endforeach
				</div>
				@endif
			</div>
                        <div class="form-group">
				<label>Website Url</label> 
				<input value="{{old('website_url')}}" name="website_url" placeholder="Enter Website Url" class="form-control here" type="text"> 
				@if($errors->has('website_url'))
				<div class="form-errors text-danger">
					@foreach($errors->get('website_url') as $errorMessage)
					<label class="error">{{$errorMessage}}</label>
					@endforeach
				</div>
				@endif
			</div>
                        <div class="form-group">
				<label>Website Url</label> 
				<input value="{{old('website_url')}}" name="website_url" placeholder="Enter Website Url" class="form-control here" type="text"> 
				@if($errors->has('website_url'))
				<div class="form-errors text-danger">
					@foreach($errors->get('website_url') as $errorMessage)
					<label class="error">{{$errorMessage}}</label>
					@endforeach
				</div>
				@endif
			</div>
                        <div class="form-group">
				<label>Website Url</label> 
				<input value="{{old('website_url')}}" name="website_url" placeholder="Enter Website Url" class="form-control here" type="text"> 
				@if($errors->has('website_url'))
				<div class="form-errors text-danger">
					@foreach($errors->get('website_url') as $errorMessage)
					<label class="error">{{$errorMessage}}</label>
					@endforeach
				</div>
				@endif
			</div>
                        
                        <!-- END OF PHOTO FILES -->
                        
                        <div class="form-group">
				<label>Opis</label> 
				<input value="{{old('description')}}" name="website_url" placeholder="Enter Website Url" class="form-control here" type="text"> 
				@if($errors->has('description'))
				<div class="form-errors text-danger">
					@foreach($errors->get('description') as $errorMessage)
					<label class="error">{{$errorMessage}}</label>
					@endforeach
				</div>
				@endif
			</div>
                        <div class="form-group">
				<label>Specifikacija</label> 
				<input value="{{old('specification')}}" name="website_url" placeholder="Enter Website Url" class="form-control here" type="text"> 
				@if($errors->has('specification'))
				<div class="form-errors text-danger">
					@foreach($errors->get('specification') as $errorMessage)
					<label class="error">{{$errorMessage}}</label>
					@endforeach
				</div>
				@endif
			</div>
                        <div class="form-group">
				<label>Price</label> 
				<input value="{{old('price')}}" name="website_url" placeholder="Enter Website Url" class="form-control here" type="text"> 
				@if($errors->has('price'))
				<div class="form-errors text-danger">
					@foreach($errors->get('price') as $errorMessage)
					<label class="error">{{$errorMessage}}</label>
					@endforeach
				</div>
				@endif
			</div>
			<div class="form-group text-right">
				<a href="{{route('admin.cars.index')}}" class="btn btn-secondary">Cancel</a>
				<button name="submit" type="submit" class="btn btn-primary">Save</button>
			</div>
		</form>
	</div>
</div>
@endsection