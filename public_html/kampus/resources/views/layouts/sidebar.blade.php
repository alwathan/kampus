<div class="sidebar">
    <h2 class="font-weight-normal text-6"><strong class="font-weight-extra-bold">Pengumuman</strong> Terbaru</h2>
    @php
        $pengumuman = get_posts('pengumuman',1);
    @endphp
    <div class="testimonial testimonial-primary">
        @isset($pengumuman->title)
             <blockquote>
                <p class="mb-0">{{ $pengumuman->title }}</p>
                <br />
                <a class='btn btn-light btn-sm' href='/{{ $pengumuman->type }}/{{ $pengumuman->slug }}'>Selengkapnya ...</a>
            </blockquote>
        @endisset
    </div>

    <div class="tabs tabs-dark mb-4 pb-2">
        <ul class="nav nav-tabs">
            <li class="nav-item active"><a class="nav-link text-1 font-weight-bold text-uppercase active" href="#TabPengumuman" data-toggle="tab">Pengumuman</a></li>
            <li class="nav-item"><a class="nav-link show text-1 font-weight-bold text-uppercase" href="#TabBerita" data-toggle="tab">Berita</a></li>
            <li class="nav-item"><a class="nav-link show text-1 font-weight-bold text-uppercase" href="#TabAgenda" data-toggle="tab">Agenda</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="TabPengumuman">
                <ul class="simple-post-list">
                    @forelse (get_posts('pengumuman',5) as $pengumuman)
                    <li class='d-flex flex-row'>
                        <div class="post-image">
                            <div class="img-thumbnail img-thumbnail-no-borders d-block bg-primary text-white p-2 font-weight-bold" style="font-size:1.3em">
                                    {{ Carbon\Carbon::createFromTimeString($pengumuman->published_at)->isoFormat('DD') }}
                            </div>
                        </div>
                        <div class="post-info">
                            <a href="/{{ $pengumuman->type }}/{{ $pengumuman->slug }}">{{ $pengumuman->title }}</a>
                            <div class="post-meta">
                                    {{ Carbon\Carbon::createFromTimeString($pengumuman->published_at)->isoFormat('DD MMMM Y') }}
                            </div>
                        </div>
                    </li>
                    @empty

                    @endforelse
                </ul>
            </div>
            <div class="tab-pane" id="TabBerita">
                <ul class="simple-post-list">
                    @forelse (get_posts('berita',5) as $brt)
                    <li class='d-flex flex-row'>
                        <div class="post-image">
                            <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                <a href="blog-post.html">
                                    <img src="/rimg/50/50/{{ $brt->media }}" width="50" height="50" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="post-info">
                            <a href="/{{ $brt->type }}/{{ $brt->slug }}">{{ $brt->title }}</a>
                            <div class="post-meta">
                                    {{ Carbon\Carbon::createFromTimeString($brt->published_at)->isoFormat('DD MMMM Y') }}
                            </div>
                        </div>
                    </li>
                    @empty

                    @endforelse
                </ul>
            </div>
            <div class="tab-pane" id="TabAgenda">
                <ul class="simple-post-list">
                    @forelse (get_posts('agenda',5) as $agd)
                    <li>
                        <div class="post-image">
                            <div class="img-thumbnail img-thumbnail-no-borders d-block bg-primary text-white p-2 font-weight-bold" style="font-size:1.3em">
                                    {{ Carbon\Carbon::createFromTimeString($agd->published_at)->isoFormat('DD') }}
                            </div>
                        </div>
                        <div class="post-info">
                            <a href="/{{ $agd->type }}/{{ $agd->slug }}">{{ $agd->title }}</a>
                            <div class="post-meta">
                                    {{ Carbon\Carbon::createFromTimeString($agd->published_at)->isoFormat('DD MMMM Y') }}
                            </div>
                        </div>
                    </li>
                    @empty

                    @endforelse
                </ul>
            </div>
        </div>
    </div>

</div>
