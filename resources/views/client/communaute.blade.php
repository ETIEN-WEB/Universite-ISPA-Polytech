@extends('layouts.appclient')

{{-- start content --}}
@section('contenu')
<link rel="stylesheet" href="{{asset('home/communaute.css')}}">
<!-- Slider Area -->
{{-- <div class="container">
	<div class="row justify-content-center">
		<div class="col-10"> --}}

		
		
            <div class="container">
                <div class="section-title">
                    <h2><span>La Communaut√© Ispa Polytech</span> </h2>
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
                                                <h3> Bienvenue √† l'Universit√© polytechnique ISPA  {{--<span>POLYTECHNIQUE</span>--}} </h3>
                                                <div class="slogan"> Education Discipline Travail </div>
												<p>	Reconnue d'utilit√© ublique, la Fondation Ispapolytechnique re√ßois l'appui de grands groupes industriels, tous partenaires de longue date de l'enseignement sup√©rieur et de la recherche.	
                                                    </p>
                                                    <div class="gras" > <strong>></strong> D√©couvrez la fondation Ispapolytechnique </div>
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
							Les √©coles membres de ParisTech souhaitent d√©velopper une culture commune bas√©e sur des valeurs distinctives et les attributs de la marque du r√©seau.
						</div>
						
						
                        <div class="titre">
							<p>   <strong> ParisTech Alumni </strong> </p>	
							<div class="explitexte">
                                ParisTech Alumni  a pour vocation de f√©d√©rer l'ensemble des dipl√īm√©s des √©coles r√©unies au sein du r√©seau.
                                <br>
                                Soucieuses d‚Äôaccompagner le d√©veloppement de ParisTech, les associations d‚Äôanciens √©l√®ves ont d√©cid√© d‚Äôunir leurs efforts au sein de ParisTech Alumni. Ce r√©seau repr√©sente un total de pr√®s de 90 000 alumni.
                            </div>
						</div>
                        <div class="titre">
							<p>   <strong> La Fondation ParisTech </strong> </p>	
							<div class="explitexte">
                                Cr√©√©e par d√©cret en avril 2010, la Fondation ParisTech a pour but de contribuer au d√©veloppement de l'enseignement sup√©rieur et de la recherche scientifique et technologique, tant √† l‚Äô√©chelon fran√ßais qu‚Äôeurop√©en.
                                <br>
                                Fondation reconnue d‚Äôutilit√© publique, elle est n√©e de l‚Äôinitiative de ParisTech avec l‚Äôappui de grands groupes industriels, tous partenaires de l‚Äôenseignement sup√©rieur et de la recherche.
                            </div>
						</div>
                        <div class="titre">
							<p>   <strong> La communaut√© des enseignants </strong> </p>	
							<div class="explitexte">
                                Soucieux de la qualit√© p√©dagogique des enseignements, les correspondants p√©dagogiques des √©coles mettent en Ňďuvre un programme d‚Äôaccompagnement des enseignants pour un enrichissement de leurs pratiques p√©dagogiques au sein du programme RACINE.
                                <br>
                                
                            </div>
						</div>
						{{-- <div class="titre titr1">
							<p>   <strong> L'√©quipe </strong> </p>	
							<div class="equipe"> D√©l√©gu√©e g√©n√©rale et international : Florence Lelait </div>
                            <div class="equipe"> D√©l√©gu√©e communication : Claudia Gineston </div>
                            <div class="equipe"> D√©l√©gu√©e diversit√© : Marie Rebeyrolle </div>
                            <div class="equipe"> D√©l√©gu√© enseignement : Marie-S√©gol√®ne Naudin </div>
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