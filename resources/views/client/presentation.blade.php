@extends('layouts.appclient')

{{-- start content --}}
@section('contenu')
<link rel="stylesheet" href="{{asset('home/presentation.css')}}">
<!-- Slider Area -->
{{-- <div class="container">
	<div class="row justify-content-center">
		<div class="col-10"> --}}

		
		<section class="home-slider">
			<div class="slider-active">
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
				<!-- Single Slider class="single-slider" overlay data-stellar-background-ratio="2" -->
				<div class="single-slider" data-stellar-background-ratio="0.5">
				    {{-- <video  autoplay loop >
					<source src="{{asset('video/generique.mp4')}}" type="video/mp4">
					</video> --}}	
					<video class="video-fluid z-depth-1" autoplay loop controls muted>
						<source src="https://mdbootstrap.com/img/video/Sail-Away.mp4')}}" type="video/mp4" />
					</video>
					<div class="container">
						<div class="row">
							<div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-12">
								<div class="slider-text">
									{{-- <h3> La Fondation <span>ISPAPOLYTECHNIQUE</span> </h3> --}}
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
				<div class="single-slider" style="background-image:url('images/homeslid/IMG_6126.jpg')" data-stellar-background-ratio="0.5">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-12">
								<div class="slider-text">
									{{-- <h3> La Fondation <span>ISPAPOLYTECHNIQUE</span> </h3> data-stellar-background-ratio="0.5" --}}
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
				<div class="single-slider" style="background-image:url('images/homeslid/201812drd_eu_main.jpg')" data-stellar-background-ratio="0.5">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-12">
								<div class="slider-text">
									{{-- <h3> La Fondation <span>ISPAPOLYTECHNIQUE</span> </h3> 0.5 --}}
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
		<!--/ End Slider Area -->
	</section>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-10">
					<div class="section-title">
						<h2><span>Présentation</span> </h2>
						
					</div>
					<div class="contour_presentation">
						<div class="lestexte">
							ParisTech est l'alliance des grandes écoles d'ingénieurs d’excellence françaises, œuvrant à l’élaboration de projets communs en formation, recherche et innovation dans le domaine des sciences et des technologies.
						</div>
						<div class="explitexte">
							La complémentarité des domaines d’enseignement et de recherche des écoles met à la disposition des élèves, des chercheurs et de l’ensemble des partenaires (institutionnels et entreprises) un regroupement exceptionnel permettant une transdisciplinarité unique. A l’international, ParisTech est l’interlocuteur privilégié de nombreuses grandes universités au travers des accords de partenariat et des actions communes ciblées.
						</div>
						<div class="titre">
							<p>   <strong> Les écoles du réseau s’appuient sur 4 valeurs communes :</strong> </p>	
							<ul>
								<li> L'excellence du modèle des Grandes Ecoles françaises,</li>
								<li> L'ouverture comme levier de croissance : ouverture à l'international, ouverture sociale, ouverture à de nouveaux modes pédagogiques,</li>
								<li> La recherche de l’innovation, clé des succès futurs de nos écoles.</li>
								<li> La solidarité : des promotions à taille humaine permettant une forte interaction entre les élèves et avec les équipes pédagogiques pendant et après la scolarité.</li>
							</ul>
						</div>
						<div class="titre">
							<p>   <strong> 6 lignes directrices communes guident l’action de ParisTech :</strong> </p>	
							<ul>
								<li> Travailler sur la pédagogie pour la formation d’ingénieur</li>
								<li> Travailler sur les frontières de l’ingénierie – développer une offre pluridisciplinaire</li>
								<li> Développer les synergies en faveur d’un recrutement coordonné à l’international</li>
								<li> Développer des projets d’enseignement supérieur et de recherche pour répondre aux besoins structurants des entreprises</li>
								<li> Mettre en avant les principes de fonctionnement commun au sein des regroupements</li>
							</ul>
						</div>
						<div class="lestexte">
							La marque ParisTech : une référence internationale
						</div>
						<div class="explitexte">
							Déposée en 1999, la marque ParisTech porte essentiellement deux valeurs : la formation Grande École à la française, en France et à l'étranger, et la pluridisciplinarité en formation et en recherche au service de l'entreprise.
							<br>
							Grâce à ses liens forts tissés avec de grandes universités étrangères et à ses nombreuses collaborations avec des entreprises internationales, ParisTech a gagné au fil du temps une forte notoriété. C'est à travers la marque ParisTech que les écoles peuvent jouir d'une reconnaissance à l'international.
						</div>
						<div class="titre">
							    
							<a class="btn" href="images/CVetien1.pdf" target="_blank"> <i class="fa fa-download"></i> TÉLÉCHARGER LA PLAQUETTE DE PRÉSENTATION DE PARISTECH </a>
							
						</div>
						<div class="lesvideo">
							Vidéo de présentation.
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="conteneur_vidéo">
									<video class="playvidéo" controls="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="">
										<source src="{{asset('video/generique.mp4')}}" type="video/mp4">
									</video>
								</div>
								<div class="titre_ecole">titre de la vidéo </div>
							</div>
							<div class="col-lg-6">
								<div class="conteneur_vidéo">
									<video class="playvidéo" controls="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="">
										<source src="{{asset('video/generique.mp4')}}" type="video/mp4">
									</video>
								</div>
								<div class="titre_ecole">titre de la vidéo </div>
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