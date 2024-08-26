@extends('layouts.app')

@section('title', 'Inkadha - Institut Kariman Wirayudha')


@section('content')
    <div class="slider-container rev_slider_wrapper" style="height: 670px;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 670, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': true }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
						<ul>
                            @php
                                $mp4 = App\Models\Setting::where('key','vhome')->first();
                            @endphp
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
									data-videomp4="{{ $mp4->value }}"
									data-videopreload="preload"
									data-videoloop="loop"
									data-forceCover="1"
									data-aspectratio="16:9"
									data-autoplay="true"
									data-autoplayonlyfirsttime="false"
									data-nextslideatend="false">
								</div>

								<div class="tp-caption text-color-light font-weight-normal"
									data-x="center"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="700"
									data-fontsize="['22','22','22','40']"
									data-lineheight="['25','25','25','45']"
									data-transform_in="y:[-50%];opacity:0;s:500;" style="z-index: 5;">Selamat Datang di Website</div>


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

								<div class="tp-dottedoverlay tp-opacity-overlay"></div>
							</li>

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
									data-videomp4="{{ $mp4->value }}"
									data-videopreload="preload"
									data-videoloop="loop"
									data-forceCover="1"
									data-aspectratio="16:9"
									data-autoplay="true"
									data-autoplayonlyfirsttime="false"
									data-nextslideatend="false">
								</div>

								<div class="tp-caption text-color-light font-weight-normal"
									data-x="center"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="700"
									data-fontsize="['22','22','22','40']"
									data-lineheight="['25','25','25','45']"
									data-transform_in="y:[-50%];opacity:0;s:500;" style="z-index: 5;">Selamat Datang di Website</div>


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

								<div class="tp-dottedoverlay tp-opacity-overlay"></div>
							</li>

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
									data-videomp4="{{ $mp4->value }}"
									data-videopreload="preload"
									data-videoloop="loop"
									data-forceCover="1"
									data-aspectratio="16:9"
									data-autoplay="true"
									data-autoplayonlyfirsttime="false"
									data-nextslideatend="false">
								</div>

								<div class="tp-caption text-color-light font-weight-normal"
									data-x="center"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="700"
									data-fontsize="['22','22','22','40']"
									data-lineheight="['25','25','25','45']"
									data-transform_in="y:[-50%];opacity:0;s:500;" style="z-index: 5;">Selamat Datang di Website</div>


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

								<div class="tp-dottedoverlay tp-opacity-overlay"></div>
							</li>

						</ul>
					</div>
				</div>

				<div class="container mb-5 pb-4">

					<div class="row pb-3 mt-4">
						{{ get_home_posts() }}
						<div class="col-lg-4">
                            @include('layouts.sidebar')
						</div>
					</div>

					<hr class="solid my-5">

					<div class="row text-center pt-4">
						<div class="col">
							<h2 class="word-rotator slide font-weight-bold text-8 mb-2">
								<span>Kami </span>
								<span class="word-rotator-words bg-primary">
									<b class="is-visible">siap</b>
									<b>mampu</b>
								</span>
								<span> membantu menemukan potensi terbaik Anda</span>
							</h2>
							<h4 class="text-primary lead tall text-4">KAMI MEMILIKI SUMBER DAYA YANG ANDA BUTUHKAN</h4>
						</div>
					</div>

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
                                                @forelse (get_posts('agenda',3) as $agd)
                                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                                        <article>
                                                            <div class="row">
                                                                <div class="col-auto pr-0">
                                                                    <div class="date">
                                                                        <span class="day font-weight-extra-bold">{{ Carbon\Carbon::createFromTimeString($agd->published_at)->format('d') }}</span>
                                                                        <span class="month text-1">{{ Carbon\Carbon::createFromTimeString($agd->published_at)->isoFormat('MMM') }}</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col pl-1">
                                                                    <h4 class="text-primary text-4"><a class="d-block" href="/{{ $agd->type }}/{{ $agd->slug }}">{{ $agd->title }}</a></h4>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                @empty

                                                @endforelse
											</div>

										</div>
									</div>
								</div>

							</div>
						</div>
					</section>
				</section>
@endsection
