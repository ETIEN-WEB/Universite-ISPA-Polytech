@extends('layouts.appclient')

{{-- start content --}}
@section('contenu')
<link rel="stylesheet" href="{{asset('home/diplomfraçais.css')}}">
<!-- Slider Area -->
{{-- <div class="container">
	<div class="row justify-content-center">
		<div class="col-10"> --}}

		
		
            <div class="container">
                <div class="section-title">
                    <h2><span> Diplôme d'Etat Français</span> </h2>
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
                        <div class="titre">
							{{-- <p>   <strong> ParisTech Alumni </strong> </p>	 --}}
							<div class="explitexte">
                                Les écoles de ParisTech entretiennent des liens étroits et collaborent avec les universités parisiennes, et avec d’autres écoles d’ingénieurs et universités pour définir et organiser les programmes et les enseignements de plusieurs masters.
                            </div>
						</div>
                        <div class="lestexte">
                            Les Diplômes Français  des écoles de l'Université Polytechnique ISPA en propre et avec leurs partenaires:
						</div>
                        
                        <div class="titre">
                            <p> <strong>ISPA Business School </strong> </p>
                            <ul>
                                <li> <a href="https://www.ispaedu.com/bachelor/bachelor_francais.php" target="_blank">  Bachelor Français </a> </li>
								<li> <span> Mastère </span></li>
                                <ul class="masterefrançais">
									<li> <a href="https://ispaedu.com/communication-et-evenementiel/" target="_blank"> Communication Evénementiel  
									</a> </li>
									<li> <a href="https://ispaedu.com/communication-et-strategies-digitales/" target="_blank"> Communication et Stratégies Digitales  
									</a> </li>
									<li> <a href="https://ispaedu.com/manager-en-ressources-humaines/" target="_blank"> Manager  en Ressources Humaines
									</a> </li>
									<li> <a href="https://ispaedu.com/management-et-strategies-dentreprises-2/" target="_blank"> Management et Stratégires d'Entréprises  
									</a> </li>
									<li> <a href="https://ispaedu.com/gestion-patrimoniale-et-financiere-2/" target="_blank"> Gestion Patrimoniale et Financière      
									</a> </li>
									<li> <a href="https://ispaedu.com/controle-de-gestion-pilotage-de-performance/" target="_blank"> Contrôle de gestion et Pilotage de Performance  
									</a> </li>
									<li> <a href="https://ispaedu.com/mastere-gestion-financiere/" target="_blank"> Conformité et Régulation Bancaire / Expertise Juridique et Financière
									</a> </li>
									<li> <a href="https://ispaedu.com/management-des-activites-logistiques-achats-2/" target="_blank"> Management des Activités Logistiques et Achats  
									</a> </li>
                                </ul>
								<li> <span> Exécutive MBA </span></li>
                                <ul class="masterefrançais">
									<li> <a href="https://ispaedu.com/management-et-strategies-dentreprises/" target="_blank"> Management et Stratégires d'Entréprises 
									</a> </li>
									<li> <a href="https://ispaedu.com/ressources-humaines/" target="_blank"> Ressources Humaines  
									</a> </li>
									<li> <a href="https://ispaedu.com/gestion-patrimoniale-et-financiere/" target="_blank"> Gestion Patrimoniale et Financière  
									</a> </li>
									<li> <a href="https://ispaedu.com/banque-assurance/" target="_blank"> Banque Assurance et Marché Financier  
									</a> </li>
									<li> <a href="https://ispaedu.com/mba-marketing-evenementiel-et-communication/" target="_blank"> Marketing Evènementiel et Communication  
									</a> </li>
									<li> <a href="https://ispaedu.com/controle-de-gestion-pilotage-de-performance/" target="_blank"> Contrôle de gestion et Pilotage de Performance  
									</a> </li>
									<li> <a href="https://ispaedu.com/communication-et-strategie-digitales/" target="_blank"> Communication et Stratégies Digitales  
									</a> </li>
									<li> <a href="https://ispaedu.com/management-des-activites-logistiques-achats/" target="_blank"> Management des Activités Logistiques et Achats  
									</a> </li>
									<li> <a href="https://ispaedu.com/conformite-regulation-bancaire-expertise-juridique-finanicere/" target="_blank"> Conformité et Régulation Bancaire / Expertise Juridique et Financière
									</a> </li>
									<li> <a href="https://ispaedu.com/management-de-projet-international/" target="_blank"> Management de Projet Financière
									</a> </li>
                                </ul>
                            </ul>
                        </div>
                        <div class="titre">
                            <p> <strong>Ecole Superieure d'Industrie, d'ingénierie et de Technologique - ESIIT </strong> </p>
                            <ul>
                                <li> <a href="https://www.ispaedu.com/bachelor/bachelor_francais.php" target="_blank">  Bachelor Français </a> </li>
                                {{-- <li> <a href="{{URL::to('/ivpci')}}" target="_blank">  Institiut Virtuel Privé de Côte d'Ivoire - IVPCI </a> </li>
                                <li> <a href="{{URL::to('/isbtp')}}" target="_blank">  Institut Supérieur de Batiment et de Travaux Publics - ISBTP</a> </li> --}}
                            </ul>
                        </div>
                        <div class="titre">
                            <p> <strong>Institut des Sciences Politiques et du Droit - ISPD </strong> </p>
                            <ul>
                                <li> <a href="http://ispdedu.com/bts-francais-en-droit.php" target="_blank">  BTS Français </a> </li>

                                <li> <a href="http://ispdedu.com/bachelor-francais-en-droit.php">  Bachelor Français </a> </li>

                                <li> <span> Master Français </span></li>
								<ul class="masterefrançais">
									<li> <a href="http://ispdedu.com/master-francais-droit-des-affaires-et-fiscalit%C3%A9.php" target="_blank"> Master Droit Fiscal des Affaires 
									</a> </li>
									<li> <a href="http://ispdedu.com/master-francais-droit-des-affaires-et-commerce-international.php" target="_blank">Master Droit des Affaires et Commerce International  
									</a> </li>
									<li> <a href="http://ispdedu.com/master-francais-en-droit-bancaire-risque-conformite-et-controle.php" target="_blank">Master Droit Bancaires, Risque, Conformité et Controle  
									</a> </li>
									<li> <a href="http://ispdedu.com/master-francais-developpement-inter-marche-emergents.php" target="_blank">Droit du Dévéloppement Inter Marché Emergents  
									</a> </li>
									<li> <a href="http://ispdedu.com/master-francais-droit-maritime-ou-droit-de-environnement.php" target="_blank">Droit Maritime ou Droit de l'Environnement  
									</a> </li>
									<li> <a href="http://ispdedu.com/master-francais-communication-politique.php" target="_blank">Droit de la Communication Politique    
									</a> </li>
									<li> <a href="http://ispdedu.com/master-francais-droit-et-finance.php" target="_blank">Droit et Finance    
									</a> </li>
								</ul>
								<li> <a href="http://ispdedu.com/mba-francais-en-droit.php">  MBA Français </a> </li>
								
                            </ul>
                        </div>

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
    <script src="{{asset('home/data-table.js')}}"></script> 
@endsection