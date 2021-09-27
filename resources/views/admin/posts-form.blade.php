@extends('admin')

@section('content-admin')
							
							
							<form class="contact-form" action="/admin/posts" method="POST" novalidate="novalidate">
								@csrf
								@if( ! empty($data->id) )
									<input type='hidden' name='id' value='{{ $data->id }}'>
								@endif
								<input type='hidden' name='user_id' value='{{ Auth::user()->id }}'>
								<div class="form-row">
									<div class="form-group col">
										<label class="font-weight-bold text-dark text-2">Judul</label>
										<input type="text" value="{{ $data->title }}" placeholder="Judul posting." maxlength="100" class="form-control" name="title" required="">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<label class="required font-weight-bold text-dark text-2">Konten</label>
										<textarea  maxlength="5000" placeholder="Isi posting." rows="8" class="form-control" name="content" required="">{{ $data->content}}</textarea>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="submit" value="Simpan" class="btn btn-primary btn-modern" data-loading-text="Loading...">
									</div>
								</div>
							</form>

					
@endsection