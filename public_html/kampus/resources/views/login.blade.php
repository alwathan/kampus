@extends('layouts.app')

@section('title', 'Masuk')


@section('content')
    <div class="container">

					<div class="row">
						<div class="col">
							<div class="featured-boxes">
								<div class="row d-flex justify-content-center align-items-center py-5">
									<div class="col-md-6">
										<div class="featured-box featured-box-primary text-left mt-2" style="">
											<div class="box-content">
												 @include('layouts.message')
												<h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-3">Masuk</h4>
												<form action="/login" id="frmSignIn" method="post">
													@csrf
													<div class="form-row">
														<div class="form-group col">
															<label class="font-weight-bold text-dark text-2">Email</label>
															<input name="email" type="text" value="" class="form-control form-control-lg">
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<label class="font-weight-bold text-dark text-2">Password</label>
															<input name="password" type="password" value="" class="form-control form-control-lg">
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col-lg-6">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="rememberme">
																<label class="custom-control-label text-2" for="rememberme">Tetap masuk</label>
															</div>
														</div>
														<div class="form-group col-lg-6">
															<input type="submit" value="Login" class="btn btn-primary float-right" data-loading-text="Loading...">
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
									
								</div>

							</div>
						</div>
					</div>

				</div>
@endsection