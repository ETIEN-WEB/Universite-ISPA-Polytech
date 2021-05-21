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
                    <h2><span>Double Diplôme</span> </h2>
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
						
						
                        <div class="titre">
							{{-- <p>   <strong> ParisTech Alumni </strong> </p>	 --}}
							<div class="explitexte">
                                Les écoles de ParisTech ont développé au fil des ans des doubles diplômes entre elles ainsi qu’avec des partenaires extérieurs.
                            </div>
						</div>
                        <div class="titre">
							<p>   <strong> Ces doubles diplômes permettent aux élèves-ingénieurs :</strong> </p>	
							<ul>
								<li> <span> 
                                    de développer des compétences complémentaires de celles acquises dans leur formation d’ingénieur 
                                </span> </li>
                                <li> <span> 
                                    de s’ouvrir à d’autres thématiques transdisciplinaires au niveau national ou international. 
                                </span> </li>
							</ul>
						</div>
                        <br>
                        <div class="explitexte">
                            <p>
                                Ceci répond à la polyvalence et aux besoins de transversalité exprimés par les entreprises. Un candidat qui a un double diplôme aura doublé ses compétences opérationnelles. Mais il aura également développé une ouverture d’esprit, saura s’intégrer plus facilement, connaîtra des problématiques transversales et aura une plus grande maturité.
                            </p>
                            <p> 
                                Sur les cinq dernières années, entre 2013 et 2018, 95 étudiants ont ainsi pu bénéficier d’une double formation au sein du réseau ParisTech : 25 ingénieurs, 50 ingénieurs en double diplôme, 14 étudiants en master et 6 doctorants.
                            </p>
                        </div>
                        <div class="titre">
							<p>   <strong> Les doubles diplômes dont peuvent bénéficier les élèves ingénieurs des écoles de ParisTech sont :</strong> </p>	
							<ul>
								<li> <span> 
                                    AgroParisTech avec MINES ParisTech- PSL, ESPCI Paris - PSL, Chimie ParisTech - PSL, Arts et Métiers 
                                </span> </li>
                                <li> <span> 
                                    Chimie ParisTech- PSL avec AgroParisTech, ESPCI Paris - PSL 
                                </span> </li>
                                <li> <span> 
                                    ESPCI Paris- PSL avec AgroParisTech, Chimie ParisTech - PSL, Institut d’Optique, MINES ParisTech - PSL 
                                </span> </li>
							</ul>
						</div>
                        <div class="titre">
							<p>   <strong> Les écoles de ParisTech ont par ailleurs créé des doubles diplômes avec des grandes écoles françaises en dehors de ParisTech. On peut citer notamment:</strong> </p>	
							<ul>
								<li> <span> 
                                    HEC Paris (ingénieur manager) : AgroParisTech, École des Ponts ParisTech, ESPCI Paris - PSL, Institut d’Optique, MINES ParisTech - PSL ; 
                                </span> </li>
                                <li> <span> 
                                    ESSEC : ESPCI Paris - PSL ;
                                </span> </li>
                                <li> <span> 
                                    l’École normale supérieure : AgroParisTech ; ESPCI Paris - PSL ; 
                                </span> </li>
                                <li> <span> 
                                    l’École normale supérieure Paris-Saclay : Chimie ParisTech- PSL ; ESPCI Paris - PSL ; 
                                </span> </li>
                                <li> <span> 
                                    l’École normale supérieure Lyon : ESPCI Paris - PSL ;
                                </span> </li>
                                <li> <span> 
                                    ENSAE Paris : AgroParisTech ; 
                                </span> </li>
                                <li> <span> 
                                    Sciences Po Paris : AgroParisTech ;
                                </span> </li>
                                <li> <span> 
                                    l’École navale : Arts & Métiers ; 
                                </span> </li>
							</ul>
						</div>
                        <div class="titre">
							<p>   <strong> Des doubles diplômes ont également été créés avec des universités, notamment au sein des regroupements auxquels appartiennent les écoles (PSL, Université Paris-Saclay, HESAM) :</strong> </p>	
							<ul>
								<li> <span> 
                                    Institut de formation supérieure biomédicale (IFSBM) de la faculté de médecine de l’Université Paris-Sud : Institut d’Optique ; 
                                </span> </li>
                                <li> <span> 
                                    Faculté de Pharmacie de l’Université René Descartes, Paris : Chimie ParisTech - PSL ; 
                                </span> </li>
                                <li> <span> 
                                    Institut pratique du journalisme Paris-Dauphine : Chimie ParisTech - PSL ; 
                                </span> </li>
							</ul>
						</div>
                        <div class="explitexte">
                            <p>
                                etc.
                            </p>
                            <p> 
                                Enfin, les écoles ont développé ensemble un réseau de partenaires internationaux, dans les pays émergents notamment, avec lesquels un double diplôme est également possible.
                            </p>
                        </div>
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