@extends('admin')

@section('title', 'Form User')

@section('css-js')
    <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
    @include('ckfinder::setup')
	<style>
		.ck-editor__editable {
			min-height: 200px;
		}
	</style>
@endsection

@section('content-admin')
							
							
							<form class="contact-form" action="/admin/users" method="POST" novalidate="novalidate">
								@csrf
								@if( ! empty($data->id) )
									<input type='hidden' name='id' value='{{ $data->id }}'>
								@endif
								<div class="form-row">
									<div class="form-group col">
										<label class="font-weight-bold text-dark text-2">Nama Lengkap</label>
										<input type="text" value="{{ $data->name }}" placeholder="Nama Lengkap" maxlength="100" class="form-control" name="name" required="">
									</div>
								</div>

								<div class="form-row">
									<div class="form-group col">
										<label class="font-weight-bold text-dark text-2">Email</label>
										<input type="text" value="{{ $data->email }}" placeholder="Email Anda" maxlength="100" class="form-control" name="email" required="">
									</div>
								</div>

								<div class="form-row">
									<div class="form-group col">
										<label class="font-weight-bold text-dark text-2">Password</label>
										<input type="password" placeholder="Kosongkan jika tidak mau diubah" maxlength="100" class="form-control" name="password" required="">
									</div>
								</div>
								
								<div class="form-row mt-4">
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
				toolbar: [
						'heading', '|',
						'bold', 'italic', 'strikethrough', 'underline', 'subscript', 'superscript', '|',
						'bulletedList', 'numberedList', 'todoList', '|',
						'outdent', 'indent', '|',
						'code', 'codeBlock', '|',
						'link', 'uploadImage', 'MediaEmbed', 'ckfinder', 'insertTable', 'blockQuote', '|',
						'undo', 'redo'
					]
				
			} )
			.catch( error => {
				console.error( error );
			} );
    </script>

					
@endsection