@extends('admin.layout')

@section('content')
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="#">Cars</a>
	</li>
</ol>
<h1>Cars</h1>
<hr>			

@include('admin.global-partials.system-messages')

<div class="card mb-3">
	<div class="card-header">
		<i class="fa fa-table"></i> Cars

		<div class="btn-group btn-group-sm float-right">
			<a class="btn btn-secondary" href="{{route('admin.cars.add')}}">
				<i class="fa fa-plus"></i>
				Add Car
			</a>
		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="records-table" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>#</th>
						<th>Naziv</th>
						<th>Model</th>
                                                <th>Godina proizvodnje</th>
						<th>Predjena kilometraza</th>
                                                <th>Snaga u KWS</th>
						<th>Gorivo</th>
                                                <th>Vodeca slika</th>
						<th>Slika 1</th>
                                                <th>Slika 2</th>
                                                <th>Slika 3</th>
                                                <th>Slika 4</th>
                                                <th>Slika 5</th>
                                                <th>Slika 6</th>
                                                <th>Opis</th>
						<th>Specifikacija</th>
                                                <th>Cena</th>
						<th class="text-center">Actions</th>
					</tr>
				</thead>
				<tbody>
					
					@foreach($cars as $car)       
					<tr>
						<td>{{$car->id}}</td>
						<td>{{$car->title}}</td>
						<td>{{$car->model}}</td>
                                                <td>{{$car->production_yer}}</td>
						<td>{{$car->miles}}</td>
						<td>{{$car->power}}</td>
                                                <td>{{$car->fuel}}</td>
						<td>{{$car->photo_filename}}</td>
						<td>{{$car->photo_filename_1}}</td>
                                                <td>{{$car->photo_filename_2}}</td>
						<td>{{$car->photo_filename_3}}</td>
						<td>{{$car->photo_filename_4}}</td>
                                                <td>{{$car->photo_filename_5}}</td>
                                                <td>{{$car->photo_filename_6}}</td>
                                                <td>{{$car->description}}</td>
                                                <td>{{$car->specification}}</td>
                                                <td>{{$car->price}}</td>
						<td class="text-center">
							<div class="btn-group">
								<a 
									class="btn btn-secondary"
									href="{{route('admin.cars.edit', ['id' => $car->id])}}"
									title="edit"
								><i class="fa fa-pencil"></i></a>
								
								<button 
									class="btn btn-secondary" 
									title="delete" 
									data-action="delete"
									data-id="{{$car->id}}"
								>
									<i class="fa fa-trash"></i>
								</button>
							</div>
						</td>
					</tr>
					@endforeach
					
				</tbody>
			</table>
		</div>
	</div>
</div>


<form method="post" action="{{route('admin.cars.delete')}}" class="modal fade" id="delete-record-modal" tabindex="-1" role="dialog" aria-hidden="true">
	{{csrf_field()}}
	<input type="hidden" name="id" value="">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Delete Car</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Are you sure you want to delete car?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-danger">Delete</button>
			</div>
		</div>
	</div>
</form>
@endsection

@push('footer_javascript')
<script>
	$('#records-table').on('click', '[data-action="delete"]', function(e) {
		
		e.preventDefault();
		
		var target = $(this);
		
		var id = target.attr('data-id');
		
		var deletePopup = $('#delete-record-modal');
		
		deletePopup.find('[name="id"]').val(id);
		
		deletePopup.modal('show');
	});
	
</script>
@endpush