@extends('layouts.appclient')

{{-- start content --}}
@section('contenu')
<link rel="stylesheet" href="{{asset('home/noscampus.css')}}">
<!-- Slider Area -->
{{-- <div class="container">
	<div class="row justify-content-center">
		<div class="col-10"> --}}

		
		
            <div class="container">
                <div class="section-title">
                    <h2><span> Nos Campus </span> </h2>
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
                            <div class="single-slider" style="background-image:url('images/batiment_ecole004.jpg')" data-stellar-background-ratio="0.5">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-12">
                                            {{-- <div class="slider-text">
                                                <h3> Bienvenue à l'Université polytechnique ISPA </h3>
                                                <div class="slogan"> Education Discipline Travail </div>
												<p>	Reconnue d'utilité ublique, la Fondation Ispapolytechnique reçois l'appui de grands groupes industriels, tous partenaires de longue date de l'enseignement supérieur et de la recherche.	
                                                    </p>
                                                    <div class="gras" > <strong>></strong> Découvrez la fondation Ispapolytechnique </div>
                                            </div> --}}
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
	{{-- <section>
		<div class="container">
			<div class="row">
				<div class="col-9">
					<div class="contour_presentation">
						<div class="lestexte">
							Liste des départements de la Faculté des Sciences Economiques et Managements.
						</div>
						<div class="explitexte">
                            
                            <p> 
                                Les écoles de ParisTech proposent <strong> différents programmes de formation continue</strong>, longs ou courts, adaptables en fonction de la situation des personnes intéressées : mastères spécialisés©, certificats, cours en ligne (MOOCs), validation des acquis de l’expérience etc.
                            </p>
                            
                        </div> 
                        
						 <div class="titre">
							<p>   <strong> En savoir plus sur l'offre de formation continue  au sein de ParisTech :</strong> </p>	
							<ul>
								<li> <a href="{{URL::to('/')}}"> ISPA Business School </a> </li>
                                <li> <a href="{{URL::to('/')}}"> Ecole Superieure D'ingenierie informatique et Technologique
                                    - ESIIT </a> </li>
							</ul>
						</div>

                        <br>
                        

						<div class="titre titr1">
							<p>   <strong> L'équipe </strong> </p>	
							<div class="equipe"> Déléguée générale et international : Florence Lelait </div>
                            <div class="equipe"> Déléguée communication : Claudia Gineston </div>
                            <div class="equipe"> Déléguée diversité : Marie Rebeyrolle </div>
                            <div class="equipe"> Délégué enseignement : Marie-Ségolène Naudin </div>
						</div>
						
						</div>
					</div>

				</div>
			</div>
		</div>
	</section> --}}
    <section class="fond_departement">
		<div class="container">
            {{-- <div class="titre_departement">
                Liste des départements de la Facultés des Sciences Juridiques, Politiques et Sociales.
            </div> --}}
            <div class="deu_fond_departement"> 
                {{-- <div class="titre">
                    <p>   <strong> DEPARTEMENT DES SCIENCES DU MANAGEMENT (DSM)</strong> </p>	
                </div> --}}
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="img_departement">
                            <img src="{{asset('images/campus_france.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        
                        <div class="text_departement">
                            <div class="departement"> Campus de Gabon </div>
                            Le département des Sciences du Management offre divers programmes au niveau du Bachelor et du Master. Ils sont dispensés par des professeurs qui sont des spécialistes de différentes sous-disciplines du management, entre autres, la finance.

                            <ul class="listcordone">
                                <li><i class="fa fa-phone"></i>Mobile: +225 456-7890 </li>
                                <li><i class="fa fa-envelope"></i>Email: Info@youremail.com</li>

                                <div class="titre">
                                    <a class="btn" href="images/CVetien1.pdf" target="_blank">  Cliquer ici pour visiter le site de l'école </a>
                                </div>
                            </ul>

                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="deu_fond_departement fond2"> 
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="text_departement">
                            <div class="departement"> Campus d'Abidjan </div>
                            Le département des Sciences du Management offre divers programmes au niveau du Bachelor et du Master. Ils sont dispensés par des professeurs qui sont des spécialistes de différentes sous-disciplines du management, entre autres, la finance.

                            <ul class="listcordone">
                                <li><i class="fa fa-phone"></i>Mobile: +225 456-7890 </li>
                                <li><i class="fa fa-envelope"></i>Email: Info@youremail.com</li>

                                <div class="titre">
                                    <a class="btn" href="images/CVetien1.pdf" target="_blank">  Cliquer ici pour visiter le site de l'école </a>
                                </div>
                            </ul>

                            
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="img_departement">
                            <img src="{{asset('images/salle_classe0101.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="deu_fond_departement"> 
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="img_departement">
                            <img src="{{asset('images/201812drd_eu_main.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        
                        <div class="text_departement">
                            <div class="departement"> Campus de San Pedro </div>
                            Le département des Sciences du Management offre divers programmes au niveau du Bachelor et du Master. Ils sont dispensés par des professeurs qui sont des spécialistes de différentes sous-disciplines du management, entre autres, la finance.

                            <ul class="listcordone">
                                <li><i class="fa fa-phone"></i>Mobile: +225 456-7890 </li>
                                <li><i class="fa fa-envelope"></i>Email: Info@youremail.com</li>

                                <div class="titre">
                                    <a class="btn" href="images/CVetien1.pdf" target="_blank">  Cliquer ici pour visiter le site de l'école </a>
                                </div>
                            </ul>

                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="deu_fond_departement fond2"> 
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="text_departement">
                            <div class="departement"> Campus de Paris </div>
                            Le département des Sciences du Management offre divers programmes au niveau du Bachelor et du Master. Ils sont dispensés par des professeurs qui sont des spécialistes de différentes sous-disciplines du management, entre autres, la finance.

                            <ul class="listcordone">
                                <li><i class="fa fa-phone"></i>Mobile: +225 456-7890 </li>
                                <li><i class="fa fa-envelope"></i>Email: Info@youremail.com</li>

                                <div class="titre">
                                    <a class="btn" href="images/CVetien1.pdf" target="_blank">  Cliquer ici pour visiter le site de l'école </a>
                                </div>
                            </ul>

                            
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="img_departement">
                            <img src="{{asset('images/campus_abidjan.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="deu_fond_departement"> 
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="img_departement">
                            <img src="{{asset('images/ecole_batiment012.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="text_departement">
                            <div class="departement"> Campus UVPCI </div>
                            Le département des Sciences du Management offre divers programmes au niveau du Bachelor et du Master. Ils sont dispensés par des professeurs qui sont des spécialistes de différentes sous-disciplines du management, entre autres, la finance.

                            <ul class="listcordone">
                                <li><i class="fa fa-phone"></i>Mobile: +225 456-7890 </li>
                                <li><i class="fa fa-envelope"></i>Email: Info@youremail.com</li>

                                <div class="titre">
                                    <a class="btn" href="images/CVetien1.pdf" target="_blank">  Cliquer ici pour visiter le site de l'école </a>
                                </div>
                            </ul>

                            
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="deu_fond_departement fond2"> 
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="text_departement">
                            <div class="departement"> Campus de Gabon </div>
                            Le département des Sciences du Management offre divers programmes au niveau du Bachelor et du Master. Ils sont dispensés par des professeurs qui sont des spécialistes de différentes sous-disciplines du management, entre autres, la finance.
                            <ul class="listcordone">
                                <li><i class="fa fa-phone"></i>Mobile: +225 456-7890 </li>
                                <li><i class="fa fa-envelope"></i>Email: Info@youremail.com</li>
                                <div class="titre">
                                    <a class="btn" href="images/CVetien1.pdf" target="_blank">  Cliquer ici pour visiter le site de l'école </a>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="img2_departement">
                            <img src="{{asset('images/campus_abidjan.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="deu_fond_departement fond3"> 
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="img2_departement">
                            <img src="{{asset('images/departement03.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="text_departement03">
                            <div class="departement"> Campus de San Pedro </div>
                            Le département des Sciences du Management offre divers programmes au niveau du Bachelor et du Master. Ils sont dispensés par des professeurs qui sont des spécialistes de différentes sous-disciplines du management, entre autres, la finance.
                            <ul class="listcordone">
                                <li><i class="fa fa-phone"></i>Mobile: +225 456-7890 </li>
                                <li><i class="fa fa-envelope"></i>Email: Info@youremail.com</li>
                                <div class="titre">
                                    <a class="btn" href="images/CVetien1.pdf" target="_blank">  Cliquer ici pour visiter le site de l'école </a>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> --}}
            
            
            
            {{-- 
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
                    <div class="text_departement">
                        Le département des Sciences du Management offre divers programmes au niveau du Bachelor et du Master. Ils sont dispensés par des professeurs qui sont des spécialistes de différentes sous-disciplines du management, entre autres, la finance, le marketing, l’organisation, les ressources humaines et le management international.
                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="img_departement">
                        <img src="{{asset('images/quantitative-reasoning.jpg')}}" alt="">
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
		
		
@endsection

@section('scripts')
    <script src="home/data-table.js"></script> 
@endsection