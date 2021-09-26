@extends('layouts.app')

@section('title', 'Inkadha - Institut Kariman Wirayudha')


@section('content')
    <div class="slider-container rev_slider_wrapper" style="height: 670px;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 670, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': true }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
						<ul>
							
							<li class="slide-overlay" data-transition="fade">
								<img src="img/blank.gif"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<div class="rs-background-video-layer" 
									data-forcerewind="on" 
									data-volume="mute" 
									data-videowidth="100%" 
									data-videoheight="100%" 
									data-videomp4="video/c.mp4" 
									data-videopreload="preload" 
									data-videoloop="loop" 
									data-forceCover="1" 
									data-aspectratio="16:9" 
									data-autoplay="true" 
									data-autoplayonlyfirsttime="false" 
									data-nextslideatend="false">
								</div>
								
								<div class="tp-caption"
									data-x="center" data-hoffset="['-125','-125','-125','-215']"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="1000"
									data-transform_in="x:[-300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;" style="z-index: 5;"><img src="img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption text-color-light font-weight-normal"
									data-x="center"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="700"
									data-fontsize="['22','22','22','40']"
									data-lineheight="['25','25','25','45']"
									data-transform_in="y:[-50%];opacity:0;s:500;" style="z-index: 5;">Selamat Datang di Website</div>

								
								<div class="tp-caption"
									data-x="center" data-hoffset="['125','125','125','215']"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="1000"
									data-transform_in="x:[300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;" style="z-index: 5;"><img src="img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
									data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center"
									data-y="center"
									data-fontsize="['50','50','50','90']"
									data-lineheight="['55','55','55','95']" style="z-index: 5;">I N K A D H A </div>

								<div class="tp-caption font-weight-light"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['40','40','40','80']"
									data-fontsize="['18','18','18','50']"
									data-lineheight="['20','20','20','55']"
									style="color: #b5b5b5; z-index: 5;">Institut Kariman Wirayudha, Gapura Sumenep</div>
								
								<a class="tp-caption slider-scroll-button"
									data-hash
									data-hash-offset="80"
									href="#main"
									data-x="center"
									data-y="bottom" data-voffset="['30','30','30','30']"
									data-start="1600"					 
									data-transform_in="y:[100%];s:500;"
									data-transform_out="y:[100%];opacity:0;s:500;"
									data-mask_in="x:0px;y:0px;" style="z-index: 5;"></a>

								<div class="tp-dottedoverlay tp-opacity-overlay"></div>
							</li>
							
						</ul>
					</div>
				</div>
				<!--
				<div class="home-intro bg-primary" id="home-intro">
					<div class="container">
				
						<div class="row align-items-center">
							<div class="col-lg-8">
								<p>
									The fastest way to grow your business with the leader in <span class="highlighted-word">Technology</span>
									<span>Check out our options and features included.</span>
								</p>
							</div>
							<div class="col-lg-4">
								<div class="get-started text-left text-lg-right">
									<a href="#" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Get Started Now</a>
									<div class="learn-more">or <a href="index.html">learn more.</a></div>
								</div>
							</div>
						</div>
				
					</div>
				</div>
				<div class="container">
				
					<div class="row text-center pt-3">
						<div class="col-md-10 mx-md-auto">
							<h1 class="word-rotator slide font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeInUpShorter">
								<span>Porto is </span>
								<span class="word-rotator-words bg-dark">
									<b class="is-visible">incredibly</b>
									<b>especially</b>
									<b>extremely</b>
								</span>
								<span> beautiful and fully responsive.</span>
							</h1>
							<p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo.
							</p>
						</div>
					</div>
				
				</div>
				
				<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
					<div class="home-concept mt-5">
						<div class="container">
				
							<div class="row text-center">
								<span class="sun"></span>
								<span class="cloud"></span>
								<div class="col-lg-2 ml-lg-auto">
									<div class="process-image">
										<img src="img/home/home-concept-item-1.png" alt="" />
										<strong>Strategy</strong>
									</div>
								</div>
								<div class="col-lg-2">
									<div class="process-image process-image-on-middle">
										<img src="img/home/home-concept-item-2.png" alt="" />
										<strong>Planning</strong>
									</div>
								</div>
								<div class="col-lg-2">
									<div class="process-image">
										<img src="img/home/home-concept-item-3.png" alt="" />
										<strong>Build</strong>
									</div>
								</div>
								<div class="col-lg-4 ml-lg-auto">
									<div class="project-image">
										<div id="fcSlideshow" class="fc-slideshow">
											<ul class="fc-slides">
												<li><a href="portfolio-single-wide-slider.html"><img class="img-responsive" src="img/projects/project-home-1.jpg" alt="" /></a></li>
												<li><a href="portfolio-single-wide-slider.html"><img class="img-responsive" src="img/projects/project-home-2.jpg" alt="" /></a></li>
												<li><a href="portfolio-single-wide-slider.html"><img class="img-responsive" src="img/projects/project-home-3.jpg" alt="" /></a></li>
											</ul>
										</div>
										<strong class="our-work">Our Work</strong>
									</div>
								</div>
							</div>
				
						</div>
					</div>
				</div>
