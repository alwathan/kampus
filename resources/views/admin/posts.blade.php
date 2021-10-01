@extends('admin')

@section('content-admin')


<div class="overflow-hidden mb-1 d-flex justify-content-between">
    <h2 class="font-weight-normal text-7 mb-0"><strong class="font-weight-extra-bold">Artikel</strong> Terkini</h2>
    <div><a class='btn btn-outline btn-primary btn-sm' href='/admin/posts/create'>Tambah baru</a></div>
</div>
                     @foreach($posts as $post)
                        <div class="media mt-4">
								<img class="align-self-center mr-3" src="/rimg/180/120/{{ $post->media }}" alt="Generic placeholder image">
								<div class="media-body">
									<h5 class="mt-0"><a class="tag" href="{{ $post->slug }}">{{ $post->title }}</a></h5>
									<p>{{ cut($post->content,30) }}</p>
                                </div>
							</div>
                        <div class="d-flex justify-content-end">
                            <div><a class='btn btn-outline btn-info btn-xs' href='/admin/posts/{{ $post->id }}/edit'>Sunting</a> <a class='btn btn-outline btn-danger btn-xs' href='/admin/posts/create'>Hapus</a></div>
                            
                        </div>
                        <hr/>
                    @endforeach
							
@endsection