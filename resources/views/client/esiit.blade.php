@extends('layouts.appclient')

{{-- start content --}}
@section('contenu')
<link rel="stylesheet" href="{{asset('home/les_ecole.css')}}">
<!-- Slider Area -->
{{-- <div class="container">
	<div class="row justify-content-center">
		<div class="col-10"> --}}

		
		
            
	
        <div class="container">
            <div class="contour_presentation">
				<div class="section-title">
                    <h2><span> Ecole Superieure d'Industrie, d'ingénierie et de Technologique
                        - ESIIT</span> </h2>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="ecole_carousel">
                            <div id="carouselExampleIndicators" class="carousel slide"  data-ride="carousel">
                                <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{asset('images/A_ecoles/etudiant005.jpg')}}" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('images/A_ecoles/etudiant1.jpg')}}" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('images/A_ecoles/ecoles_batiment002.jpg')}}" alt="Third slide">
                                </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="logoecole">
                                    <img src="{{asset('images/A_logo/ESITT.png')}}">
                                    <a id="school_link" href="http://www.agroparistech.fr/" target="_blank">
                                        Visitez le <b>site internet de l'école</b>	
                                    </a>
                                    
                                    <table id="map_school_info">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    16 rue Claude Bernard<br>
                                                    75005&nbsp;
                                                    Paris                    
                                                </td>
                                                <td>
                                                    Tél :01 44 08 18 43<br>
                                                                Fax :01 44 08 16 00                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="decri_ecole">
                                        <div class="titre">
                                            <div class="explitexte">
												Un environnement stimulant, des infrastructures de pointe et des professeurs de renom À l'ISPA Business School, vous êtes une personne à part entière, porteuse d'un potentiel considérable. 
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            {{-- <div class="col-12">
                                <div class="1_logo">
                            
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="container">
        <div class="contour_presentation">
            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <div class="titre">
                        <div class="explitexte">
							Considéré comme établissement supérieur leader dans les sciences du vivant et de l'environnement, AgroParisTech conduit deux missions fondamentales :
                        </div>
                    </div>
                    <div class="titre">
                        {{-- <p><strong> Partez à la découverte des écoles ParisTech :</strong></p>	 --}}
                        <ul>
                            <li> la formation d’ingénieurs au cœur d’un dispositif étendu à d’autres cursus académiques et professionnalisant articulé en réseaux régionaux ou thématiques bâtis avec de nombreux partenaires </li>
                            <li> la production et la diffusion de connaissances (recherche et développement) en partenariat avec les grands organismes de recherche et les principaux centres techniques professionnels pertinents </li>
                        </ul>
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
                        {{-- </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>



		
		
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