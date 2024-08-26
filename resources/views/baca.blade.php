@extends('layouts.app')

@section('title', $data->title)

@section('content')


<div class="container mb-5 pb-4 mt-3">
    @include('layouts.breadcrumb')

					<div class="row pb-3 mt-4">
						<div class="col-lg-8">

							<div class="blog-posts single-post">

								<article class="post post-large blog-single-post border-0 m-0 p-0">

                                        <h2 class="font-weight-bold mt-2 mb-4">{{ $data->title }}</h2>
                                        {!! $data->content !!}

								</article>

							</div>
						</div>
						<div class="col-lg-4">
							@include('layouts.sidebar')
						</div>
					</div>


				</div>


@endsection
