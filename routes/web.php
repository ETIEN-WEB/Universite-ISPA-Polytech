<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@home');
Route::get('presentation', 'HomeController@presentation');
Route::get('gouvernance', 'HomeController@gouvernance');
Route::get('communaute', 'HomeController@communaute');
Route::get('presentation_ecole', 'HomeController@presentation_ecole');
Route::get('businesschool', 'HomeController@businesschool');
Route::get('esiit', 'HomeController@esiit');
Route::get('ispd', 'HomeController@ispd');
Route::get('isbtp', 'HomeController@isbtp');
Route::get('eda', 'HomeController@eda');
Route::get('ivpci', 'HomeController@ivpci');

Route::get('nosfacultés', 'HomeController@nosfacultés');

/*/////////////// FORMATION *////////////////*/ 
Route::get('offre_formation', 'FormationController@offre_formation');
Route::get('doublediplom', 'FormationController@doublediplom');
Route::get('formation_continue', 'FormationController@formation_continue');
Route::get('diplome_français', 'FormationController@diplome_français');
Route::get('diplomeivoirien', 'FormationController@diplomeivoirien');
Route::get('echange_etudiant', 'FormationController@echange_etudiant');
Route::get('formationenseignant', 'FormationController@formationenseignant');
Route::get('partenariats_internationaux', 'FormationController@parten_inter');
Route::get('faculte_science_eco', 'FormationController@faculte_science_eco');
Route::get('faculte_science_juridique', 'FormationController@faculte_science_juridique');
Route::get('licence', 'FormationController@licence');
Route::get('master', 'FormationController@master');
Route::get('mba_ispa', 'FormationController@mba_ispa');
Route::get('recrutement_international', 'FormationController@recrut_inter');
/*/////////////// END FORMATION *////////////////*/ 


/*/////////////// INTERNATIONAL *////////////////*/ 

Route::get('accord_doubl_diplome', 'InternationalController@accord_doubl_diplome');
Route::get('france', 'InternationalController@france');
Route::get('Gabon', 'InternationalController@Gabon');
Route::get('USA', 'InternationalController@USA');
Route::get('Canada', 'InternationalController@Canada');
Route::get('contacts', 'InternationalController@contacts');
Route::get('stage_emploi', 'InternationalController@stage_emploi');
Route::get('noscampus', 'InternationalController@noscampus');
Route::get('accord_triple_diplome', 'InternationalController@accord_triple_diplome');


/*/////////////// END INTERNATIONAL *////////////////*/ 
//Route::get('accord_triple_diplome', 'InternationalController@accord_triple_diplome');