@extends('admin')

@section('title', 'Buat Posting')

@section('css-js')
    <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
    @include('ckfinder::setup')
@endsection

@section('content-admin')
							
							
							<form class="contact-form" action="/admin/posts" method="POST" novalidate="novalidate">
								@csrf
								@if( ! empty($data->id) )
									<input type='hidden' name='id' value='{{ $data->id }}'>
								@endif
								<input type='hidden' name='user_id' value='{{ Auth::user()->id }}'>
								<input type='text' name='user_id' value="{{ config('app.url') }}">
								<div class="form-row">
									<div class="form-group col">
										<label class="font-weight-bold text-dark text-2">Judul</label>
										<input type="text" value="{{ $data->title }}" placeholder="Judul posting." maxlength="100" class="form-control" name="title" required="">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label class="required font-weight-bold text-dark text-2">Konten</label>
										<textarea id="ckeditor"  maxlength="5000" placeholder="Isi posting." rows="8" class="form-control" name="content" required="">{{ $data->content}}</textarea>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="submit" value="Simpan" class="btn btn-primary btn-modern" data-loading-text="Loading...">
									</div>
								</div>
							</form>

						
    <script>
		
        ClassicEditor
			.create( document.querySelector( '#ckeditor' ), {
				ckfinder: {
					uploadUrl: '/ckfinder/connector?command=QuickUpload&type=Files&responseType=json',
				},
				toolbar: [ 	'bold', 'italic', 'strikethrough', 'underline', '|', 
							'ckfinder', 'imageUpload', '|', 'heading', '|', 
							'bold', 'italic', '|', 
							'undo', 'redo','MediaEmbed' 
						 ]
			} )
			.catch( error => {
				console.error( error );
			} );
    </script>

					
@endsection