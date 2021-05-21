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
                    <h2><span> Partenariats internationaux </span> </h2>
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
                            <div class="lestexte">
                                La coopération internationale est inhérente aux activités de formation et de recherche développées au sein de ParisTech.
                            </div>
                            <div class="explitexte">
                                <p>
                                    Au-delà des actions individuelles portées par ses écoles membres, son engagement à l’international se manifeste par des accords bilatéraux de partenariat avec de prestigieuses institutions étrangères et son intégration dans des réseaux de coopération dédiés à l'enseignement et à la recherche.
                                </p>
                                <p> 
                                    ParisTech est un partenaire français privilégié pour les grandes universités étrangères du domaine scientifique, technique et managérial.
                                </p>
                            </div>
                            <div class="titre">
                                <p>   <strong> En savoir plus sur l'offre de formation continue  au sein de ParisTech :</strong> </p>	
                                {{-- <ul>
                                    <li> <a href="{{URL::to('/')}}"> ISPA Business School </a> </li>
                                    <li> <a href="{{URL::to('/')}}"> Ecole Superieure D'ingenierie informatique et Technologique
                                        - ESIIT </a> </li>
                                </ul> --}}
                            </div>
                            <br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <section>
		<div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="{{asset('images/BrestBS.png')}}" alt="Mines Paristech Logo" title="Mines Paristech"/> 
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="{{asset('images/logofinanciasite-215x215-br.jpg')}}" alt="Mines Paristech Logo" title="Mines Paristech"/>
                        
                    </div>
                </div>
				
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="{{asset('images/University-of-Greenwich-Logo-2.png')}}" alt="Mines Paristech Logo" title="Mines Paristech"/>
                        
                    </div>
                </div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="{{asset('images/LSBF_Logo-300x124.jpg')}}" alt="Mines Paristech Logo" title="Mines Paristech"/>
                        
                    </div>
                </div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="{{asset('images/LOGOIGCSITE-215x215-br.jpg')}}" alt="Mines Paristech Logo" title="Mines Paristech"/>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="{{asset('images/UCLAN-Logo_logo.png')}}" alt="Mines Paristech Logo" title="Mines Paristech"/>
                        
                    </div>
                </div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="{{asset('images/Logo_ucly_couleur_RVB.png')}}" alt="Mines Paristech Logo" title="Mines Paristech"/>
                        
                    </div>
                </div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="{{asset('images/téléchargement.png')}}" alt="Mines Paristech Logo" title="Mines Paristech"/> 
                        
                    </div>
                </div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="{{asset('images/logo toronto.png')}}" alt="Mines Paristech Logo" title="Mines Paristech"/>
                        
                    </div>
                </div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="{{asset('images/LONDON-ACADEMY-OF-TRADING-1.png')}}" alt="Mines Paristech Logo" title="Mines Paristech"/> 
                        
                    </div>
                </div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="{{asset('images/logoecosupsite-215x215-br.jpg')}}" alt="Mines Paristech Logo" title="Mines Paristech"/>
                        
                    </div>
                </div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="{{asset('images/logoescosite-215x215-br.jpg')}}" alt="Mines Paristech Logo" title="Mines Paristech"/> 
                        
                    </div>
                </div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="{{asset('images/factforpro.png')}}" alt="Mines Paristech Logo" title="Mines Paristech"/>
                        
                    </div>
                </div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="{{asset('images/university-canada.png')}}" alt="Mines Paristech Logo" title="Mines Paristech"/> 
                        
                    </div>
                </div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="{{asset('images/LOGOFORMATIONSMARAISSITES-215x215-br.jpg')}}" alt="Mines Paristech Logo" title="Mines Paristech"/> 
                        
                    </div>
                </div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="{{asset('images/logoformasupsite-215x215-br.jpg')}}" alt="Mines Paristech Logo" title="Mines Paristech"/> 
                    </div>
                </div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="{{asset('images/alternance_auvergne.png')}}" alt="Mines Paristech Logo" title="Mines Paristech"/>
                    </div>
                </div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="{{asset('images/logociteformationsite-215x215-br.jpg')}}" alt="Mines Paristech Logo" title="Mines Paristech"/>
                    </div>
                </div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="{{asset('images/alternance_champagne_ardenne.png')}}" alt="Mines Paristech Logo" title="Mines Paristech"/>
                    </div>
                </div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="{{asset('images/Logo-ESMOD-e1527861897447-300x300-.jpg')}}" alt="Mines Paristech Logo" title="Mines Paristech"/>
                    </div>
                </div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="{{asset('images/logoiessite-215x215-br.jpg')}}" alt="Mines Paristech Logo" title="Mines Paristech"/>
                    </div>
                </div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="{{asset('images/logoestcsite-215x215-br.jpg')}}" alt="Mines Paristech Logo" title="Mines Paristech"/>
                    </div>
                </div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="{{asset('images/logoiessite-215x215-br.jpg')}}" alt="Mines Paristech Logo" title="Mines Paristech"/>
                    </div>
                </div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="{{asset('images/LOGO-LYCEE-CHARLES-PEGUY-215x215-br.png')}}" alt="Mines Paristech Logo" title="Mines Paristech"/>
                    </div>
                </div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="{{asset('images/logoomnissite-215x215-br.jpg')}}" alt="Mines Paristech Logo" title="Mines Paristech"/>
                    </div>
                </div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="{{asset('images/profilsourcingsitelogo-215x215-br.jpg')}}" alt="Mines Paristech Logo" title="Mines Paristech"/>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="{{asset('images/ULAW_LOGO2.jpg')}}" alt="Mines Paristech Logo" title="Mines Paristech"/>
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