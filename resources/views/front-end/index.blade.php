<!DOCTYPE html>
<html lang="en">
  	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('images/logo/logo-unsri.png') }}">


		<title>Rekrutmen CHD Power Plant</title>

		<!-- Vendors Style -->
		<link rel="stylesheet" href="{{ asset('css/vendors_css.css') }}">

		<!-- Custom Style -->  
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('css/skin_color.css') }}">
	</head>


<body class="theme-primary">
	<!-- The social media icon bar -->
	{{-- <div class="icon-bar-sticky">
	  <a href="#" class="waves-effect waves-light btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
	  <a href="#" class="waves-effect waves-light btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
	  <a href="#" class="waves-effect waves-light btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
	  <a href="#" class="waves-effect waves-light btn btn-social-icon btn-youtube"><i class="fa fa-youtube-play"></i></a>
	</div> --}}

    
    <section class="bg-img pt-20 pb-50" data-overlay-light="5" style="background-image: url(../images/banner/banner-chd.jpg); background-position: top center;">
		<div class="container-fluid">
			<div class="row" style="height: 300px">
				{{-- <div class="col-12 d-flex flex-column justify-content-end" style="height: 300px;">
                    <div class="text-center mb-0">
                        <h1 class="box-title text-dark">
                            <a href="index.html" class="brand">
                                <img src="{{asset('images/logo/logo-chd-full-hd.png')}}" 
                                    alt="" 
                                    style="max-height: 100px; margin-bottom:0px"/>
                            </a>
                        </h1>	
                    </div>
                </div> --}}
                <div class="col-12 d-flex justify-content-start align-items-start">
                    <a href="index.html" class="brand">
                        <img src="{{asset('images/logo/logo-chd-full-hd.png')}}" 
                            alt="" style="max-height: 80px"/>
                    </a>
                </div>


			</div>
		</div>
	</section>

	<section class="py-50" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-12 text-center">
                    <h1 class="mb-15"><strong>OPEN RECRUITMENT</strong></h1>
                    <hr class="w-100 bg-primary">
                </div>
            </div>
            <div class="row mt-30 justify-content-center">
                <div class="col-md-8 text-center">
                    <a href="{{ asset('images/flyer-chd-rev3.png') }}" target="_blank">
                        <img src="{{ asset('images/flyer-chd-rev3.png') }}" 
                            alt="Flyer CHD" 
                            class="img-fluid rounded shadow" 
                            style="max-width: 100%; height: auto;">
                    </a>
                </div>
            </div>
        </div>
    </section>

	
	<section class="py-50 bg-white" data-aos="fade-up">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-12 text-center">
					<h1 class="mb-15"><strong>Timeline</strong></h1>					
					<hr class="w-100 bg-primary">
				</div>
			</div>
			<div class="box">
                {{-- <div class="box-header">
                    <h4 class="box-title">Example One</h4>
                </div> --}}
                <div class="box-body">
                    <div class="timeline timeline-line-dotted">
                        <span class="timeline-label">
                            <span class="badge badge-pill badge-primary badge-lg">7 - 18 Oktober 2025</span>
                        </span>
                        <div class="timeline-item">
                            <div class="timeline-point timeline-point-success">
                                <i class="fa fa-bank"></i>
                            </div>
                            <div class="timeline-event">
                                <div class="timeline-heading">
                                    <h3 class="timeline-title"><strong>Pengumuman Rekrutmen</strong></h3>
                                </div>
                                <div class="timeline-body">
                                    <p>Pengumuman rekrutmen dilakukan pada website <a href="https://bpu.unsri.ac.id/chd"><strong>Rekrutmen CHD</strong></a> dan media massa lainnya. </p>
                                </div>
                                <div class="timeline-footer">
                                    <p class="text-right">7 - 18 Oktober 2025</p>
                                </div>
                            </div>
                        </div>
                        <span class="timeline-label">
                            <span class="badge badge-pill badge-primary badge-lg">14 - 18 Oktober 2025</span>
                        </span>
                        <div class="timeline-item">
                            <div class="timeline-point timeline-point-warning">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="timeline-event">
                                <div class="timeline-heading">
                                    <h3 class="timeline-title"><strong>Registrasi Online</strong></h3>
                                </div>
                                <div class="timeline-body">
                                    <p></p>
                                </div>
                                <div class="timeline-footer">
                                    <p class="text-right">14 - 18 Oktober 2025</p>
                                </div>
                            </div>
                        </div>
                        {{-- <span class="timeline-label">
                            <span class="badge badge-pill badge-primary badge-lg">14 - 18 Oktober 2025</span>
                        </span> --}}
                        <div class="timeline-item">
                            <div class="timeline-point timeline-point-success">
                                <i class="fa fa-bank"></i>
                            </div>
                            <div class="timeline-event">
                                <div class="timeline-heading">
                                    <h3 class="timeline-title"><strong>Verifikasi Peserta Online<br>(Tahap I)</strong></h3>
                                </div>
                                <div class="timeline-body">
                                    <p></p>
                                </div>
                                <div class="timeline-footer">
                                    <p class="text-right">14 - 18 Oktober 2025</p>
                                </div>
                            </div>
                        </div>


                        <span class="timeline-label">
                            <span class="badge badge-pill badge-primary badge-lg">20 Oktober 2025</span>
                        </span>
                        <div class="timeline-item">
                            <div class="timeline-point timeline-point-success">
                                <i class="fa fa-bank"></i>
                            </div>
                            <div class="timeline-event">
                                <div class="timeline-heading">
                                    <h3 class="timeline-title"><strong>Pengumuman Tes Tahap I</strong></h3>
                                </div>
                                <div class="timeline-body">
                                    <p></p>
                                </div>
                                <div class="timeline-footer">
                                    <p class="text-right">20 Oktober 2025</p>
                                </div>
                            </div>
                        </div>

                        <span class="timeline-label">
                            <span class="badge badge-pill badge-primary badge-lg">24 Oktober 2025</span>
                        </span>
                        <div class="timeline-item">
                            <div class="timeline-point timeline-point-warning">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="timeline-event">
                                <div class="timeline-heading">
                                    <h3 class="timeline-title"><strong>Tes Kemampuan Bahasa Inggris<br>(Tes Tahap II)</strong></h3>
                                </div>
                                <div class="timeline-body">
                                    <p></p>
                                </div>
                                <div class="timeline-footer">
                                    <p class="text-right">24 Oktober 2025</p>
                                </div>
                            </div>
                        </div>

                        <span class="timeline-label">
                            <span class="badge badge-pill badge-primary badge-lg">29 Oktober 2025</span>
                        </span>
                        <div class="timeline-item">
                            <div class="timeline-point timeline-point-success">
                                <i class="fa fa-bank"></i>
                            </div>
                            <div class="timeline-event">
                                <div class="timeline-heading">
                                    <h3 class="timeline-title"><strong>Pengumuman Tes Tahap II</strong></h3>
                                </div>
                                <div class="timeline-body">
                                    <p></p>
                                </div>
                                <div class="timeline-footer">
                                    <p class="text-right">29 Oktober 2025</p>
                                </div>
                            </div>
                        </div>

                        <span class="timeline-label">
                            <span class="badge badge-pill badge-primary badge-lg">1 - 2 November 2025</span>
                        </span>
                        <div class="timeline-item">
                            <div class="timeline-point timeline-point-warning">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="timeline-event">
                                <div class="timeline-heading">
                                    <h3 class="timeline-title"><strong>Psikotes Klasikal dan Individual<br>(Tes Tahap III)</strong></h3>
                                </div>
                                <div class="timeline-body">
                                    <p></p>
                                </div>
                                <div class="timeline-footer">
                                    <p class="text-right">1 - 2 November 2025</p>
                                </div>
                            </div>
                        </div>

                        <span class="timeline-label">
                            <span class="badge badge-pill badge-primary badge-lg">8 - 9 November 2025</span>
                        </span>
                        <div class="timeline-item">
                            <div class="timeline-point timeline-point-warning">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="timeline-event">
                                <div class="timeline-heading">
                                    <h3 class="timeline-title"><strong>Tes Wawancara User</strong></h3>
                                </div>
                                <div class="timeline-body">
                                    <p></p>
                                </div>
                                <div class="timeline-footer">
                                    <p class="text-right">8 - 9 November 2025</p>
                                </div>
                            </div>
                        </div>

                        <span class="timeline-label">
                            <span class="badge badge-pill badge-primary badge-lg">12 November 2025</span>
                        </span>
                        <div class="timeline-item">
                            <div class="timeline-point timeline-point-success">
                                <i class="fa fa-bank"></i>
                            </div>
                            <div class="timeline-event">
                                <div class="timeline-heading">
                                    <h3 class="timeline-title"><strong>Pengumuman Tes Wawancara User</strong></h3>
                                </div>
                                <div class="timeline-body">
                                    <p></p>
                                </div>
                                <div class="timeline-footer">
                                    <p class="text-right">12 November 2025</p>
                                </div>
                            </div>
                        </div>

                        
                        {{-- <span class="timeline-label">
                            <a href="#" class="btn btn-info btn-rounded" title="More...">
                                <i class="fa fa-fw fa-history"></i>
                            </a>
                        </span> --}}
                    </div>
                </div>                
            </div>
		</div>
	</section>

	<footer class="footer_three">
        <div class="footer-top bg-dark3 pt-50">
            <div class="container">
                <div class="row">
					{{-- <div class="col-lg-3 col-12">
                        <div class="widget">
                            <h4 class="footer-title">About</h4>
							<hr class="bg-primary mb-10 mt-0 d-inline-block mx-auto w-60">
							<p class="text-capitalize mb-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis exercitation ullamco laboris<br><br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                        </div>
                    </div>											 --}}
					<div class="col-lg-6 col-12">
						<div class="widget">
							<h4 class="footer-title">Contact Info</h4>
							<hr class="bg-primary mb-10 mt-0 d-inline-block mx-auto w-60">
							<ul class="list list-unstyled mb-30">
								<li> <i class="fa fa-map-marker">
                                    </i> Gedung KPA Universitas Sriwijaya Lt. 2<br>
                                        Jalan Srijaya Negara, Bukit Lama, Kec. Ilir Barat I,<br>
                                        Kota Palembang, Sumatera Selatan (30139)<br>
                                </li>
								<li> <i class="fa fa-phone"></i> <span>+62-811-799-152</span></li>
								<li> <i class="fa fa-envelope"></i> <span>bpu@unsri.ac.id</span></li>
							</ul>
						</div>
					</div>					
					<div class="col-lg-6 col-12 mb-30">
                        <h4 class="footer-title">Our Gallery</h4>
                        <hr class="bg-primary mb-10 mt-0 d-inline-block mx-auto w-60">
                        <div class="popup-gallery ">
                                <a href="{{asset('images/banner/banner-chd (1).jpg')}}" >
                                    <img src="{{asset('images/banner/banner-chd (1).jpg')}}" width="32.5%" alt="" />
                                </a>
                                <a href="{{asset('images/banner/banner-chd (1).jpg')}}">
                                    <img src="{{asset('images/banner/banner-chd (2).jpg')}}" width="32.5%" alt="" />
                                </a>
                                <a href="{{asset('images/banner/banner-chd (5).jpg')}}">
                                    <img src="{{asset('images/banner/banner-chd (5).jpg')}}" width="32.5%" alt="" />
                                </a>
                                <a href="{{asset('images/banner/banner-chd (4).jpg')}}">
                                    <img src="{{asset('images/banner/banner-chd (4).jpg')}}" width="32.5%" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>				
            </div>
        </div>
		<div class="footer-bottom bg-dark3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 col-12 text-md-center text-center"> © {{date('Y')}} <span class="text-white">BPU Universitas Sriwijaya</span> . All Rights Reserved .</div>
                    {{-- &copy; {{date('Y')}} <a href="">Created By BPU UNSRI</a>. All Rights Reserved. --}}
                </div>
            </div>
        </div>
	</footer>
	
	
	<!-- Vendor JS -->
	<script src="{{asset('js/vendors.min.js')}}"></script>	
	<!-- Corenav Master JavaScript -->
    <script src="{{asset('corenav-master/coreNavigation-1.1.3.js')}}"></script>
    <script src="{{asset('js/nav.js')}}"></script>
	<script src="{{asset('assets/vendor_components/OwlCarousel2/dist/owl.carousel.js')}}"></script>
	<script src="{{asset('assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js')}}"></script>
	
	
	<!-- EduAdmin front end -->
	<script src="{{asset('js/template.js')}}"></script>
	
	
</body>
</html>
