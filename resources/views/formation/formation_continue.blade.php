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
                    <h2><span> Formation continue</span> </h2>
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
						<div class="lestexte">
							La formation continue, ou formation tout au long de la vie, devient un enjeu majeur dans nos soci??t??s en continuelle ??volution, voire transformation, et notamment dans le domaine de l???ing??nierie o?? les technologies peuvent ??voluer tr??s vite.
						</div>
						<div class="explitexte">
                            <p>
                                C???est pourquoi les ??coles de ParisTech s???attachent ?? d??velopper l???offre de formation continue pour un <strong> public diversifi?? : des ing??nieurs </strong> qui souhaitent acqu??rir de nouvelles comp??tences ou mettre ?? jour leurs connaissances, et ??galement des <strong> managers ou des experts ayant un profil initial plut??t en sciences humaines sociales</strong>, souhaitant approfondir leurs connaissances ou leurs comp??tences dans un domaine particulier.
                            </p>
                            <p> 
                                Les ??coles de ParisTech proposent <strong> diff??rents programmes de formation continue</strong>, longs ou courts, adaptables en fonction de la situation des personnes int??ress??es : mast??res sp??cialis??s??, certificats, cours en ligne (MOOCs), validation des acquis de l???exp??rience etc.
                            </p>
                            <p> 
                                <strong> L???offre de mast??res sp??cialis??s?? est particuli??rement riche. Ces formations dipl??mantes, accr??dit??es par la Conf??rence des grandes ??coles, ont une vocation professionnalisante</strong>. Ces mast??res sont construits en lien tr??s ??troit avec les entreprises et les organisations. Ouvrant sur une expertise ou une double comp??tence, ils s???adressent aussi bien ?? de jeunes dipl??m??s en poursuite d?????tudes qu????? des salari??s en formation continue. Chaque mast??re propose des modalit??s diff??rentes : ?? temps plein et/ou ?? temps partiel. D??velopp??s au sein des d??partements ou des centres de recherche des ??coles, ils b??n??ficient de l???expertise et du savoir-faire des enseignants-chercheurs des ??tablissements.
                            </p>
                        </div>
                        
						<div class="titre">
							<p>   <strong> En savoir plus sur l'offre de formation continue  au sein de ParisTech :</strong> </p>	
							<ul>
								<li> <a href="{{URL::to('/')}}"> ISPA Business School </a> </li>
                                <li> <a href="{{URL::to('/')}}"> Ecole Superieure D'ingenierie informatique et Technologique
                                    - ESIIT </a> </li>
                                <li> <a href="{{URL::to('/')}}"> Institut des Sciences Politiques et du Droit - ISPD </a> </li>
                                <li> <a href="{{URL::to('/')}}"> Institut Sup??rieur de Batiment et de Travaux Publics - ISBTP </a> </li>
                                <li> <a href="{{URL::to('/')}}"> Ecole des Dirigeants Africains - EDA </a> </li>
                                <li> <a href="{{URL::to('/')}}"> Institiut Virtuel Priv?? de C??te d'Ivoire - IVPCI </a> </li>
							</ul>
						</div>

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