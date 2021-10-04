@extends('admin')

@section('title', 'Form Menu')

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
							
							
							<form class="contact-form" action="/admin/menus" method="POST" novalidate="novalidate">
								@csrf
								@if( ! empty($data->id) )
									<input type='hidden' name='id' value='{{ $data->id }}'>
								@endif

								<div class="form-row">
									<div class="form-group col">
										<label class="font-weight-bold text-dark text-2">Menu Induk / Utama</label>
										<div class="">
											<select name='parent_id' data-plugin-selecttwo="" class="form-control populate">
												<option value="0">- - - - - - - - </option>
												{{menu_select_input(0,0,$data->parent_id)}}
											</select>
										</div>
									</div>
								</div>
								
								<div class="form-row">
									<div class="form-group col">
										<label class="font-weight-bold text-dark text-2">Jenis navigasi</label>
										<div class="">
											<select name='jenis' class="form-control form-control mb-3">
												<option value='halaman' {{ $data->jenis=='halaman' ? 'selected' : '' }}>Halaman</option>
												<option value='kategori' {{ $data->jenis=='kategori' ? 'selected' : '' }}>Kategori</option>
												<option value='link' {{ $data->jenis=='link' ? 'selected' : '' }}>Link</option>
												<option value='nama' {{ $data->jenis=='nama' ? 'selected' : '' }}>Nama kelompok navigasi</option>
												<option value='induk' {{ $data->jenis=='induk' ? 'selected' : '' }}>Induk</option>
											</select>
										</div>
									</div>
								</div>

								<div class="form-row">
									<div class="form-group col">
										<label class="font-weight-bold text-dark text-2">Nama Menu</label>
										<input type="text" value="{{ $data->nama }}" placeholder="Nama menu." maxlength="100" class="form-control" name="nama" required>
									</div>
								</div>

								<div class="form-row">
									<div class="form-group col">
										<label class="font-weight-bold text-dark text-2">Link Url</label>
										<input type="text" value="{{ $data->url }}" placeholder="Link url" maxlength="100" class="form-control" name="url">
									</div>
								</div>

								<div class="form-row">
									<div class="form-group col">
										<label class="required font-weight-bold text-dark text-2">Konten</label>
										<textarea id="ckeditor"  maxlength="5000" placeholder="Isi halaman" rows="8" class="form-control" name="html" required="">{{ $data->html}}</textarea>
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