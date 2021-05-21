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
                    <h2><span> Faculté des Sciences Economiques et Managements  </span> </h2>
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
						
                        <br>
                        

						
						
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
    <section class="fond_departement">
		<div class="container">
            <div class="titre_departement">
                Liste des départements de la Faculté des Sciences Economiques et Managements.
            </div>
            <div class="deu_fond_departement"> 
                {{-- <div class="titre">
                    <p>   <strong> DEPARTEMENT DES SCIENCES DU MANAGEMENT (DSM)</strong> </p>	
                </div> --}}
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="img1_departement">
                            <img src="{{asset('images/DV5A2249-1024x683.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        
                        <div class="text_departement1">
                            <div class="departement"> DEPARTEMENT DES SCIENCES DU MANAGEMENT (DSM)</div>
                            Le département des Sciences du Management offre divers programmes au niveau du Bachelor et du Master. Ils sont dispensés par des professeurs qui sont des spécialistes de différentes sous-disciplines du management, entre autres, la finance, le marketing, l’organisation, les ressources humaines et le management international.
                            <div class="titre">
                                <a class="btn" href="images/CVetien1.pdf" target="_blank">  Cliquer ici pour visiter le site de l'école </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="deu_fond_departement"> 
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="text_departement">
                            <div class="departement"> DEPARTEMENT D’ECONOMIE DU DEVELOPPEMENT DURABLE (DED)</div>
                            Concrètement, le développement durable est une façon d’organiser la société de manière à lui permettre d’exister sur le long terme. Cela implique de prendre en compte à la fois les impératifs présents mais aussi ceux du futur, comme la préservation de l’environnement et des ressources naturelles ou l’équité sociale et économique.
                            <div class="titre">
                                <a class="btn" href="images/CVetien1.pdf" target="_blank">  Cliquer ici pour visiter le site de l'école </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="img2_departement">
                            <img src="{{asset('images/quantitative-reasoning.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="deu_fond_departement"> 
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="img2_departement">
                            <img src="{{asset('images/departement03.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="text_departement03">
                            <div class="departement"> DEPARTEMENT DES SCIENCES DE LA COMMUNICATION ET DES MEDIAS (DSCM)</div>
                            Le Département des sciences sciences de la communication assure des activités d’enseignement et de recherche dans le domaine de la communication (avec un orientation Business Communication ou Mass communication ) ainsi qu’à fournir une formation scientifique pour les étudiants qui visent des emplois dans le secteur de la communication.
                            <div class="titre">
                                <a class="btn" href="images/CVetien1.pdf" target="_blank">  Cliquer ici pour visiter le site de l'école </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="deu_fond_departement"> 
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="text_departement">
                            <div class="departement"> DEPARTEMENT D’ECONOMIE DU DEVELOPPEMENT DURABLE (DED)</div>
                            Le département des Sciences du Management offre divers programmes au niveau du Bachelor et du Master. Ils sont dispensés par des professeurs qui sont des spécialistes de différentes sous-disciplines du management, entre autres, la finance, le marketing, l’organisation, les ressources humaines et le management international.
                            
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="img2_departement">
                            <img src="{{asset('images/quantitative-reasoning.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- 
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
                    <div class="text_departement">
                        Le département des Sciences du Management offre divers programmes au niveau du Bachelor et du Master. Ils sont dispensés par des professeurs qui sont des spécialistes de différentes sous-disciplines du management, entre autres, la finance, le marketing, l’organisation, les ressources humaines et le management international.
                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="img_departement">
                        <img src="{{asset('images/quantitative-reasoning.jpg')}}" alt="">
                    </div>
                </div>
            </div> --}}
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