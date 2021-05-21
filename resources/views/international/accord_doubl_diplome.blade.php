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
                    <h2><span> Les accords de Double Diplôme</span> </h2>
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
							ParisTech rassemble les plus prestigieuses Grandes Écoles françaises.
						</div> --}}
						
						
                        {{-- <div class="titre">
							<p>   <strong> ParisTech Alumni </strong> </p>	
							<div class="explitexte">
                                Les écoles de ParisTech ont mis en place de façon mutualisée avec plusieurs universités de renom des accords cadre qui 
                            </div>
						</div> --}}
                        <div class="explitexte">
                            <p>
                                Les écoles de ParisTech ont mis en place de façon mutualisée avec plusieurs universités de renom des accords cadre qui organisent, avec les facultés ou départements intéressés par ces échanges, des mobilités étudiantes, diplômantes ou non, et des relations entre enseignants et chercheurs. Ces accords permettent, plus généralement, de renforcer les relations en matière de formation et de recherche. 
                            </p>
                            <p> 
                                Une des priorités de l’action à l’international de ParisTech vise à développer dans ce cadre des cursus de double diplôme entre une ou plusieurs écoles de ParisTech et des facultés et départements des universités partenaires. 
                            </p>
                            <p>
                                Les zones géographiques prioritaires sont celles identifiées pour le <a href="#" class="lien_text" > programme de recrutement international (cycle ingénieur) :</a>
                            </p>
                        </div>
                        <div class="titre">
							{{-- <p>   <strong> Ces doubles diplômes permettent aux élèves-ingénieurs :</strong> </p>	 --}}
							<ul>
								<li> <span> 
                                    L’Amérique du Sud, avec l'Argentine, le Brésil et la Colombie
                                </span> </li>
                                <li> <span> 
                                    L’Asie avec la Chine et aussi d'autres régions et pays d'Asie (Cambodge, Corée du Sud, Hong Kong, Inde, Indonésie, Japon, Laos, Macao, Malaisie, Singapour, Taïwan, Thaïlande, Vietnam).
                                </span> </li>
                                <li> <span> 
                                    L’Europe, avec la Russie  
                                </span> </li>
							</ul>
						</div>
                        <div class="explitexte">
                            <p>
                                Les modalités d’organisation des cursus de double diplôme qui sont partagées par les écoles de ParisTech et les facultés/départements concernés des universités partenaires sont définies par les accords cadre et précisées par des accords spécifiques entre les écoles de Paris Tech et département/ faculté de l’université partenaires pour répondre à leurs objectifs propres.
                            </p>
                            <p> 
                                Les cursus de double diplôme apportent aux étudiants français et internationaux une formation scientifique et technique de haut niveau bénéficiant des points forts des partenaires académiques, des compétences linguistiques et d’adaptation à des environnements culturels différents, au travers d’un séjour de longue durée dans chacun des deux pays concernés. 
                            </p>
                            <p> 
                                Les étudiants obtiennent les diplômes de niveau Master des deux partenaires académiques. Cette expérience est valorisée par les entreprises qui sont à la recherche d’ingénieurs à haut potentiel avec une expérience biculturelle pour contribuer à la mise en œuvre de leur stratégie de développement à l’international. 
                            </p>
                            <p>
                                Les étudiants internationaux peuvent enfin bénéficier des<a href="#" class="lien_text" >  dispositifs financiers mis en place par les écoles pour faciliter leur accueil.</a>
                            </p>
                        </div>





                        {{-- <div class="titre">
							<a class="btn" href="images/CVetien1.pdf" target="_blank"> <i class="fa fa-download"></i>  Voir la liste des établissements partenairess </a>
						</div>
                        <br>
                        <div class="titre">
							<p>   <strong> Pour en savoir plus, regardez le webinaire</strong> </p>	
							<div class="conteneur_vidéo">
                                <video class="playvidéo" controls="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="">
                                    <source src="video/generique.mp4" type="video/mp4">
                                </video>
                            </div>
						</div> --}}
                        <br>
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