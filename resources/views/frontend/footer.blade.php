<footer class="dark-footer skin-dark-footer">
				<div>
					<div class="container">
						<div class="row">
							
							<div class="col-lg-4 col-md-4">
								@foreach ($tentang as $item)
									<div class="footer-widget">
										@if ($item->image != null)
											<img src="{{ URL::asset('files/logo/' . $item->image) }}" class="img-footer" alt="" />
										@endif
									<div class="footer-add">
										
										<p>{{ $item->alamat }}</p>
										<p>{{ $item->Provinsi }}</p>
										<p>{{ $item->telp1 }}</p>
										<p>{{ $item->email1 }}</p>	
										
									</div>
									@endforeach
								</div>
							</div>		
							<div class="col-lg-4 col-md-4">
								<div class="footer-widget">
									<h4 class="widget-title">Maju Berkah Rental</h4>
									<ul class="footer-menu">
										<li><a href="">BLOG</a></li>
										<li><a href="">Armada</a></li>
										<li><a href="">Harga</a></li>
										<li><a href="">Hubungi Kami</a></li>
									</ul>
								</div>
							</div>
									
							<div class="col-lg-4 col-md-2">
								<div class="footer-widget">
									<h4 class="widget-title">Layanan</h4>
									<ul class="footer-menu">
										<li><a href="#">Jasa Supir</a></li>
										<li><a href="#">Rental Mobil</a></li>
										<li><a href="#">Travel</a></li>
										<li><a href="#">Rental Mobil dan Supir</a></li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
				<div class="footer-bottom">
					<div class="container">
						<div class="row align-items-center">
							
							<div class="col-lg-6 col-md-6">
								<p class="mb-0">© 2023 Maju Berkah RentCar</a>.</p>
							</div>
							
							<div class="col-lg-6 col-md-6 text-right">
								<ul class="footer-bottom-social">
									<!-- <li><a href="#"><i class="ti-telegram"></i></a></li>
									<li><a href="#"><i class="ti-twitter"></i></a></li> -->
									<li><a href="#"><i class="ti-instagram"></i></a></li>
									<!-- <li><a href="#"><i class="ti-linkedin"></i></a></li> -->
								</ul>
							</div>
							
						</div>
					</div>
				</div>
			</footer>