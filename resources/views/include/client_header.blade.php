		<!-- Book Preloader -->
        <div class="book_preload">
            <div class="book">
                <div class="book__page"></div>
                <div class="book__page"></div>
                <div class="book__page"></div>
            </div>
        </div>
		<!--/ End Book Preloader -->
	
		<!-- Header -->
		<header class="header">
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-12">
							<!-- Contact -->
							<ul class="content">
								<li><i class="fa fa-phone"></i>123-456-789</li>
								<li><a href="mailto:info@yourdomain.com"><i class="fa fa-envelope-o"></i>contact@yourdomain.com</a></li>
								<li><i class="fa fa-clock-o"></i>Opening: 10:00am - 5:00pm</li>
							</ul>
							<!-- End Contact -->
						</div>
						<div class="col-lg-4 col-12">
							<!-- Social -->
							<ul class="social">
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus "></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							</ul>
							<!-- End Social -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-8 col-12">
							<div class="logo">
								<a href="{{URL::to('/')}}"><img src="{{asset('images/UNIVERSITE ISPA.png')}}" alt="#"></a>
							</div>
							{{-- <span> Université Polytechnique ISPA </span> --}}
							<div class="mobile-menu"></div>
						</div> 
							{{-- <div class="col-lg-2 col-md-2">
								Université Polytechnique ISPA 
							</div> --}}
						<div class="col-lg-4 col-md-4 col-12">
							<!-- Header Widget -->
							<div class="header-widget">
								<div class="single-widget">
									<i class="fa fa-twitter"></i>
									
									{{-- <h4>Appelez-nous au<span>(+225) 27 20 23 74 29 </span></h4> --}}
								</div>
								<div class="single-widget">
									<i class="fa fa-facebook"></i>
								</div>
								<div class="single-widget">
									<i class="fa fa-google-plus"></i>
								</div>
								<div class="single-widget">
									<i class="fa fa-linkedin"></i>
								</div>
								<div class="single-widget">
									<i class="fa fa-youtube"></i>
								</div>
								
								
								{{-- <div class="single-widget">
									<i class="fa fa-map-marker"></i>
									<h4>Trouvez-nous<span>Abidjan Plateau Immeuble Chardy</span></h4>
								</div> --}}
							</div>
							<!--/ End Header Widget -->
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
			<!-- Header Menu -->
			<div class="header-menu">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<nav class="navbar navbar-default">
								<div class="navbar-collapse">
									<!-- Main Menu -->
									<ul id="nav" class="nav menu navbar-nav">
										<li class=""><a href="index.html">Qui sommes-nous<i class="fa fa-angle-down"></i></a>
											<ul class="dropdown">
												<li><a href="{{URL::to('/presentation')}}">Présentation</a></li>
												<li><a href="{{URL::to('/gouvernance')}}">Gouvernance</a></li>
                                                {{-- <li><a href="{{URL::to('/')}}">Chiffres clés</a></li> --}}
												<li><a href="{{URL::to('/communaute')}}">La Communauté Ispapolytech</a></li>
                                                <li><a href="{{URL::to('/noscampus')}}">Nos Campus</a></li>
											</ul>
										</li>
										<li><a href="{{URL::to('/nosfacultés')}}">Nos pôles facultaires<i class="fa fa-angle-dow"></i></a> 
											
										</li>
										<li><a href="#">Les écoles de Ispa polytech<i class="fa fa-angle-down"></i></a>
											<ul class="dropdown">
											<li><a href="{{URL::to('/presentation_ecole')}}">Présentation des Écoles</a></li>
												{{-- <li><a href="#">Teachers<i class="fa fa-angle-right"></i></a>
													<ul class="dropdown submenu">
														<li><a href="teacher.html">Teachers V1</a></li>
														<li><a href="teacher2.html">Teachers V2</a></li>
														<li><a href="teacher-single.html">Teacher Single</a></li>
													</ul>
												</li> --}}
												<li><a href="{{URL::to('/businesschool')}}"> ISPA Business School</a></li>
												<li><a href="{{URL::to('/esiit')}}">Ecole Superieure d'Industrie, d'ingénierie et de Technologique - ESIIT</a></li>
												<li><a href="{{URL::to('/ispd')}}"> Institut des Sciences Politiques et du Droit - ISPD</a></li>
												<li><a href="{{URL::to('/isbtp')}}">Institut Supérieur de Batiment et de Travaux Publics - ISBTP</a></li>
												<li><a href="{{URL::to('/eda')}}">Ecole des Dirigeants Africains - EDA</a></li>
                                                <li><a href="{{URL::to('/ivpci')}}">Institiut Virtuel Privé de Côte d'Ivoire - IVPCI</a></li>
											</ul>
										</li>
										<li><a href="#">Formation<i class="fa fa-angle-down"></i></a> 
											<ul class="dropdown">
												<li><a href="{{URL::to('/offre_formation')}}">Notre offre</a></li>
                                                <li><a href="{{URL::to('/diplome_français')}}">Diplôme d'Etat Français  </a></li>
                                                <li><a href="{{URL::to('/diplomeivoirien')}}">Diplôme d'Etat Ivoirien</a></li>
                                                <li><a href="courses.html">Diplôme d'Etat Américain</a></li>
												<li><a href="{{URL::to('/doublediplom')}}">Double Diplôme</a></li>
												<li><a href="{{URL::to('/licence')}}">Licence</a></li>
												<li><a href="{{URL::to('/master')}}">master</a></li>
												<li><a href="{{URL::to('/mba_ispa')}}">MBA</a></li>
												<li><a href="{{URL::to('/echange_etudiant')}}">Echange d'Etudiants</a></li>
												<li><a href="{{URL::to('/formation_continue')}}">Formation continue</a></li>
												<li><a href="{{URL::to('/stage_emploi')}}">Stage et Emploi</a></li>
												<li><a href="{{URL::to('/formationenseignant')}}">Formation des Enseignants</a></li>
												
											</ul>
										</li>
										<li><a href="#">International<i class="fa fa-angle-down"></i></a> 
											<ul class="dropdown">
												<li><a href="{{URL::to('/partenariats_internationaux')}}">Partenariats internationaux</a></li>
												<li><a href="{{URL::to('/recrutement_international')}}">Recrutements des étudiants à l'internationnal </a></li>
												<li><a href="{{URL::to('/accord_doubl_diplome')}}">Accords de double diplôme</a></li>
												 <li><a href="{{URL::to('/accord_triple_diplome')}}">Accords de triple diplôme</a></li> 
												<li><a href="{{URL::to('/formationenseignant')}}">Europe</a>
													<ul class="dropdown submenu">
														<li><a href="{{URL::to('/france')}}">France</a></li>
													</ul>
												</li>
												<li><a href="{{URL::to('/formationenseignant')}}">Amérique du nord</a>
													<ul class="dropdown submenu">
														<li><a href="{{URL::to('/USA')}}">USA</a></li>
														<li><a href="{{URL::to('/Canada')}}">Canada</a></li>
													</ul>
												</li>
												{{-- <li><a href="{{URL::to('/formationenseignant')}}">Asie</a></li> --}}
												<li><a href="{{URL::to('/formationenseignant')}}">Afrique</a>
													<ul class="dropdown submenu">
														<li><a href="{{URL::to('/Gabon')}}">Gabon</a></li>
													</ul>
												</li>
											</ul>
										</li>
										
										
										<li><a href="{{URL::to('/contacts')}}">Contact</a></li>
									</ul>
									<!-- End Main Menu -->
									<!-- button -->
									{{-- <div class="button">
										<a href="contact.html" class="btn"><i class="fa fa-pencil"></i>Apply Now</a>
									</div> --}}
									<!--/ End Button -->
								</div> 
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Menu -->
		</header>