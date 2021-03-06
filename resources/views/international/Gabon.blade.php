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
                    <h2><span> Gabon </span> </h2>
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
							Apr??s s?????tre engag?? ces dix derni??res ann??es dans le d??veloppement de partenariats en Am??rique latine, ParisTech a d??cid?? en 2018 d???explorer les opportunit??s de coop??ration en Afrique, en particulier au Kenya avec l???Universit?? de Nairobi (84 000 ??tudiants), leader dans le pays et en Afrique de l???Est, qui f??te en 2020 son cinquanti??me anniversaire. 
						</div>
						
						
                        {{-- <div class="titre">
							<p>   <strong> ParisTech Alumni </strong> </p>	
							<div class="explitexte">
                                Les ??coles de ParisTech ont mis en place de fa??on mutualis??e avec plusieurs universit??s de renom des accords cadre qui 
                            </div>
						</div> --}}
                        <div class="explitexte">
                            <p>
                                Cinq ??coles de ParisTech ??? AgroParisTech, Chimie ParisTech - PSL, Ecole des Ponts ParisTech, Institut d???Optique Graduate School et MINES ParisTech - PSL ??? ont  l'opportunit??, gr??ce au programme <a href="#" class="lien_text" >  ADESFA </a>(Appui au D??veloppement de l???Enseignement Sup??rieur Fran??ais en Afrique) financ?? par le Minist??re de l'Europe et des Affaires ??trang??res et op??r?? par France Education International, d'explorer les opportunit??s de coop??ration avec l'<a href="#" class="lien_text" >  Universit?? de Nairobi. </a>
                            </p>
                            <p> 
                                Une d??l??gation s'est rendue en <a href="#" class="lien_text" > juillet 2019 ?? Nairobi  </a>pour une premi??re mission exploratoire. Elles ont visit?? les installations des colleges d???agriculture et sciences v??t??rinaires, de sciences biologiques et physiques et d???architecture et ing??nierie, que ce soit sur le campus principal, celui de Chiromo ou bien celui de Upper Kabete. La d??l??gation a  ??chang?? avec les enseignants-chercheurs  et appris comment fonctionne la formation d???ing??nieur au Kenya. Une d??l??gation de l'Universit?? de Nairobi a en retour visit?? les cinq ??coles en <a href="#" class="lien_text" >   f??vrier 2020 </a>, d??couvrant ainsi les infrastructures disponibles et approfondissant sa connaissance de la formation d???ing??nieur ?? la fran??aise. 
                            </p>
                            <p>
                                ParisTech a souhait?? d??velopper les op??rations de mobilit?? afin que des contacts scientifiques et acad??miques plus ??troits soient nou??s et que chaque partenaire approfondisse sa connaissance de l???autre, sachant que les ??coles et l???Universit?? de Nairobi partagent des sujets d???int??r??t commun dans de nombreux domaines : ??nergie, environnement, chimie, m??canique etc.
                            </p>
                            {{-- <p>
                                Les zones g??ographiques prioritaires sont celles identifi??es pour le <a href="#" class="lien_text" > programme de recrutement international (cycle ing??nieur) :</a>
                            </p> --}}
                        </div>
                        {{-- <div class="titre">
							<p>   <strong> Ces doubles dipl??mes permettent aux ??l??ves-ing??nieurs :</strong> </p>	
							<ul>
								<li> <span> 
                                    L???Am??rique du Sud, avec l'Argentine, le Br??sil et la Colombie
                                </span> </li>
                                
							</ul>
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