-->
				<div class="container mb-5 pb-4">
								
					<div class="row pb-3 mt-4">
						<div class="col-lg-8">
							<h2 class="font-weight-normal text-7"><strong class="font-weight-extra-bold">Berita</strong> Terbaru</h2>
							<div class="row">
								
										<div class="col-lg-4 mb-4">
											<article class="post post-large pb-5">
												<div class="post-image">
													<a href="blog-post.html">
														<img src="img/blog/medium/blog-11.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
													</a>
												</div>
											
												<div class="post-date">
													<span class="day">15</span>
													<span class="month">Jan</span>
												</div>
											
												<div class="post-content">
											
													<h4><a href="blog-post.html" class="text-decoration-none">This is a stardard post with preview image</a></h4>
													<p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquam nisi ultricies nisi luctus, sed fermentum.</p>
													<a href="blog-post.html" class="read-more text-color-dark font-weight-bold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
											
												</div>
											</article>
										</div>
										<div class="col-lg-4 mb-4">
											<article class="post post-large pb-5">
												<div class="post-image">
													<div class="owl-carousel owl-theme show-nav-hover dots-inside nav-inside nav-style-1 nav-light owl-loaded owl-drag owl-carousel-init" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': true}" style="height: auto;">
														
														
														
													<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1175px;"><div class="owl-item active" style="width: 381.375px; margin-right: 10px;"><div>
															<div class="img-thumbnail border-0 p-0 d-block">
																<img class="img-fluid border-radius-0" src="img/blog/medium/blog-24.jpg" alt="">
															</div>
														</div></div><div class="owl-item" style="width: 381.375px; margin-right: 10px;"><div>
															<div class="img-thumbnail border-0 p-0 d-block">
																<img class="img-fluid border-radius-0" src="img/blog/medium/blog-20.jpg" alt="">
															</div>
														</div></div><div class="owl-item" style="width: 381.375px; margin-right: 10px;"><div>
															<div class="img-thumbnail border-0 p-0 d-block">
																<img class="img-fluid border-radius-0" src="img/blog/medium/blog-21.jpg" alt="">
															</div>
														</div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"></button><button type="button" role="presentation" class="owl-next"></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
												</div>
											
												<div class="post-date">
													<span class="day">15</span>
													<span class="month">Jan</span>
												</div>
											
												<div class="post-content">
											
													<h4><a href="blog-post.html" class="text-decoration-none">This is a stardard slider gallery post</a></h4>
													<p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquam nisi ultricies nisi luctus, sed fermentum.</p>
													<a href="blog-post.html" class="read-more text-color-dark font-weight-bold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
											
												</div>
											</article>
										</div>
										<div class="col-lg-4 mb-4">
											<article class="post post-large pb-5">
												<div class="post-image">
													<div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
														<div class="row mx-0">
															<div class="col-6 col-md-4 p-0">
																<a href="img/blog/square/blog-13.jpg">
																	<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
																		<span class="thumb-info-wrapper">
																			<img src="img/blog/square/blog-13.jpg" class="img-fluid" alt="">
																			<span class="thumb-info-action">
																				<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
																			</span>
																		</span>
																	</span>
																</a>
															</div>
															<div class="col-6 col-md-4 p-0">
																<a href="img/blog/square/blog-16.jpg">
																	<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
																		<span class="thumb-info-wrapper">
																			<img src="img/blog/square/blog-16.jpg" class="img-fluid" alt="">
																			<span class="thumb-info-action">
																				<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
																			</span>
																		</span>
																	</span>
																</a>
															</div>
															<div class="col-6 col-md-4 p-0">
																<a href="img/blog/square/blog-20.jpg">
																	<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
																		<span class="thumb-info-wrapper">
																			<img src="img/blog/square/blog-20.jpg" class="img-fluid" alt="">
																			<span class="thumb-info-action">
																				<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
																			</span>
																		</span>
																	</span>
																</a>
															</div>
															<div class="col-6 col-md-4 p-0">
																<a href="img/blog/square/blog-23.jpg">
																	<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
																		<span class="thumb-info-wrapper">
																			<img src="img/blog/square/blog-23.jpg" class="img-fluid" alt="">
																			<span class="thumb-info-action">
																				<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
																			</span>
																		</span>
																	</span>
																</a>
															</div>
															<div class="col-6 col-md-4 p-0">
																<a href="img/blog/square/blog-29.jpg">
																	<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
																		<span class="thumb-info-wrapper">
																			<img src="img/blog/square/blog-29.jpg" class="img-fluid" alt="">
																			<span class="thumb-info-action">
																				<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
																			</span>
																		</span>
																	</span>
																</a>
															</div>
															<div class="col-6 col-md-4 p-0">
																<a href="img/blog/square/blog-40.jpg">
																	<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
																		<span class="thumb-info-wrapper">
																			<img src="img/blog/square/blog-40.jpg" class="img-fluid" alt="">
																			<span class="thumb-info-action">
																				<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
																			</span>
																		</span>
																	</span>
																</a>
															</div>
														</div>
													</div>
												</div>
											
												<div class="post-date">
													<span class="day">15</span>
													<span class="month">Jan</span>
												</div>
											
												<div class="post-content">
											
													<h4><a href="blog-post.html" class="text-decoration-none">This is a standard image gallery thumbs post</a></h4>
													<p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquam nisi ultricies nisi luctus, sed fermentum.</p>
													<a href="blog-post.html" class="read-more text-color-dark font-weight-bold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
											
												</div>
											</article>
										</div>
										<div class="col-lg-4 mb-4 mb-lg-0">
											<article class="post post-large pb-5">
												<div class="post-image">
													<div class="embed-responsive embed-responsive-16by9">
														<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/45830194?color=ffffff&amp;title=0&amp;byline=0&amp;portrait=0&amp;badge=0" width="640" height="360" allowfullscreen=""></iframe>
													</div>
												</div>
											
												<div class="post-date">
													<span class="day">15</span>
													<span class="month">Jan</span>
												</div>
											
												<div class="post-content">
											
													<h4><a href="blog-post.html" class="text-decoration-none">This is a standard embedded video post</a></h4>
													<p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquam nisi ultricies nisi luctus, sed fermentum.</p>
													<a href="blog-post.html" class="read-more text-color-dark font-weight-bold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
											
												</div>
											</article>
										</div>
										<div class="col-lg-4 mb-4 mb-lg-0">
											<article class="post post-large pb-5">
												<div class="post-image">
													<div class="embed-responsive embed-responsive-16by9">
														<video class="embed-responsive-item" autoplay="" muted="" loop="" controls="">
															<source src="video/memory-of-a-woman.mp4" type="video/mp4">
														</video>
													</div>
												</div>
											
												<div class="post-date">
													<span class="day">15</span>
													<span class="month">Jan</span>
												</div>
											
												<div class="post-content">
											
													<h4><a href="blog-post.html" class="text-decoration-none">This is a standard HTML5 video post</a></h4>
													<p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquam nisi ultricies nisi luctus, sed fermentum.</p>
													<a href="blog-post.html" class="read-more text-color-dark font-weight-bold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
											
												</div>
											</article>
										</div>
										<div class="col-lg-4">
											<article class="post post-large pb-5">
												<div class="post-image">
													<div class="embed-responsive embed-soundcloud embed-responsive-21by9">
														<iframe class="embed-responsive-item" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/341546259&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
													</div>
												</div>
											
												<div class="post-date">
													<span class="day">15</span>
													<span class="month">Jan</span>
												</div>
											
												<div class="post-content">
											
													<h4><a href="blog-post.html" class="text-decoration-none">This is a standard audio embedded post</a></h4>
													<p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquam nisi ultricies nisi luctus, sed fermentum.</p>
													<a href="blog-post.html" class="read-more text-color-dark font-weight-bold text-2">read more <i class="fas fa-chevron-right text-1 ml-1"></i></a>
											
												</div>
											</article>
										</div>
									
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
				
					<hr class="solid my-5">
					
					<div class="row text-center pt-4">
						<div class="col">
							<h2 class="word-rotator slide font-weight-bold text-8 mb-2">
								<span>We're not the only ones </span>
								<span class="word-rotator-words bg-primary">
									<b class="is-visible">excited</b>
									<b>happy</b>
								</span>
								<span> about Porto Template...</span>
							</h2>
							<h4 class="text-primary lead tall text-4">30,000 CUSTOMERS IN 100 COUNTRIES USE PORTO TEMPLATE. MEET OUR CUSTOMERS.</h4>
						</div>
					</div>
					<!--
					<div class="row text-center mt-5">
						<div class="owl-carousel owl-theme carousel-center-active-item" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
							<div>
								<img class="img-fluid" src="img/logos/logo-1.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="img/logos/logo-2.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="img/logos/logo-3.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="img/logos/logo-4.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="img/logos/logo-5.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="img/logos/logo-6.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="img/logos/logo-4.png" alt="">
							</div>
							<div>
								<img class="img-fluid" src="img/logos/logo-2.png" alt="">
							</div>
						</div>
					</div>
														-->
				</div>
				
				<section class="section section-custom-map appear-animation" data-appear-animation="fadeInUpShorter">
					<section class="section section-default section-footer">
						<div class="container">
							<div class="row mt-5 appear-animation" data-appear-animation="fadeInUpShorter">
								<div class="col-lg-12">
									<div class="recent-posts mb-5">
										<h2 class="font-weight-normal text-6 mb-4"><strong class="font-weight-extra-bold">Agenda</strong> kita</h2>
										<div class="owl-carousel owl-theme dots-title mb-0" data-plugin-options="{'items': 1, 'autoHeight': true, 'autoplay': true, 'autoplayTimeout': 8000}">
											<div class="row">
												<div class="col-lg-4 mb-4 mb-lg-0">
													<article>
														<div class="row">
															<div class="col-auto pr-0">
																<div class="date">
																	<span class="day font-weight-extra-bold">15</span>
																	<span class="month text-1">JAN</span>
																</div>
															</div>
															<div class="col pl-1">
																<h4 class="text-primary text-4"><a class="d-block" href="blog-post.html">Lorem ipsum dolor sit amet, consectetur</a></h4>
																<p class="pr-4 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
																<a href="/" class="read-more text-color-dark font-weight-semibold text-2">read more <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
															</div>
														</div>
													</article>
												</div>
												<div class="col-lg-4">
													<article>
														<div class="row">
															<div class="col-auto pr-0">
																<div class="date">
																	<span class="day font-weight-extra-bold">14</span>
																	<span class="month text-1">JAN</span>
																</div>
															</div>
															<div class="col pl-1">
																<h4 class="text-primary text-4"><a class="d-block" href="blog-post.html">Lorem ipsum dolor sit amet, consectetur</a></h4>
																<p class="pr-4 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
																<a href="/" class="read-more text-color-dark font-weight-semibold text-2">read more <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
															</div>
														</div>
													</article>
												</div>
												<div class="col-lg-4">
													<article>
														<div class="row">
															<div class="col-auto pr-0">
																<div class="date">
																	<span class="day font-weight-extra-bold">14</span>
																	<span class="month text-1">JAN</span>
																</div>
															</div>
															<div class="col pl-1">
																<h4 class="text-primary text-4"><a class="d-block" href="blog-post.html">Lorem ipsum dolor sit amet, consectetur</a></h4>
																<p class="pr-4 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
																<a href="/" class="read-more text-color-dark font-weight-semibold text-2">read more <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
															</div>
														</div>
													</article>
												</div>
											</div>
											
										</div>
									</div>
								</div>
								<!--
								<div class="col-lg-4">
									<h2 class="font-weight-normal text-6 mb-4"><strong class="font-weight-extra-bold">What</strong> Client’s Say</h2>
									<div class="row">
										<div class="owl-carousel owl-theme dots-title dots-title-pos-2 mb-0" data-plugin-options="{'items': 1, 'autoHeight': true}">
											<div>
												<div class="col">
													<div class="testimonial testimonial-primary">
														<blockquote>
															<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
														</blockquote>
														<div class="testimonial-arrow-down"></div>
														<div class="testimonial-author">
															<div class="testimonial-author-thumbnail">
																<img src="img/clients/client-1.jpg" class="rounded-circle" alt="">
															</div>
															<p><strong>John Doe</strong><span>Okler</span></p>
														</div>
													</div>
												</div>
											</div>
											<div>
												<div class="col">
													<div class="testimonial testimonial-primary">
														<blockquote>
															<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
														</blockquote>
														<div class="testimonial-arrow-down"></div>
														<div class="testimonial-author">
															<div class="testimonial-author-thumbnail">
																<img src="img/clients/client-1.jpg" class="rounded-circle" alt="">
															</div>
															<p><strong>John Doe</strong><span>Okler</span></p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
														-->
							</div>
						</div>
					</section>
				</section>
@endsection