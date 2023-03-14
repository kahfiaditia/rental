
<section class="gray">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-5 col-md-6 col-sm-12">
							<div class="sec-heading center">
								<p>Harga &amp; Paket</p>
								<h2><span class="theme-cl">Rental</span> Maju Berkah RentCar</h2>
							</div>
						</div>
					</div>
					
					<div class="row">
						@foreach ($armada as $item)
						<!-- Cource Grid 1 -->
						<div class="col-lg-4 col-md-6">
							<div class="education_block_grid style_2">
								<div class="education_block_thumb n-shadow">
									@if ($item->image != null)
										<img src="{{ URL::asset('files/armada/' . $item->image) }}" class="img-fluid" alt="">
									<div class="cources_price">Tersedia Paket 12 Jam</div>
									@endif
								</div>
								<div class="cources_facts">
									<ul class="cources_facts_list text-center">
										<li class="facts-1">{{ $item->tagline1 }}</b></li>
										<li class="facts-2">{{ $item->tagline2 }}</li>
									</ul>
								</div>
								<div class="education_block_body mb-1">
									<h4 class="bl-title text-center">{{ $item->merk }}</h4>
									<h3 class="bl-title text-center"> Harga {{ "Rp " . number_format($item->harga_12,2,',','.') }}</b></h3>
								</div>
										
								<div class="ed_view_link">
									@foreach ($tentang as $item )
									<a href="https://wa.me/{{ $item->telp1 }}" class="btn btn-theme enroll-btn" target="_blank">Hubungi Kami<i class="fab fa-whatsapp"></i></a>
									<a href="tel:+{{  $item->telp1  }}" class="btn btn-theme enroll-btn" target="_blank">Hubungi Kami<i class="fas fa-phone"></i></a>
									@endforeach
								</div>
								
							</div>	
						</div>
						
						@endforeach
					</div>
					
												<!-- Row -->
												<div class="row">
													<div class="col-lg-12 col-md-12 col-sm-12">
														
														<!-- Pagination -->
														<div class="row text-center">
															<div class="col-lg-12 col-md-12 col-sm-12 text-center">
																<a href="{{ route('transportasi') }}" type="button" class="btn btn-loader">Lihat Armada dan Paket Lainnya<i class="ti-reload ml-3"></i></a>
															</div>
														</div>
														
													</div>
												</div>
												<!-- /Row -->
					
				</div>
			</section>