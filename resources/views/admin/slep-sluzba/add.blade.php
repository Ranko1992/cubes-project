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

        <form id="row-form" action="" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="row">
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
                    <input value="{{old('model')}}" name="model" placeholder="Enter Model" aria-describedby="titleHelpBlock" required="required" class="form-control here" type="text"> 
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
                    <input value="{{old('production_year')}}" name="production_year" placeholder="Enter production year" aria-describedby="titleHelpBlock" required="required" class="form-control here" type="text"> 
                    @if($errors->has('production_year'))
                    <div class="form-errors text-danger">
                        @foreach($errors->get('production_year') as $errorMessage)
                        <label class="error">{{$errorMessage}}</label>
                        @endforeach
                    </div>
                    @endif
                </div> 
                <div class="form-group">
                    <label for="miles">Predjena kilometraza</label> 
                    <input value="{{old('miles')}}" name="miles" placeholder="Enter car's miles" aria-describedby="titleHelpBlock" required="required" class="form-control here" type="text"> 
                    @if($errors->has('miles'))
                    <div class="form-errors text-danger">
                        @foreach($errors->get('miles') as $errorMessage)
                        <label class="error">{{$errorMessage}}</label>
                        @endforeach
                    </div>
                    @endif
                </div> 
                <div class="form-group">
                    <label>Snaga u KWs</label> 
                    <input value="{{old('power')}}" name="power" placeholder="Enter cars's power" class="form-control here" type="text"> 
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
                    <input value="{{old('fuel')}}" name="fuel" placeholder="Enter car's fuel" class="form-control here" type="text"> 
                    @if($errors->has('fuel'))
                    <div class="form-errors text-danger">
                        @foreach($errors->get('fuel') as $errorMessage)
                        <label class="error">{{$errorMessage}}</label>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <fieldset class="col-lg-12">
                    <legend>Vodeca slika</legend>
                    <div class="text-center mb-5">
                        <img class="img-fluid img-thumbnail" src="http://via.placeholder.com/640x480" alt="placeholder">
                    </div>

                    <div class="form-group">
                        <label>Upload photo</label>
                        <div class="custom-file">
                            <input name="car_photo_file" type="file" class="custom-file-input" id="car_photo_file">
                            <label class="custom-file-label" for="car_photo_file">Choose photo</label>
                        </div>
                        @if($errors->has('car_photo_file'))
                        <div class="form-errors text-danger">
                            @foreach($errors->get('car_photo_file') as $errorMessage)
                            <label class="error">{{$errorMessage}}</label>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </fieldset>
            </div>
            <div class="row">  
                <!-- PHOTO FILES -->
                <fieldset class="col-lg-2">
                    <legend>Slika 1</legend>
                    <div class="text-center mb-5">
                        <img class="img-fluid img-thumbnail" src="http://via.placeholder.com/640x480" alt="placeholder">
                    </div>

                    <div class="form-group">
                        <label>Upload photo</label>
                        <div class="custom-file">
                            <input name="car_photo_file_1" type="file" class="custom-file-input" id="car_photo_file_1">
                            <label class="custom-file-label" for="car_photo_file_1">Choose photo</label>
                        </div>
                        @if($errors->has('car_photo_file_1'))
                        <div class="form-errors text-danger">
                            @foreach($errors->get('car_photo_file_1') as $errorMessage)
                            <label class="error">{{$errorMessage}}</label>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </fieldset>
                <fieldset class="col-lg-2">
                    <legend>Slika 2</legend>
                    <div class="text-center mb-5">
                        <img class="img-fluid img-thumbnail" src="http://via.placeholder.com/640x480" alt="placeholder">
                    </div>

                    <div class="form-group">
                        <label>Upload photo</label>
                        <div class="custom-file">
                            <input name="car_photo_file_2" type="file" class="custom-file-input" id="car_photo_file_2">
                            <label class="custom-file-label" for="car_photo_file_2">Choose photo</label>
                        </div>
                        @if($errors->has('car_photo_file_2'))
                        <div class="form-errors text-danger">
                            @foreach($errors->get('car_photo_file_2') as $errorMessage)
                            <label class="error">{{$errorMessage}}</label>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </fieldset>
                <fieldset class="col-lg-2">
                    <legend>Slika 3</legend>
                    <div class="text-center mb-5">
                        <img class="img-fluid img-thumbnail" src="http://via.placeholder.com/640x480" alt="placeholder">
                    </div>

                    <div class="form-group">
                        <label>Upload photo</label>
                        <div class="custom-file">
                            <input name="car_photo_file_3" type="file" class="custom-file-input" id="car_photo_file_3">
                            <label class="custom-file-label" for="car_photo_file_3">Choose photo</label>
                        </div>
                        @if($errors->has('car_photo_file_3'))
                        <div class="form-errors text-danger">
                            @foreach($errors->get('car_photo_file_3') as $errorMessage)
                            <label class="error">{{$errorMessage}}</label>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </fieldset>
                <fieldset class="col-lg-2">
                    <legend>Slika 4</legend>
                    <div class="text-center mb-5">
                        <img class="img-fluid img-thumbnail" src="http://via.placeholder.com/640x480" alt="placeholder">
                    </div>

                    <div class="form-group">
                        <label>Upload photo</label>
                        <div class="custom-file">
                            <input name="car_photo_file_4" type="file" class="custom-file-input" id="car_photo_file_4">
                            <label class="custom-file-label" for="car_photo_file_4">Choose photo</label>
                        </div>
                        @if($errors->has('car_photo_file_4'))
                        <div class="form-errors text-danger">
                            @foreach($errors->get('car_photo_file_4') as $errorMessage)
                            <label class="error">{{$errorMessage}}</label>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </fieldset>
                <fieldset class="col-lg-2">
                    <legend>Slika 5</legend>
                    <div class="text-center mb-5">
                        <img class="img-fluid img-thumbnail" src="http://via.placeholder.com/640x480" alt="placeholder">
                    </div>

                    <div class="form-group">
                        <label>Upload photo</label>
                        <div class="custom-file">
                            <input name="car_photo_file_5" type="file" class="custom-file-input" id="car_photo_file_5">
                            <label class="custom-file-label" for="car_photo_file_5">Choose photo</label>
                        </div>
                        @if($errors->has('car_photo_file_5'))
                        <div class="form-errors text-danger">
                            @foreach($errors->get('car_photo_file_5') as $errorMessage)
                            <label class="error">{{$errorMessage}}</label>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </fieldset>
                <fieldset class="col-lg-2">
                    <legend>Slika 6</legend>
                    <div class="text-center mb-5">
                        <img class="img-fluid img-thumbnail" src="http://via.placeholder.com/640x480" alt="placeholder">
                    </div>

                    <div class="form-group">
                        <label>Upload photo</label>
                        <div class="custom-file">
                            <input name="car_photo_file_6" type="file" class="custom-file-input" id="car_photo_file_6">
                            <label class="custom-file-label" for="car_photo_file_6">Choose photo</label>
                        </div>
                        @if($errors->has('car_photo_file_6'))
                        <div class="form-errors text-danger">
                            @foreach($errors->get('car_photo_file_6') as $errorMessage)
                            <label class="error">{{$errorMessage}}</label>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </fieldset>
            </div>


            <!-- END OF PHOTO FILES -->

            <div class="form-group">
                <label>Opis</label> 
                <textarea name="description" placeholder="Enter Description" class="form-control" rows="12">{{old('description')}}</textarea>
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
                <textarea name="specification" placeholder="Enter Specification" class="form-control" rows="12">{{old('specification')}}</textarea>
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
                <input value="{{old('price')}}" name="price" placeholder="Enter Price" class="form-control here" type="text"> 
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

