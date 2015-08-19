<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::controller('/twit',"TwitterController");




Route::get('can',function(){

$fs = new \Foursquare\Client();

$checkins = $fs->api('checkins')->recent(); // recent($id,max=10)
foreach($checkins as $checkin) {
  echo $checkin; // $checkin->timestamp.' '.$checkin->getVenue()->getName()
}

	
});