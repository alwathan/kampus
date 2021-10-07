@extends('layouts.app')

@section('title', "Indeks")

@section('content')


<div class="container mb-5 pb-4 mt-3">
    @include('layouts.breadcrumb')

					<div class="row pb-3 mt-4">
						<div class="col-lg-8">
                            <h2 class="font-weight-normal text-6"><strong class="font-weight-extra-bold">{{ $kategori }}</strong> Terbaru</h2>
							<div class="blog-posts">
                                @forelse ($data as $post)
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
                                                    <span class="d-block d-sm-inline-block float-sm-right mt-3 mt-sm-0"><a href="/{{ $post->type }}/{{ $post->slug }}" class="btn btn-xs btn-light text-1 text-uppercase">selanjutnya</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                @empty

                                @endforelse




								{{ $data->links() }}



							</div>
						</div>
						<div class="col-lg-4">
							@include('layouts.sidebar')
						</div>
					</div>


				</div>


@endsection
