@extends('admin')

@section('title', 'Buat Posting')

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


							<form class="contact-form" action="/admin/posts" method="POST" novalidate="novalidate">
								@csrf
								@if( ! empty($data->id) )
									<input type='hidden' name='id' value='{{ $data->id }}'>
								@endif
								<input type='hidden' name='user_id' value='{{ Auth::user()->id }}'>
                                <div class="form-row">
									<div class="form-group col">
										<label class="font-weight-bold text-dark text-2">Menu Induk / Utama</label>
										<div class="">
											<select name='type' data-plugin-selecttwo="" class="form-control populate">
												{{kategori_select_input($data->type)}}
											</select>
										</div>
									</div>
								</div>
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
										<label class="font-weight-bold text-dark text-2">Diterbitkan / Tanggal Agenda</label>
										<input type="datetime-local" value="{{ !empty($data->published_at) ? date('Y-m-d\TH:i:s', strtotime($data->published_at)):date('Y-m-d\TH:i:s') }}" placeholder="Diterbitkan pada" class="form-control" name="published_at" >
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
					uploadUrl: '{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files&responseType=json',
                    //uploadUrl: '{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files'
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
