<!-- ========================== Featured Courses Section =============================== -->
<section>
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-5 col-md-6 col-sm-12">
							<div class="sec-heading center">
								<p>Armada &amp; Tarif</p>
								<h2><span class="theme-cl">Armada</span> Transportasi</h2>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 p-0">

							<div class="arrow_slide three_slide-dots arrow_middle">
								@foreach ($mobil as $item)
									
								<div class="singles_items">
									<div class="education_block_grid style_2">
								
										<div class="education_block_thumb n-shadow">
											@if ($item->image != null)
												<a href="course-detail.html"><img src="{{ URL::asset('files/armada/' . $item->image) }}" class="img-fluid" alt=""></a>
											@endif
										</div>
										
										<div class="education_block_body">
											<h4 class="bl-title text-center"><a href="course-detail.html">{{ $item->merk }}</a></h4>
										</div>
										
										<div class="cources_facts text-center">
											<ul class="cources_facts_list">
												<li class="facts-1">Bersih</li>
												<li class="facts-2">Terawat</li>
												<li class="facts-5">Pelayanan Terbaik</li>
											</ul>
										</div>
																		
										<div class="ed_view_link">
											<a href="tel:+6287888578686" class="btn btn-theme enroll-btn" target="_blank">Hubungi Kami<i class="fab fa-whatsapp"></i></a>
										</div>
										
									</div>	
								</div>
								@endforeach
								
							</div>
						</div>

					</div>
						<div class="col-lg-12 col-md-12 col-sm-12 text-center">
							<button type="button" class="btn btn-loader">Selengkapnya<i class="ti-reload ml-3"></i></button>
						</div>
					</div>
					
				</div>
			</section>
			<!-- ========================== Featured Courses Section =============================== -->