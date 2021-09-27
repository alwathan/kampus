@extends('layouts.app')

@section('title', 'Admin')


@section('content')
				<div class="container my-4">
					<hr />
					<div class="row">
						
						<div class="col-lg-3 mb-1">

							<div class="pin-wrapper" style="height: 216px;">
								<aside class="sidebar navbar-expand-md" id="sidebar" data-plugin-sticky="" data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 120}}" style="width: 255px;">
									
									<a href="#" class="btn btn-primary bg-primary" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
										Menu Admin
									</a>
									<div class="collapse navbar-collapse" id="navbarSupportedContent">
										
										<ul class="nav nav-list flex-column sort-source mb-5" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
											<li class="nav-item" data-option-value="*"><a class="nav-link active" href="/admin">Pos</a></li>
											<li class="nav-item" data-option-value=".websites"><a class="nav-link" href="#">Halaman</a></li>
											<li class="nav-item" data-option-value=".logos"><a class="nav-link" href="#">Logos</a></li>
											<li class="nav-item" data-option-value=".brands"><a class="nav-link" href="#">Brands</a></li>
											<li class="nav-item" data-option-value=".medias"><a class="nav-link" href="#">Medias</a></li>
										</ul>
									</div>
								</aside>
							</div>
						
						</div>
						<div class="col-lg-9">
							@include('layouts.message')
							
							@yield('content-admin')
							
						</div>
					</div>

				</div>
@endsection