@push('footer_javascript')
<script src="{{url('/skins/admin/vendor/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
<script src="{{url('/skins/admin/vendor/ckeditor/adapters/jquery.js')}}" type="text/javascript"></script>

<script>
    $('#row-form [name="description"]').ckeditor({
    'width': '800px',
    'height': '700px',
    'bodyId': 'content',
    'bodyClass': 'block',
    'allowedContent': true,
    //'forcePasteAsPlainText': true, // disable paste from word
    'contentsCss': [
        "{{url('/skins/admin/vendor/bootstrap/css/bootstrap.min.css')}}",
        "{{url('/skins/admin/vendor/font-awesome/css/font-awesome.min.css')}}",
        "{{url('/skins/admin/css/sb-admin.css')}}",
        "{{url('/skins/admin/vendor/jquery/jquery.min.js')}}",
        "{{url('/skins/admin/vendor/jquery-easing/jquery.easing.min.js')}}",
        "{{url('/skins/admin/js/sb-admin.min.js')}}"
    ],
    'toolbarGroups': [
        {name: 'document', groups: ['mode', 'document', 'doctools']},
        {name: 'clipboard', groups: ['clipboard', 'undo']},
        {name: 'editing', groups: ['find', 'selection', 'spellchecker', 'editing']},
        {name: 'forms', groups: ['forms']},
        '/',
        {name: 'basicstyles', groups: ['basicstyles', 'cleanup']},
        {name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph']},
        {name: 'links', groups: ['links']},
        {name: 'insert', groups: ['insert']},
        '/',
        {name: 'styles', groups: ['styles']},
        {name: 'colors', groups: ['colors']},
        {name: 'tools', groups: ['tools']},
        {name: 'others', groups: ['others']},
        {name: 'about', groups: ['about']}
    ],
    'removeButtons': 'Print,NewPage,Preview,Save,Form,Checkbox,Radio,Textarea,TextField,Select,ImageButton,Button,HiddenField,Iframe',

    'filebrowserBrowseUrl': "{{route('admin.filemanager.popup')}}"

});
</script>
<script>
    $('#row-form [name="specification"]').ckeditor({
    'width': '800px',
    'height': '700px',
    'bodyId': 'content',
    'bodyClass': 'block',
    'allowedContent': true,
    //'forcePasteAsPlainText': true, // disable paste from word
    'contentsCss': [
        "{{url('/skins/admin/vendor/bootstrap/css/bootstrap.min.css')}}",
        "{{url('/skins/admin/vendor/font-awesome/css/font-awesome.min.css')}}",
        "{{url('/skins/admin/css/sb-admin.css')}}",
        "{{url('/skins/admin/vendor/jquery/jquery.min.js')}}",
        "{{url('/skins/admin/vendor/jquery-easing/jquery.easing.min.js')}}",
        "{{url('/skins/admin/js/sb-admin.min.js')}}"
    ],
    'toolbarGroups': [
        {name: 'document', groups: ['mode', 'document', 'doctools']},
        {name: 'clipboard', groups: ['clipboard', 'undo']},
        {name: 'editing', groups: ['find', 'selection', 'spellchecker', 'editing']},
        {name: 'forms', groups: ['forms']},
        '/',
        {name: 'basicstyles', groups: ['basicstyles', 'cleanup']},
        {name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph']},
        {name: 'links', groups: ['links']},
        {name: 'insert', groups: ['insert']},
        '/',
        {name: 'styles', groups: ['styles']},
        {name: 'colors', groups: ['colors']},
        {name: 'tools', groups: ['tools']},
        {name: 'others', groups: ['others']},
        {name: 'about', groups: ['about']}
    ],
    'removeButtons': 'Print,NewPage,Preview,Save,Form,Checkbox,Radio,Textarea,TextField,Select,ImageButton,Button,HiddenField,Iframe',

    'filebrowserBrowseUrl': "{{route('admin.filemanager.popup')}}"

});
</script>



@endpush