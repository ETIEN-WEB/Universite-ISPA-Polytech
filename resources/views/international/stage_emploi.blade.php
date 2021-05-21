@extends('layouts.appclient')

{{-- start content --}}
@section('contenu')
<link rel="stylesheet" href="home/stage_emploi.css">
<!-- Slider Area -->
{{-- <div class="container">
	<div class="row justify-content-center">
		<div class="col-10"> --}}

		
		
            <div class="container">
                <div class="section-title">
                    <h2><span> Stages et Emplois </span></h2>
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
                                La coopération internationale est inhérente aux activités de formation et de recherche développées au sein de ParisTech.
                            </div> --}}
                            <div class="explitexte">
                                <p>
                                    Les élèves des écoles de ParisTech bénéficient d’une formation d’excellence qu’ils vont parfaire en stage au cours de leurs trois années d’étude. Ces stages se déroulent en France ou à l’étranger, principalement en entreprise, mais aussi en laboratoire ou dans le département R&D d’une entreprise lorsqu’il s’agit d’un stage recherche.
                                </p>
                                
                            </div>
                            <div class="titre">
                                {{-- <p>   <strong> En savoir plus sur l'offre de formation continue  au sein de ParisTech :</strong> </p>	
                                 <ul>
                                    <li> <a href="{{URL::to('/')}}"> ISPA Business School </a> </li>
                                    <li> <a href="{{URL::to('/')}}"> Ecole Superieure D'ingenierie informatique et Technologique
                                        - ESIIT </a> </li>
                                </ul> --}}
                            </div>  
                            <br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <section>
		<div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="images/BrestBS.png" alt="Mines Paristech Logo" title="Mines Paristech"/> 
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="images/BrestBS.png" alt="Mines Paristech Logo" title="Mines Paristech"/>
                        
                    </div>
                </div>
				
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="images/BrestBS.png" alt="Mines Paristech Logo" title="Mines Paristech"/>
                        
                    </div>
                </div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="images/BrestBS.png" alt="Mines Paristech Logo" title="Mines Paristech"/>
                        
                    </div>
                </div>
				
				
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="images/BrestBS.png" alt="Mines Paristech Logo" title="Mines Paristech"/>
                        
                    </div>
                </div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="images/BrestBS.png" alt="Mines Paristech Logo" title="Mines Paristech"/> 
                        
                    </div>
                </div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="images/BrestBS.png" alt="Mines Paristech Logo" title="Mines Paristech"/>
                        
                    </div>
                </div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="ecole">
                        <img src="images/BrestBS.png" alt="Mines Paristech Logo" title="Mines Paristech"/> 
                        
                    </div>
                </div>
				
				
				

            </div>
        </div>
    </section>
		

		<!-- End Features -->
		
		
@endsection

@section('scripts')
    <script src="home/data-table.js"></script> 
@endsection