@extends('layouts.appclient')

{{-- start content --}}
@section('contenu')
<link rel="stylesheet" href="{{asset('home/contacts.css')}}">
<!-- Slider Area -->
{{-- <div class="container">
	<div class="row justify-content-center">
		<div class="col-10"> --}}

		
		
            <div class="container">
                <div class="section-title">
                    <h2><span> Contacts </span> </h2>
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
				<div class="col-12">
					<div class="contour_presentation">
						<div class="titre">
							{{-- <p>   <strong> ParisTech Alumni </strong> </p>	 
							<div class="explitexte">
								Les écoles de ParisTech entretiennent des liens étroits et collaborent avec les universités parisiennes, et avec d’autres écoles d’ingénieurs et universités pour définir et organiser les programmes et les enseignements de plusieurs masters.
							</div>--}}
						</div>
						<div class="lestexte">
							Université Polytechnique ISPA
						</div>
						<div class="titre">
							<p> <strong>DIRECTION GENERALE</strong> </p>
							<ul>
								<li> <span> Mobile secrétariat: +225 07 08 51 87 80 </span></li>
								<li> <span> Téléphone : +225 27 30 64 66 60 </span></li>
								<li> <span> Téléphone : +225 27 30 64 67 00  </span></li>
								<li> <span> Email Directeur : dg@inphb.ci    </span></li>
								<li> <span> Email Direction Générale : secretariatdg@inphb.ci  </span></li>
								<li> <span> Email Assistante du Directeur Général: celestine.largaton@inphb.ci </span></li>
								<li> <span> Email Assistante chargée de missions: francoise.kone@inphb.ci</span></li>
								<li> <span> BP 1093 Yamoussoukro – Côte d’Ivoire</span></li>
								<li> <span> Situation Géographique : Yamoussoukro,  </span></li>
								
								{{-- <ul class="masterefrançais">
									<li> <a href="https://ispaedu.com/communication-et-evenementiel/" target="_blank"> Communication Evénementiel  
									</a> </li>
								</ul> --}}
							</ul>
						</div>
                        <div class="titre">
							<p> <strong>DIRECTION GENERALE ADJOINT-PR </strong> </p>
							<ul>
								<li> <span> Mobile secrétariat: +225 07 08 51 87 80 </span></li>
								<li> <span> Téléphone : +225 27 30 64 66 60 </span></li>
								<li> <span> Téléphone : +225 27 30 64 67 00  </span></li>
								<li> <span> Email Directeur : dg@inphb.ci    </span></li>
								<li> <span> Email Direction Générale : secretariatdg@inphb.ci  </span></li>
								<li> <span> Email Assistante du Directeur Général: celestine.largaton@inphb.ci </span></li>
								<li> <span> Email Assistante chargée de missions: francoise.kone@inphb.ci</span></li>
								<li> <span> BP 1093 Yamoussoukro – Côte d’Ivoire</span></li>
								<li> <span> Situation Géographique : Yamoussoukro,  </span></li>
							</ul>
						</div>
                        <div class="titre">
							<p> <strong>SERCTARIAT GENERAL
                            </strong> </p>
							<ul>
								<li> <span> Mobile secrétariat: +225 07 08 51 87 80 </span></li>
								<li> <span> Téléphone : +225 27 30 64 66 60 </span></li>
								<li> <span> Téléphone : +225 27 30 64 67 00  </span></li>
								<li> <span> Email Directeur : dg@inphb.ci    </span></li>
								<li> <span> Email Direction Générale : secretariatdg@inphb.ci  </span></li>
								<li> <span> Email Assistante du Directeur Général: celestine.largaton@inphb.ci </span></li>
								<li> <span> Email Assistante chargée de missions: francoise.kone@inphb.ci</span></li>
								<li> <span> BP 1093 Yamoussoukro – Côte d’Ivoire</span></li>
								<li> <span> Situation Géographique : Yamoussoukro,  </span></li>
							</ul>
						</div>
						{{-- <div class="titre">
							
							<div class="">
								<a class="btn" href="images/CVetien1.pdf" target="_blank"> <i class="fa fa-download"></i>  Cliquez ici pour visiter le site de l'école </a>
							</div>
						</div> --}}
						
					</div> <!--/ End contour_presentation  -->
					{{-- </div> --}}
				</div>  <!-- end col-7 --> 
			</div> <!-- end row --> 
		</div> <!-- end container -->
	</section>
		
	
@endsection

@section('scripts')
    <script src="home/data-table.js"></script> 
@endsection