@extends('layouts.appclient')

{{-- start content --}}
@section('contenu')
<link rel="stylesheet" href="{{asset('home/doublediplom.css')}}">
<!-- Slider Area -->
{{-- <div class="container">
	<div class="row justify-content-center">
		<div class="col-10"> --}}

		
		
            <div class="container">
                <div class="section-title">
                    <h2><span> Formation des Enseignants</span> </h2>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                    <section class="home-slider">
                        <div class="slider">
                            <!-- -active Single Slider -->
                            {{-- <div class="single-slider overlay" style="background-image:url('http://via.placeholder.com/2000x1000')" data-stellar-background-ratio="0.5">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-12">
                                            <div class="slider-text">
                                                <h1>Perfect Template for <span>Education</span> & Courses Website</h1>
                                                <p>Our mission is to empower clients, colleagues, and communities to achieve aspirations while building lasting, caring relationships.</p>
                                                <div class="button">
                                                    <a href="courses.html" class="btn primary">Our Courses</a>
                                                    <a href="about.html" class="btn">About Learnedu</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <!--/ End Single Slider -->
                            <!-- Single Slider overlay -->
                            <div class="single-slider" style="background-image:url('images/garde_d_enfant1.jpg')" data-stellar-background-ratio="0.5">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-12">
                                            <div class="slider-text">
                                                <h3> Bienvenue à l'Université polytechnique ISPA  {{--<span>POLYTECHNIQUE</span>--}} </h3>
                                                <div class="slogan"> Education Discipline Travail </div>
												<p>	Reconnue d'utilité ublique, la Fondation Ispapolytechnique reçois l'appui de grands groupes industriels, tous partenaires de longue date de l'enseignement supérieur et de la recherche.	
                                                    </p>
                                                    <div class="gras" > <strong>></strong> Découvrez la fondation Ispapolytechnique </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Single Slider -->
                            <!-- Single Slider -->
                            {{-- <div class="single-slider overlay" style="background-image:url('http://via.placeholder.com/2000x1000')" data-stellar-background-ratio="0.5">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-8 offset-lg-4 col-md-8 offset-md-4 col-12">
                                            <div class="slider-text">
                                                <h1>Responsive Template for <span>Education</span> & Courses Website</h1>
                                                <p>Our mission is to empower clients, colleagues, and communities to achieve aspirations while building lasting, caring relationships.</p>
                                                <div class="button">
                                                    <a href="courses.html" class="btn primary">Our Courses</a>
                                                    <a href="about.html" class="btn">About Learnedu</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <!--/ End Single Slider -->
                        </div>
                    </section>
                    </div>
                </div>
            </div>
		<!--/ End Slider Area -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-9">
					<div class="contour_presentation">
						{{-- <div class="lestexte">
							La formation continue, ou formation tout au long de la vie, devient un enjeu majeur dans nos sociétés en continuelle évolution, voire transformation, et notamment dans le domaine de l’ingénierie où les technologies peuvent évoluer très vite.
						</div> --}}
						<div class="explitexte">
                            <p>
                                RACINE est le réseau d’accompagnement et d’innovation dans l’enseignement de ParisTech. <strong></strong> Celui-ci met en œuvre un programme d’accompagnement des enseignants chercheurs pour un enrichissement de leurs pratiques pédagogiques.</strong>
                            </p>
                            <p> 
                                En effet, depuis 2009, les écoles de ParisTech proposent une réflexion et mènent des actions communes sur le thème de la formation.
                            </p>
                            <p> 
                                Une étude sur les besoins des enseignants chercheurs dans les écoles a permis de prendre en compte leur attente d’être formés aux méthodes pédagogiques en proposant régulièrement des ateliers courts  (de 1/2 journée à 1 journée). Les thèmes abordés sont variés comme  la conception et l’utilisation des QCM, l’intégration d’une classe inversée dans l’enseignement, la réalisation et l’utilisation d’une capsule vidéo pédagogique, la méthodologie pour rendre actifs les étudiants, la conception d’un site pédagogique, la communication en cours magistral, le travail des étudiants en groupe, les grilles de critères pour évaluer à l’oral en situation expérimentale…
                            </p>
                            <p> 
                                Le programme est construit par des acteurs impliqués de longue date dans la formation des enseignants, l’innovation pédagogique et son accompagnement au sein des écoles. Le groupe en charge du pilotage est constitué d’enseignants-chercheurs, de conseillers et d’ingénieurs pédagogiques des écoles de ParisTech, en collaboration avec des réseaux actifs en pédagogie dans le supérieur comme le réseau PENSERA
                            </p>
                            <p> 
                                Ce cycle de formation s’inscrit dans une démarche de professionnalisation des acteurs et de qualité en formation. Il permet de mutualiser les ressources des écoles pour former les enseignants chercheurs en pédagogie et partager une culture commune pour enseigner de façon efficace. Certains enseignants-chercheurs d’autres écoles, non membres de ParisTech, peuvent également bénéficier de ces formations.
                            </p>
                        </div>
                        
						<div class="titre">
							<p>   <strong> Des thèmes très variés sont proposés aux enseignants comme :</strong> </p>	
							<ul>
								<li> <span>  la conception et l’utilisation des QCM </span> </li>
                                <li> <span> l’intégration d’une classe inversée dans l’enseignement </span> </li>
                                <li> <span> la réalisation et l’utilisation d’une capsule vidéo pédagogique </span> </li>
                                <li> <span> la méthodologie pour rendre actifs les étudiants </span> </li>

                                <li> <span> la conception d’un site pédagogique </span> </li>
                                <li> <span> la communication en cours magistral </span> </li>
                                <li> <span> le travail des étudiants en groupe </span> </li>
                                <li> <span> les grilles de critères pour évaluer à l’oral en situation expérimentale </span> </li>

                                {{-- <li> <a href="{{URL::to('/')}}"> Ecole des Dirigeants Africains - EDA </a> </li>
                                <li> <a href="{{URL::to('/')}}"> Institiut Virtuel Privé de Côte d'Ivoire - IVPCI </a> </li> --}}
							</ul>
						</div>
                        <div class="explitexte">
                            <p>
                                Les écoles de l'Université Polytechnique ISPA membres de RACINE à savoir : <a href="{{URL::to('/businesschool')}}"> ISPA Business School</a>, 
                                <a href="{{URL::to('/esiit')}}">Ecole Superieure d'Industrie, d'ingénierie et de Technologique - ESIIT</a>, 
                                <a href="{{URL::to('/ispd')}}"> Institut des Sciences Politiques et du Droit - ISPD</a>, 
                                <a href="{{URL::to('/isbtp')}}">Institut Supérieur de Batiment et de Travaux Publics - ISBTP</a>, 
                                <a href="{{URL::to('/eda')}}">Ecole des Dirigeants Africains - EDA</a>, 
                                <a href="{{URL::to('/ivpci')}}">Institiut Virtuel Privé de Côte d'Ivoire - IVPCI</a> avec <a href="{{URL::to('/ivpci')}}">CentraleSupélec</a> et <a href="{{URL::to('/ivpci')}}">Télécom Paris</a> sont également membres du réseau.
                            </p>  
                        </div>
                        <div class="titre">
							<a class="btn" href="images/CVetien1.pdf" target="_blank"> <i class="fa fa-download"></i>  TÉLÉCHARGER LE CATALOGUE DE FORMATION 2020 - 2021 </a>
						</div>
                        <div class="titre">
							<p> 
                                <a class="btn" href="images/CVetien1.pdf" target="_blank"> <i class="fa fa-eye" aria-hidden="true"></i>
                                    LIRE LA COMMUNICATION </a>
                                  à l'occasion de QPES 2019
                            </p>
						</div>
                        <div class="conteneur_vidéo">
                            <video class="playvidéo" controls="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="">
                                <source src="{{asset('video/generique.mp4')}}" type="video/mp4">
                            </video>
                        </div>
                        <div class="titre_ecole">titre de la vidéo </div>

                        <br>
                        

						{{-- <div class="titre titr1">
							<p>   <strong> L'équipe </strong> </p>	
							<div class="equipe"> Déléguée générale et international : Florence Lelait </div>
                            <div class="equipe"> Déléguée communication : Claudia Gineston </div>
                            <div class="equipe"> Déléguée diversité : Marie Rebeyrolle </div>
                            <div class="equipe"> Délégué enseignement : Marie-Ségolène Naudin </div>
						</div> --}}
						
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
		
		<!-- Features -->
		{{-- <section class="our-features section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>We Provide <span>Educational</span> Solutions</h2>
							<p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis ultricies nibh. Sed ultricies ante vitae laoreet sagittis. In pellentesque viverra purus. Sed risus est, molestie nec hendrerit hendreri </p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<!-- Single Feature -->
						<div class="single-feature">
							<div class="feature-head">
								<img src="http://via.placeholder.com/370x250" alt="#">
							</div>
							<h2>Online Courses Facilities</h2>
							<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim</p>	
						</div>
						<!--/ End Single Feature -->
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<!-- Single Feature -->
						<div class="single-feature">
							<div class="feature-head">
								<img src="http://via.placeholder.com/370x250" alt="#">
							</div>
							<h2>Student Admin Panel</h2>
							<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim</p>	
						</div>
						<!--/ End Single Feature -->
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<!-- Single Feature -->
						<div class="single-feature">
							<div class="feature-head">
								<img src="http://via.placeholder.com/370x250" alt="#">
							</div>
							<h2>Perfect Guidelines</h2>
							<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim</p>	
						</div>
						<!--/ End Single Feature -->
					</div>
				</div>
			</div>
		</section> --}}
		<!-- End Features -->
		
		<!-- Enroll -->
		{{-- <section class="enroll overlay section" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<div class="row">
							<div class="col-lg-6 col-12">
								<!-- Single Enroll -->
								<div class="enroll-form">
									<div class="form-title">
										<h2>Enroll Today</h2>
										<p>Before you miss the chance to get your seat!</p>
									</div>
									<!-- Form -->
									<form class="form" action="#">
										<div class="form-group">
											<label>Enter Your name</label>
											<input name="name" type="text" placeholder="John Mathew">
										</div>
										<div class="form-group">
											<label>Enter Your Email</label>
											<input name="email" type="email" placeholder="john@youremail.com">
										</div>
										<div class="form-group">
											<label>Type your messages</label>
											<textarea name="message" placeholder="i would like to talking..."></textarea>
										</div>
										<div class="form-group button">
											<button type="submit" class="btn">Register Now</button>
										</div>
									</form>
									<!--/ End Form -->
								</div>
								<!-- Single Enroll -->
							</div>
							<div class="col-lg-6 col-12">
								<div class="enroll-right">
									<div class="section-title">
										<h2>We Have More than 28,690+ Student With online Join!</h2>
										<p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis ultricies nibh. Sed ultricies ante vitae laoreet sagittis. In pellentesque viverra purus. Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis ultricies nibh. Sed ultricies ante vitae laoreet sagittis.</p>
									</div>
								</div>
								<!-- Skill Main -->
								<div class="skill-main">
									<div class="row">
										<div class="col-lg-4 col-md-4 col-12 wow zoomIn" data-wow-delay="0.8s">
											<!-- Single Skill -->
											<div class="single-skill">
												<div class="circle" data-value="0.7" data-size="130">
													<strong>28K+</strong>
												</div>
												<h4>Students</h4>
											</div>
											<!--/ End Single Skill -->
										</div>
										<div class="col-lg-4 col-md-4 col-12 wow zoomIn" data-wow-delay="1s">
											<!-- Single Skill -->
											<div class="single-skill">
												<div class="circle" data-value="0.9" data-size="130">
													<strong>50+</strong>
												</div>
												<h4>Courses</h4>
											</div>
											<!--/ End Single Skill -->
										</div>
										<div class="col-lg-4 col-md-4 col-12 wow zoomIn" data-wow-delay="1.2s">
											<!-- Single Skill -->
											<div class="single-skill">
												<div class="circle" data-value="0.8" data-size="130">
													<strong>33+</strong>
												</div>
												<h4>Teachers</h4>
											</div>
											<!--/ End Single Skill -->
										</div>
									</div>
								</div>
								<!--/ End Skill Main -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> --}}
		<!--/ End Enroll -->


	 	{{-- </div>
	</div>
</div> --}}
@endsection

@section('scripts')
    <script src="home/data-table.js"></script> 
@endsection