@extends('layouts.appclient')

{{-- start content --}}
@section('contenu')
<link rel="stylesheet" href="{{asset('home/licence.css')}}">
<!-- Slider Area -->
{{-- <div class="container">
	<div class="row justify-content-center">
		<div class="col-10"> --}}

		
		
            <div class="container">
                <div class="section-title">
                    <h2><span> Nos Licences</span> </h2>
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
				<div class="col-7">
					<div class="contour_presentation">
						<div class="titre">
							{{-- <p>   <strong> ParisTech Alumni </strong> </p>	 --}}
							<div class="explitexte">
								Les ??coles de ParisTech entretiennent des liens ??troits et collaborent avec les universit??s parisiennes, et avec d???autres ??coles d???ing??nieurs et universit??s pour d??finir et organiser les programmes et les enseignements de plusieurs masters.
							</div>
						</div>
						<div class="lestexte">
							Les Licences des ??coles de l'Universit?? Polytechnique ISPA:
						</div>
						<div class="titre">
							<p> <strong>ISPA Business School</strong> </p>
							<ul>
								<li> <span> MARKETING / MANAGEMENT </span></li>
								<li> <span> AUDIT COMPTABLE ET CONTROLE DE GESTION </span></li>
								<li> <span> BANQUE ET BOURSE </span></li>
								<li> <span> COMMUNICATION    </span></li>
								<li> <span> FINANCE COMPTABILITE  </span></li>
								<li> <span> MANAGEMENT DE PROJET INTERNATIONAL </span></li>
								<li> <span> RESSOURCES HUMAINES ET MANAGEMENT     </span></li>
								<li> <span> CHARGE DE DEVELOPPEMENT COMMERCIAL ET MARKETING   </span></li>
								<li> <span> COMMUNICATION ET STRATEGIES DIGITALES    </span></li>
								<li> <span> IMMOBILIER    </span></li>
								<li> <span> MARKETING ET COMMUNICATION   </span></li>
								<li> <span> GESTION DES RESSOURCES HUMAINES ET MANAGEMENT    </span></li>
								
								<li> <span> ACCOUNTING AND FINANCE    </span></li>
								<li> <span> BUSINESS MANAGEMENT    </span></li>
								<li> <span> LAWS LLB LAW    </span></li>
								<li> <span> DIGITAL BUSINESS MANAGEMENT    </span></li>
								<li> <span> INTERNATIONAL BUSINESS MANAGEMENT    </span></li>
								<li> <span> ASSOCIATE OF ARTS    </span></li>
								<li> <span> BUSINESS ADMINISTRATION  </span></li>
								<li> <span> BUSINESS MANAGEMENT    </span></li>

								<li> <span> CYBERSECURITY SPECIALIST     </span></li>
								<li> <span> ARTS IN BUSINESS COMMUNICATION </span></li>
								
								{{-- <ul class="masterefran??ais">
									<li> <a href="https://ispaedu.com/communication-et-evenementiel/" target="_blank"> Communication Ev??nementiel  
									</a> </li>
								</ul> --}}
							</ul>
						</div>
						<div class="titre">
							<p> <strong>Ecole Superieure d'Industrie, d'ing??nierie et de Technologique - ESIIT </strong> </p>
							<ul>
								<li> <span> G??nie Logiciel	 </span></li>
								<li> <span> Electronique Informatique </span></li>
								<li> <span> Cyber S??curit?? et codage Informatique  </span></li>
								<li> <span> Industrielle T??l??comunication  </span></li>
							</ul>
							<div class="">
								<a class="btn" href="images/CVetien1.pdf" target="_blank"> <i class="fa fa-download"></i>  Cliquez ici pour visiter le site de l'??cole </a>
							</div>
						</div>
						<div class="titre">
							<p> <strong>Institut des Sciences Politiques et du Droit - ISPD </strong> </p>
							<ul>
								{{-- <li> <a href="http://ispdedu.com/bts-francais-en-droit.php" target="_blank">  BTS Fran??ais </a> </li> --}}

								<li> <span> Droit des affaires </span></li>
								<li> <span> Assistante juridique entreprise </span></li>
								<li> <span> Droit et sciences politiques </span></li>
								<li> <span> Droit et management </span></li>
							</ul>
							<div class="">
								<a class="btn" href="images/CVetien1.pdf" target="_blank"> <i class="fa fa-download"></i>  Cliquez ici pour visiter le site de l'??cole </a>
							</div>
						</div>
					</div> <!--/ End contour_presentation  -->
					{{-- </div> --}}
				</div>  <!-- end col-7 --> 
				<div class="col-5">
					<div class="contour_col">
						<div class="contour_img">
							<img src="{{asset('images/ville_reduis02.jpg')}}" alt="">
						</div>
						<div class="contour_img">
							<img src="{{asset('images/RW-B-2.jpg')}}" alt="">
						</div>
						<div class="contour_img">
							<img src="{{asset('images/Copy-of-DV5A1630.jpg')}}" alt="">
						</div>
						<div class="contour_image">
							<img src="{{asset('images/RW_reduis.jpg')}}" alt="">
						</div>
					</div>
				</div> 
			</div> <!-- end row --> 
		</div> <!-- end container -->
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