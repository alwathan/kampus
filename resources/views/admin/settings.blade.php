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

<script>
    function openPopup() {
        CKFinder.popup( {
            chooseFiles: true,
            onInit: function( finder ) {
                finder.on( 'files:choose', function( evt ) {
                    var file = evt.data.files.first();
                    document.getElementById( 'url' ).value = file.getUrl();
                } );
                finder.on( 'file:choose:resizedImage', function( evt ) {
                    document.getElementById( 'url' ).value = evt.data.resizedUrl;
                } );
            }
        } );
    }
</script>

@forelse ($collection as $item)
    <form class="contact-form" action="/admin/settings/{{ $item->id }}" method="POST" novalidate="novalidate">
        @csrf
        @method('PUT')
            <input type='hidden' name='id' value='{{ $item->id }}'>
            <div class="form-group row">
                <label class="col-lg-3 control-label text-lg-right pt-2">{{ $item->name }}</label>
                <div class="col-lg-9">
                    <div class="input-group mb-3">
                        @if ($item->key == 'vhome')
                            <input onclick="openPopup()" id="url" name='value' value='{{ $item->value }}' type="text" class="form-control">
                        @else
                            <input name='value' value='{{ $item->value }}' type="text" class="form-control">
                        @endif
                        <span class="input-group-append">
                            <button type="submit" class="btn btn-success" type="button">Simpan</button>
                        </span>
                    </div>
                </div>
            </div>
    </form>
@empty
    Tidak ada data
@endforelse





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
