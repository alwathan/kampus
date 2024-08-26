@extends('admin')
@section('title', 'Data Artikel')
@section('content-admin')


<div class="overflow-hidden mb-1 d-flex justify-content-between">
    <h2 class="font-weight-normal text-7 mb-0"><strong class="font-weight-extra-bold">Artikel</strong> Terkini</h2>
    <div><a class='btn btn-outline btn-primary btn-sm' href='/admin/posts/create'>Tambah baru</a></div>
</div>
                    <div class="blog-posts">
                        @forelse ($posts as $post)
                            <article class="post post-medium">
                                <div class="row mb-3">
                                    <div class="col-lg-4">
                                        <div class="post-image">
                                            <a href="blog-post.html">
                                                <img src="/rimg/300/200/{{ $post->media }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="post-content">
                                            <h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2"><a href="/{{ $post->type }}/{{ $post->slug }}">{{ $post->title }}</a></h2>
                                            <p>{{ cut($post->content,21) }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="post-meta">
                                            <span><i class="far fa-calendar-alt"></i> {{ Carbon\Carbon::createFromTimeString($post->published_at)->isoFormat('dddd, D MMMM Y') }} </span>
                                            <span><i class="far fa-folder"></i> <a href="/indeks/{{ $post->type }}">{{ ucwords($post->type) }}</a></span>
                                            <span class="d-block d-sm-inline-block float-sm-right mt-3 mt-sm-0">
                                                <form method="POST" action="/admin/posts/{{$post->id}}">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                            
                                                    <div class="form-group">
                                                        <a class='btn btn-outline btn-info btn-xs text-1 text-uppercase' href='/admin/posts/{{ $post->id }}/edit'>Sunting</a> 
                                                        <input class='btn btn-outline btn-danger btn-xs text-1 text-uppercase' type="submit" class="btn btn-danger delete-user" value="Hapus">
                                                    </div>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @empty

                        @endforelse




                        {{ $posts->links() }}



                    </div>

@endsection
