@extends('layouts.app')

@section('title', $data->nama)

@section('content')


<div class="container mb-5 pb-4 mt-3">
    @include('layouts.breadcrumb')

					<div class="row pb-3 mt-4">
						<div class="col-lg-8">

							<div class="blog-posts single-post">

								<article class="post post-large blog-single-post border-0 m-0 p-0">

                                        {!! $data->html !!}

								</article>

							</div>
						</div>
						<div class="col-lg-4">
							<h2 class="font-weight-normal text-6"><strong class="font-weight-extra-bold">Pengumuman</strong> Terbaru</h2>

							<div class="testimonial testimonial-primary">
								<blockquote>
									<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
								</blockquote>
								<div class="testimonial-arrow-down"></div>
								<div class="testimonial-author">
									<div class="testimonial-author-thumbnail">
										<img src="img/clients/client-1.jpg" class="rounded-circle" alt="">
									</div>
									<p><strong class="font-weight-extra-bold">John Smith</strong><span>CEO &amp; Founder - Okler</span></p>
								</div>
							</div>

						</div>
					</div>


				</div>


@endsection
