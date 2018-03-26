@extends('admin.layout')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{route('admin.slep-sluzba.index')}}">Trailors</a>
    </li>

    <li class="breadcrumb-item active">
        Edit
    </li>
</ol>
<h1>Edit trailor</h1>
<hr>			

<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Edit Trailors: {{$trailor->title}}
    </div>
    <div class="card-body">

        <form id="row-form" action="" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="row">
                <div class="form-group">
                    <label for="title">Model</label> 
                    <input value="{{old('title', $trailor->title)}}" name="title" placeholder="Enter Model" aria-describedby="titleHelpBlock" required="required" class="form-control here" type="text"> 
                    @if($errors->has('title'))
                    <div class="form-errors text-danger">
                        @foreach($errors->get('title') as $errorMessage)
                        <label class="error">{{$errorMessage}}</label>
                        @endforeach
                    </div>
                    @endif
                </div> 

            </div>
            <div class="row">
                <fieldset class="col-lg-12">
                    <legend>Slika</legend>
                    <div class="text-center mb-5">
                        @if($trailor->photo_filename && \Storage::disk('public')->exists('/trailors/' . $trailor->photo_filename))
                        <img 
                            class="img-fluid img-thumbnail" 
                            src="{{\Storage::disk('public')->url('/trailors/' . $trailor->photo_filename)}}" 
                            alt="placeholder">
                        @else
                        <img class="img-fluid img-thumbnail" src="http://via.placeholder.com/640x480" alt="placeholder">
                        @endif

                    </div>
                    <div class="form-group">
                        <label>Upload photo</label>
                        <div class="custom-file">
                            <input name="trailor_photo_file" type="file" class="custom-file-input" id="trailor_photo_file">
                            <label class="custom-file-label" for="trailor_photo_file">Choose photo</label>
                        </div>
                        @if($errors->has('trailor_photo_file'))
                        <div class="form-errors text-danger">
                            @foreach($errors->get('trailor_photo_file') as $errorMessage)
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
                <textarea name="description" placeholder="Enter Description" class="form-control" rows="12">{{old('description', $trailor->description)}}</textarea>
                @if($errors->has('description'))
                <div class="form-errors text-danger">
                    @foreach($errors->get('description') as $errorMessage)
                    <label class="error">{{$errorMessage}}</label>
                    @endforeach
                </div>
                @endif
            </div> 

            <div class="form-group">
                <label>Price</label> 
                <input value="{{old('price',$trailor->price)}}" name="price" placeholder="Enter Price" class="form-control here" type="text"> 
                @if($errors->has('price'))
                <div class="form-errors text-danger">
                    @foreach($errors->get('price') as $errorMessage)
                    <label class="error">{{$errorMessage}}</label>
                    @endforeach
                </div>
                @endif
            </div>
            <div class="form-group text-right">
                <a href="{{route('admin.slep-sluzba.index')}}" class="btn btn-secondary">Cancel</a>
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

            });</script>
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