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
                                                <h3> Bienvenue ?? l'Universit?? polytechnique ISPA  {{--<span>POLYTECHNIQUE</span>--}} </h3>
                                                <div class="slogan"> Education Discipline Travail </div>
												<p>	Reconnue d'utilit?? ublique, la Fondation Ispapolytechnique re??ois l'appui de grands groupes industriels, tous partenaires de longue date de l'enseignement sup??rieur et de la recherche.	
                                                    </p>
                                                    <div class="gras" > <strong>></strong> D??couvrez la fondation Ispapolytechnique </div>
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
							La formation continue, ou formation tout au long de la vie, devient un enjeu majeur dans nos soci??t??s en continuelle ??volution, voire transformation, et notamment dans le domaine de l???ing??nierie o?? les technologies peuvent ??voluer tr??s vite.
						</div> --}}
						<div class="explitexte">
                            <p>
                                RACINE est le r??seau d???accompagnement et d???innovation dans l???enseignement de ParisTech. <strong></strong> Celui-ci met en ??uvre un programme d???accompagnement des enseignants chercheurs pour un enrichissement de leurs pratiques p??dagogiques.</strong>
                            </p>
                            <p> 
                                En effet, depuis 2009, les ??coles de ParisTech proposent une r??flexion et m??nent des actions communes sur le th??me de la formation.
                            </p>
                            <p> 
                                Une ??tude sur les besoins des enseignants chercheurs dans les ??coles a permis de prendre en compte leur attente d?????tre form??s aux m??thodes p??dagogiques en proposant r??guli??rement des ateliers courts  (de 1/2 journ??e ?? 1 journ??e). Les th??mes abord??s sont vari??s comme  la conception et l???utilisation des QCM, l???int??gration d???une classe invers??e dans l???enseignement, la r??alisation et l???utilisation d???une capsule vid??o p??dagogique, la m??thodologie pour rendre actifs les ??tudiants, la conception d???un site p??dagogique, la communication en cours magistral, le travail des ??tudiants en groupe, les grilles de crit??res pour ??valuer ?? l???oral en situation exp??rimentale???
                            </p>
                            <p> 
                                Le programme est construit par des acteurs impliqu??s de longue date dans la formation des enseignants, l???innovation p??dagogique et son accompagnement au sein des ??coles. Le groupe en charge du pilotage est constitu?? d???enseignants-chercheurs, de conseillers et d???ing??nieurs p??dagogiques des ??coles de ParisTech, en collaboration avec des r??seaux actifs en p??dagogie dans le sup??rieur comme le r??seau PENSERA
                            </p>
                            <p> 
                                Ce cycle de formation s???inscrit dans une d??marche de professionnalisation des acteurs et de qualit?? en formation. Il permet de mutualiser les ressources des ??coles pour former les enseignants chercheurs en p??dagogie et partager une culture commune pour enseigner de fa??on efficace. Certains enseignants-chercheurs d???autres ??coles, non membres de ParisTech, peuvent ??galement b??n??ficier de ces formations.
                            </p>
                        </div>
                        
						<div class="titre">
							<p>   <strong> Des th??mes tr??s vari??s sont propos??s aux enseignants comme :</strong> </p>	
							<ul>
								<li> <span>  la conception et l???utilisation des QCM </span> </li>
                                <li> <span> l???int??gration d???une classe invers??e dans l???enseignement </span> </li>
                                <li> <span> la r??alisation et l???utilisation d???une capsule vid??o p??dagogique </span> </li>
                                <li> <span> la m??thodologie pour rendre actifs les ??tudiants </span> </li>

                                <li> <span> la conception d???un site p??dagogique </span> </li>
                                <li> <span> la communication en cours magistral </span> </li>
                                <li> <span> le travail des ??tudiants en groupe </span> </li>
                                <li> <span> les grilles de crit??res pour ??valuer ?? l???oral en situation exp??rimentale </span> </li>

                                {{-- <li> <a href="{{URL::to('/')}}"> Ecole des Dirigeants Africains - EDA </a> </li>
                                <li> <a href="{{URL::to('/')}}"> Institiut Virtuel Priv?? de C??te d'Ivoire - IVPCI </a> </li> --}}
							</ul>
						</div>
                        <div class="explitexte">
                            <p>
                                Les ??coles de l'Universit?? Polytechnique ISPA membres de RACINE ?? savoir : <a href="{{URL::to('/businesschool')}}"> ISPA Business School</a>, 
                                <a href="{{URL::to('/esiit')}}">Ecole Superieure d'Industrie, d'ing??nierie et de Technologique - ESIIT</a>, 
                                <a href="{{URL::to('/ispd')}}"> Institut des Sciences Politiques et du Droit - ISPD</a>, 
                                <a href="{{URL::to('/isbtp')}}">Institut Sup??rieur de Batiment et de Travaux Publics - ISBTP</a>, 
                                <a href="{{URL::to('/eda')}}">Ecole des Dirigeants Africains - EDA</a>, 
                                <a href="{{URL::to('/ivpci')}}">Institiut Virtuel Priv?? de C??te d'Ivoire - IVPCI</a> avec <a href="{{URL::to('/ivpci')}}">CentraleSup??lec</a> et <a href="{{URL::to('/ivpci')}}">T??l??com Paris</a> sont ??galement membres du r??seau.
                            </p>  
                        </div>
                        <div class="titre">
							<a class="btn" href="images/CVetien1.pdf" target="_blank"> <i class="fa fa-download"></i>  T??L??CHARGER LE CATALOGUE DE FORMATION 2020 - 2021 </a>
						</div>
                        <div class="titre">
							<p> 
                                <a class="btn" href="images/CVetien1.pdf" target="_blank"> <i class="fa fa-eye" aria-hidden="true"></i>
                                    LIRE LA COMMUNICATION </a>
                                  ?? l'occasion de QPES 2019
                            </p>
						</div>
                        <div class="conteneur_vid??o">
                            <video class="playvid??o" controls="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="">
                                <source src="{{asset('video/generique.mp4')}}" type="video/mp4">
                            </video>
                        </div>
                        <div class="titre_ecole">titre de la vid??o </div>

                        <br>
                        

						{{-- <div class="titre titr1">
							<p>   <strong> L'??quipe </strong> </p>	
							<div class="equipe"> D??l??gu??e g??n??rale et international : Florence Lelait </div>
                            <div class="equipe"> D??l??gu??e communication : Claudia Gineston </div>
                            <div class="equipe"> D??l??gu??e diversit?? : Marie Rebeyrolle </div>
                            <div class="equipe"> D??l??gu?? enseignement : Marie-S??gol??ne Naudin </div>
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