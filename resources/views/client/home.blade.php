@extends('layouts.appclient')

{{-- start content --}}
@section('contenu')
<link rel="stylesheet" href="{{asset('home/style.css')}}">
<!-- Slider Area -->
		<section class="home-slider">
			<div class="slider-active">
				<!-- -active Single Slider -->
				<!-- Single Slider overlay -->
				<div class="single-slider" data-stellar-background-ratio="0.5">
					<video class="video-fluid z-depth-1" autoplay loop controls muted>
						<source src="https://mdbootstrap.com/img/video/Sail-Away.mp4" type="video/mp4" />
					</video>
					<div class="container">
						<div class="row">
							<div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-12">
								<div class="slider-text">
									<h3> Bienvenue à l'Université polytechnique ISPA   </h3>
									<div class="slogan"> Education Discipline Travail </div>
									<p>	Reconnue d'utilité ublique, la Fondation Ispapolytechnique reçois l'appui de grands groupes industriels, tous partenaires de longue date de l'enseignement supérieur et de la recherche.	
                                        </p>
                                        <div class="gras" > <strong>></strong> Découvrez la fondation Ispapolytechnique </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="single-slider" style="background-image:url('images/photo_etudiant01.jpg')" data-stellar-background-ratio="0.5">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-12">
								<div class="slider-text">
									<h3> Welcome to Université polytechnique ISPA   </h3>
									<div class="slogan"> Education Discipline Travail </div>
									<p>	Reconnue d'utilité ublique, la Fondation Ispapolytechnique reçois l'appui de grands groupes industriels, tous partenaires de longue date de l'enseignement supérieur et de la recherche.	
                                        </p>
                                        <div class="gras" > <strong>></strong> Découvrez la fondation Ispapolytechnique </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="single-slider" style="background-image:url('images/homeslid/etudiant03.jpg')" data-stellar-background-ratio="0.5">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-12">
								<div class="slider-text">
									<h3> Welcome to Université polytechnique ISPA   </h3>
									<div class="slogan"> Education Discipline Travail </div>
									<p>	Reconnue d'utilité ublique, la Fondation Ispapolytechnique reçois l'appui de grands groupes industriels, tous partenaires de longue date de l'enseignement supérieur et de la recherche.	
                                        </p>
                                        <div class="gras" > <strong>></strong> Découvrez la fondation Ispapolytechnique </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				{{-- <div class="single-slider" style="background-image:url('images/garde_d_enfant1.jpg')" data-stellar-background-ratio="0.5">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-12">
								<div class="slider-text">
									<h3> Bienvenue à l'Université polytechnique ISPA  </h3>
									<div class="slogan"> Education Discipline Travail </div>
									<p>	Reconnue d'utilité ublique, la Fondation Ispapolytechnique reçois l'appui de grands groupes industriels, tous partenaires de longue date de l'enseignement supérieur et de la recherche.	
                                        </p>
                                        <div class="gras" > <strong>></strong> Découvrez la fondation Ispapolytechnique </div>
								</div>
							</div>
						</div>
					</div>
				</div> --}}
				<!--/ End Single Slider -->
			</div>
		</section>
		<!--/ End Slider Area -->
		
		
		
		<!-- Courses -->
		<section class="courses section-bg section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2><span>Actualités</span> </h2>
							
						</div>
					</div>
				</div>
					<div class="row">
						<div class="col-12">
							<div class="course-slider">
								<div class="single-course">
									<div class="course-head overlay">
										<img src="{{asset('images/FDGJHJGHHFGGHXCC.JPG')}}" alt="#">
										<a href="course-single.html" class="btn"><i class="fa fa-link"></i></a>
									</div>
									<div class="single-content">
										<h4><a href="course-single.html">NOMINATION: Professeur ANASSE AUGUSTIN est nommé par décret RECTEUR de l'Uviversité ISPA Poltytechnique<span>la date ici</span></a></h4>
										<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Lorem ipsum dolor sit amet, consectetur adipiscing elit aenean </p>
									</div>
								</div>
								<div class="single-course">
									<div class="course-head overlay">
										<img src="{{asset('images/FDGJHJGHHFGGHXCC.JPG')}}" alt="#">
										<a href="course-single.html" class="btn"><i class="fa fa-link"></i></a>
									</div>
									<div class="single-content">
										<h4><a href="course-single.html">NOMINATION: Professeur GNAZOU est nommé par décret DIRECTEUR DU développeent internationale de l'Uviversité ISPA Poltytechnique<span>la date ici</span></a></h4>
										<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Lorem ipsum dolor sit amet, consectetur adipiscing elit aenean </p>
									</div>
								</div>
								<div class="single-course">
									<div class="course-head overlay">
										<img src="{{asset('images/FDGJHJGHHFGGHXCC.JPG')}}" alt="#">
										<a href="course-single.html" class="btn"><i class="fa fa-link"></i></a>
									</div>
									<div class="single-content">
										<h4><a href="course-single.html"> COOPERATION UNIVERSITAIRE: Convention de Parténariat entre l'Université Fac For Pro Education Paris et ISPA Business School <span>Jeudi, 12 Décembre 2020</span></a></h4>
										<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Lorem ipsum dolor sit amet, consectetur adipiscing elit aenean </p>
									</div>
								</div>
								<div class="single-course">
									<div class="course-head overlay">
										<img src="{{asset('images/FDGJHJGHHFGGHXCC.JPG')}}" alt="#">
										<a href="course-single.html" class="btn"><i class="fa fa-link"></i></a>
									</div>
									<div class="single-content">
										<h4><a href="course-single.html">VIE ACADEMIQUE: Soutenance des auditeurs MBA 2020 <span>Jeudi, 12 Décembre 2020</span></a></h4>
										<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Lorem ipsum dolor sit amet, consectetur adipiscing elit aenean </p>
									</div>
								</div>
								<div class="single-course">
									<div class="course-head overlay">
										<img src="{{asset('images/FDGJHJGHHFGGHXCC.JPG')}}" alt="#">
										<a href="course-single.html" class="btn"><i class="fa fa-link"></i></a>
									</div>
									<div class="single-content">
										<h4><a href="course-single.html">PARTENARIAT: coopération universitaire entre l'Université Virtuelle de Gabon et l'Institut Virtuel Privé de côte d'Ivoire 
											 <span>Jeudi, 12 Décembre 2020</span></a></h4>
										<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Lorem ipsum dolor sit amet, consectetur adipiscing elit aenean </p>
									</div>
								</div>
							</div>
						</div> <!--/ End row  -->
					{{-- </div> --}}
				</div> <!--/ course-slider  -->
			</div>	<!--/ End contenair -->
		</section>
		<!--/ End Courses -->	
		
		<!-- Call To Action -->
		{{-- <section class="cta" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 offset-lg-6 col-12">
						<div class="cta-inner overlay">
							<div class="text-content">
								<h2>We Focus On Brands, Products & Campaigns</h2>
								<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore cum. Coluta nobis est eligendi optio cumque nihil impedit quo minusd quod maxime placeat facere possimus, omnis voluptas assumenda est. Our friendly support team is standing by to help you every step of the way.</p>
								<div class="button">
									<a class="btn primary" href="contact.html" >Register Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> --}}
		<!--/ End Call To Action -->

		
		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-7">
						<div class="row">
							<div class="col-12">
								<div class="section-title">
									<h2><span>Les Ecoles de ISPA Polytech</span> </h2>
									
								</div>
							</div>
						</div>
						<div class="bordure">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-6">
									<div class="ligne1">
										<div class="ecole">
											<a href="https://paristech.fr/fr/les-ecoles-de-paristech/mines-paristech" target="_blank">
												<img src="{{asset('images/A_logo/ISPA.png')}}" alt="Mines Paristech Logo" title="Mines Paristech"/> 
											</a>
										</div>
										<div class="titre_ecole"> ISPA Business School </div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-6">
									<div class="ligne1">
										<div class="ecole">
											<a href="https://paristech.fr/fr/les-ecoles-de-paristech/mines-paristech" target="_blank">
												<img src="{{asset('images/A_logo/ESITT.png')}}" alt="Mines Paristech Logo" title="Mines Paristech"/> 
											</a>
										</div>
										<div class="titre_ecole">Ecole Superieure d'Industrie, d'ingénierie et de Technologique - ESIIT  </div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-6">
									<div class="ligne1">
										<div class="ecole">
											<a href="https://paristech.fr/fr/les-ecoles-de-paristech/mines-paristech" target="_blank">
												<img src="{{asset('images/A_logo/logo_ispd2(1).png')}}" alt="Mines Paristech Logo" title="Mines Paristech"/> 
											</a>
										</div>
										<div class="titre_ecole">Institut des Sciences Politiques et du Droit</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-6">
									<div class="ligne">
										<div class="ecole">
											<a href="https://paristech.fr/fr/les-ecoles-de-paristech/mines-paristech" target="_blank">
												<img src="https://paristech.fr/sites/default/files/styles/logo_ecole/public/documents/mines-paristech_1.jpg?itok=pyr2y_ji" alt="Mines Paristech Logo" title="Mines Paristech"/> 
											</a>
										</div>
										<div class="titre_ecole">Institut Supérieur de Batiment et de Travaux Publics  </div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-6">
									<div class="ligne">
										<div class="ecole">
											<a href="https://paristech.fr/fr/les-ecoles-de-paristech/mines-paristech" target="_blank">
												<img src="{{asset('images/A_logo/logoeda.jpg')}}" alt="Mines Paristech Logo" title="Mines Paristech"/> 
											</a>
										</div>
										<div class="titre_ecole">Ecole des Dirigeants Africains  </div>
									</div>
								</div>
		
								<div class="col-lg-4 col-md-4 col-sm-4 col-6">
									<div class="ligne">
										<div class="ecole">
											<a href="https://paristech.fr/fr/les-ecoles-de-paristech/mines-paristech" target="_blank">
												<img src="{{asset('images/A_logo/IVPCI.png')}}" alt="Mines Paristech Logo" title="Mines Paristech"/> 
											</a>
										</div>
										<div class="titre_ecole">Institiut Virtuel Privé de Côte d'Ivoire </div>
									</div>
								</div>
						   </div>
						</div>
					</div> 
					<div class="col-lg-5 col-md-5">
						<div class="row">
							<div class="col-12">
								<div class="section-title">
									<h2><span> Vivez ISPA Polytech en vidéo</span> </h2>
									
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div class="conteneur_vidéo">
									<video class="playvidéo" controls="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" muted>
										<source src="{{asset('video/generique.mp4')}}" type="video/mp4">
									</video>
								</div>
							</div>
						</div>
						
					</div> 
				</div> <!-- end row -->
			</div><!-- end container -->
		</section>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="section-title Partenaires">
							<h2><span>Nos Partenaires</span> </h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="top-content"> 
							{{-- <div class="container-fluid"> --}}
								<div id="carousel-example" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner row w-100 mx-auto" role="listbox">
										<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
											<img src="{{asset('images/HackerU-Pro.600.jpg')}}" class="img-fluid mx-auto d-block" alt="img1">
										</div>
										<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
											<img src="{{asset('images/LOGO BBS.png')}}" class="img-fluid mx-auto d-block" alt="img2">
										</div>
										<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
											<img src="{{asset('images/UCLAN-Logo.png')}}" class="img-fluid mx-auto d-block" alt="img3">
										</div>
										<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
											<img src="{{asset('images/logo toronto.png')}}" class="img-fluid mx-auto d-block" alt="img4">
										</div>
										<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
											<img src="{{asset('images/LOGO IGC.png')}}" class="img-fluid mx-auto d-block" alt="img5">
										</div>
										<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
											<img src="{{asset('images/ULAW_LOGO1920x1005RGB-for-web.jpg')}}" class="img-fluid mx-auto d-block" alt="img6">
										</div>
										<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
											<img src="{{asset('images/University-of-Greenwich-Logo-2.png')}}" class="img-fluid mx-auto d-block" alt="img7">
										</div>
										<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
											<img src="{{asset('images/university-canada.png')}}" class="img-fluid mx-auto d-block" alt="img8">
										</div>
									</div>
									<a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
							{{-- </div> --}}
						</div> <!-- top-content -->
					</div>
				</div>
			</div>
		</section>	
		
		<!-- Team -->
		{{-- <section class="team section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Our Awesome <span>Teachers</span></h2>
							<p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis ultricies nibh. Sed ultricies ante vitae laoreet sagittis. In pellentesque viverra purus. Sed risus est, molestie nec hendrerit hendreri </p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Team -->
						<div class="single-team">
							<img src="{{asset('http://via.placeholder.com/275x370" alt="#">
							<div class="team-hover">
								<h4>Rohan Jonson<span>Associate Professor</span></h4>
								<p>cumque nihil impedit quo minusid quod maxime placeat facere possimus</p>
								<ul class="social">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube"></i></a></li>
								</ul>
							</div>
						</div>
						<!--/ End Single Team -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Team -->
						<div class="single-team active">
							<img src="{{asset('http://via.placeholder.com/275x370" alt="#">
							<div class="team-hover">
								<h4 class="name">Ian Harvey<span class="work">Web Programmer</span></h4>
								<p>cumque nihil impedit quo minusid quod maxime placeat facere possimus</p>
								<ul class="social">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube"></i></a></li>
								</ul>
							</div>
						</div>
						<!--/ End Single Team -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Team -->
						<div class="single-team">
							<img src="{{asset('http://via.placeholder.com/275x370" alt="#">
							<div class="team-hover">
								<h4 class="name">Lusfat Roman<span class="work">Software Engineer</span></h4>
								<p>cumque nihil impedit quo minusid quod maxime placeat facere possimus</p>
								<ul class="social">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube"></i></a></li>
								</ul>
							</div>
						</div>
						<!--/ End Single Team -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Team -->
						<div class="single-team">
							<img src="{{asset('http://via.placeholder.com/275x370" alt="#">
							<div class="team-hover">
								<h4 class="name">Nalpamb Bold<span class="work">JS Developer</span></h4>
								<p>cumque nihil impedit quo minusid quod maxime placeat facere possimus</p>
								<ul class="social">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube"></i></a></li>
								</ul>
							</div>
						</div>
						<!--/ End Single Team -->
					</div>
				</div>
			</div>
		</section> --}}
		<!--/ End Team -->
		
		<!-- Testimonials -->

		<!--/ End Testimonials -->
		
		<!-- Events -->

		<!--/ End Events data-stellar-background-ratio="0.5" overlay -->
		
		<!-- Fun Facts align-items-center -->
		
		<div class="fun-facts statistique" style="background-image: url('images/campus_france.jpg');">
			<div class="fond_statistique"> 
			<div class="container fond_statistiq">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12 ">
					<div class="row">
						<div class="col-lg-2 col-md-6 col-6">
							<!-- Single Fact -->
							<div class="single-fact">
								<i class="fa fa-handshake-o" aria-hidden="true"></i>
								<div class="number"><span class="counter">308</span></div>
								<p>Parténaires</p>
							</div>
							<!--/ End Single Fact -->
						</div>	
						<div class="col-lg-2 col-md-6 col-6">
							<!-- Single Fact -->
							<div class="single-fact">
								<i class="fa fa-graduation-cap"></i>
								<div class="number"><span class="counter">33</span></div>
								<p>Diplômes</p>
							</div>
							<!--/ End Single Fact -->
						</div>
						<div class="col-lg-2 col-md-6 col-6">
							<!-- Single Fact -->
							<div class="single-fact">
								<i class="fa fa-briefcase"></i>
								<div class="number"><span class="counter">80</span></div>
								<p>Double Diplômes</p>
							</div>
							<!--/ End Single Fact -->
						</div>
						<div class="col-lg-2 col-md-6 col-6">
							<!-- Single Fact -->
							<div class="single-fact">
								<i class="fa fa-star" aria-hidden="true"></i>
								{{-- <i class="fa fa-home" aria-hidden="true"></i> --}}
								<div class="number"><span class="counter">308</span></div>
								<p> Triple diplômes</p>
							</div>
							<!--/ End Single Fact -->
						</div>
						<div class="col-lg-2 col-md-6 col-6">
							<!-- Single Fact -->
							<div class="single-fact">
								<i class="fa fa-institution"></i>
								<div class="number"><span class="counter">278</span></div>
								<p>Ecoles</p>
							</div>
							<!--/ End Single Fact -->
						</div>
						<div class="col-lg-2 col-md-6 col-6">
							<!-- Single Fact -->
							<div class="single-fact">
								<i class="fa fa-home" aria-hidden="true"></i>
								<div class="number"><span class="counter">308</span></div>
								<p> Campus</p>
							</div>
							<!--/ End Single Fact -->
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
		</div>
		<!--/ End Fun Facts -->
		
		<!-- Blogs -->
		
		<!--/ End Blogs -->

@endsection

@section('scripts')
    <script src="{{asset('home/data-table.js')}}"></script> 
@endsection