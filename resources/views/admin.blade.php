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
											<li class="nav-item" data-option-value="*"><a class="nav-link active" href="#">Show All</a></li>
											<li class="nav-item" data-option-value=".websites"><a class="nav-link" href="#">Websites</a></li>
											<li class="nav-item" data-option-value=".logos"><a class="nav-link" href="#">Logos</a></li>
											<li class="nav-item" data-option-value=".brands"><a class="nav-link" href="#">Brands</a></li>
											<li class="nav-item" data-option-value=".medias"><a class="nav-link" href="#">Medias</a></li>
										</ul>
									</div>
								</aside>
							</div>
						
						</div>
						<div class="col-lg-9">
							
							<div class="media my-4">
								<img class="align-self-center mr-3" src="..." alt="Generic placeholder image">
								<div class="media-body">
									<h5 class="mt-0">Center-aligned media</h5>
									<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
									<p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								</div>
							</div>

							<div class="media my-5">
								<img class="align-self-center mr-3" src="..." alt="Generic placeholder image">
								<div class="media-body">
									<h5 class="mt-0">Center-aligned media</h5>
									
									<p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								</div>
							</div>

							<div class="media my-5">
								<img class="align-self-center mr-3" src="..." alt="Generic placeholder image">
								<div class="media-body">
									<h5 class="mt-0">Center-aligned media</h5>
									
									<p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								</div>
							</div>

							<div class="media my-5">
								<img class="align-self-center mr-3" src="..." alt="Generic placeholder image">
								<div class="media-body">
									<h5 class="mt-0">Center-aligned media</h5>
									
									<p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								</div>
							</div>

							
						</div>
					</div>

				</div>
@endsection