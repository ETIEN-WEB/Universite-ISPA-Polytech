@extends('layouts.appclient')

{{-- start content --}}
@section('contenu')
<link rel="stylesheet" href="{{asset('home/gouvernance.css')}}">
<!-- Slider Area -->
{{-- <div class="container">
	<div class="row justify-content-center">
		<div class="col-10"> --}}

		
		
            <div class="container">
                <div class="section-title">
                    <h2><span>Gouvernance</span> </h2>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-md-7">
						<div class="contour_lignes">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
								<div class="cole_contour">
									<div class="ecole">
										<img src="{{asset('images/ake_ngbo-1.jpg')}}" alt="Mines Paristech Logo" title="Mines Paristech"/> 
									</div>
									<div class="text_ecole">
										<div class="titre_ecole"> <strong> Professeur Titulaire ANNASSE </strong> Professeur Titulaire ANNASSE Le Recteur </div>
									</div>
								</div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                <div class="cole_contour">
									<div class="ecole">
										<img src="{{asset('images/ake_ngbo-1.jpg')}}" alt="Mines Paristech Logo" title="Mines Paristech"/> 
									</div>
									<div class="text_ecole">
										<div class="titre_ecole"> <strong> Professeur Titulaire ANNASSE </strong> Professeur Titulaire ANNASSE Le Recteur </div>
									</div>
								</div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                <div class="cole_contour">
									<div class="ecole">
										<img src="{{asset('images/ake_ngbo-1.jpg')}}" alt="Mines Paristech Logo" title="Mines Paristech"/> 
									</div>
									<div class="text_ecole">
										<div class="titre_ecole"> <strong> Professeur Titulaire ANNASSE </strong> Professeur Titulaire ANNASSE Le Recteur </div>
									</div>
								</div>
                            </div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                <div class="cole_contour">
									<div class="ecole">
										<img src="{{asset('images/ake_ngbo-1.jpg')}}" alt="Mines Paristech Logo" title="Mines Paristech"/> 
									</div>
									<div class="text_ecole">
										<div class="titre_ecole"> <strong> Professeur Titulaire ANNASSE </strong> Professeur Titulaire ANNASSE Le Recteur </div>
									</div>
								</div>
                            </div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                <div class="cole_contour">
									<div class="ecole">
										<img src="{{asset('images/ake_ngbo-1.jpg')}}" alt="Mines Paristech Logo" title="Mines Paristech"/> 
									</div>
									<div class="text_ecole">
										<div class="titre_ecole"> <strong> Professeur Titulaire ANNASSE </strong> Professeur Titulaire ANNASSE Le Recteur </div>
									</div>
								</div>
                            </div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                <div class="cole_contour">
									<div class="ecole">
										<img src="{{asset('images/ake_ngbo-1.jpg')}}" alt="Mines Paristech Logo" title="Mines Paristech"/> 
									</div>
									<div class="text_ecole">
										<div class="titre_ecole"> <strong> Professeur Titulaire ANNASSE </strong> Professeur Titulaire ANNASSE Le Recteur </div>
									</div>
								</div>
                            </div>
							</div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        {{-- <div class="row">
							<div class="col-12"> --}}
								<div class="conteneur_vidéo">
									<video class="playvidéo" controls="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="">
										<source src="{{asset('video/generique.mp4')}}" type="video/mp4">
									</video>
								</div>
								<div class="conteneur_vidéo">
									<video class="playvidéo" controls="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="">
										<source src="{{asset('video/generique.mp4')}}" type="video/mp4">
									</video>
								</div>
							{{-- </div>
						</div> --}}
                    </div>
                </div>
                
            </div>
			
		<!--/ End Slider Area -->
	<section>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-10">
					<div class="contour_presentation">
						<div class="lestexte">
							La gouvernance de ParisTech permet, entre les écoles de l'alliance, de coordonner et d’animer la réflexion ainsi que la construction de projets communs, qui ont vocation ensuite à être mis en œuvre par ces écoles.
						</div>
						{{-- <div class="explitexte">
							La complémentarité des domaines d’enseignement et de recherche des écoles met à la disposition des élèves, des chercheurs et de l’ensemble des partenaires (institutionnels et entreprises) un regroupement exceptionnel permettant une transdisciplinarité unique. A l’international, ParisTech est l’interlocuteur privilégié de nombreuses grandes universités au travers des accords de partenariat et des actions communes ciblées.
						</div> --}}
						<div class="titre">
							<p>   <strong> Le Bureau :</strong> </p>	
							<ul>
								<li> Président : Christian Lerminiaux (Chimie ParisTech - PSL)</li>
								<li> Vice-présidents : Sophie Mougard (Ecole des Ponts ParisTech) et Gilles Trystram (AgroParisTech)</li>
							</ul>
						</div>
                        <div class="titre">
							<p>   <strong> Le Comité des fondateurs</strong> </p>	
							<div class="explitexte">
                                Il est constitué des directeurs des 7 écoles et du directeur de la Fondation ParisTech. Il détermine les orientations générales relatives aux actions mises en place par ParisTech.
                            </div>
						</div>
                        <div class="titre">
							<p>   <strong> Les commissions </strong> </p>	
							<div class="explitexte">
                                Sur le volet opérationnel, 4 commissions thématiques inter-écoles réunissent les responsables correspondants des écoles. Leur rôle est d’animer la vie inter-écoles, d’analyser l’opportunité et les conditions de mise en œuvre d’actions communes, de s’appuyer en tant que de besoin sur les conclusions de groupes de travail ad-hoc, de veiller à la cohérence des actions en cours et de contribuer à la coordination des projets.
                            </div>
                            <ul>
								<li> Commission enseignement – Président Gilles Trystram (Agro ParisTech)</li>
								<li> Commission diversité – Président Laurent Champaney (Arts et Métiers)</li>
								<li> Commission internationale – Président Vincent Laflèche (MINES ParisTech - PSL)</li>
								<li> Commission communication – Président Christian Lerminiaux (Chimie ParisTech - PSL)</li>
							</ul>
						</div>
						<div class="titre titr1">
							<p>   <strong> L'équipe </strong> </p>	
							<div class="equipe"> Déléguée générale et international : Florence Lelait </div>
                            <div class="equipe"> Déléguée communication : Claudia Gineston </div>
                            <div class="equipe"> Déléguée diversité : Marie Rebeyrolle </div>
                            <div class="equipe"> Délégué enseignement : Marie-Ségolène Naudin </div>
                            <div class="equipe"> Directeur ParisTech Chine : Laura Villette </div>
                            <div class="equipe"> Coordinatrice ParisTech Chine : Yuanyuan Shen </div>
                            <div class="equipe"> Coordinateur ParisTech Brésil : Florian Pradelle </div>
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
								<img src="{{asset('http://via.placeholder.com/370x250" alt="#">
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
								<img src="{{asset('http://via.placeholder.com/370x250" alt="#">
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
								<img src="{{asset('http://via.placeholder.com/370x250" alt="#">
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