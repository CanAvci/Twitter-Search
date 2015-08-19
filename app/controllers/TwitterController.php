<?php

class TwitterController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{
		return View::make('twitter_giris');
	}


	public function postTweet()
	{

$veri=Input::all();

if (empty($veri['consumer_key']) && empty($veri['consumer_secret']) && empty($veri['access_token']) && empty($veri['access_token_secret'])) 
{

$twit= new Twitter();




$arama_sonuc=$twit->SearchTweet($twit->permalink(trim($veri['search_word'])),$veri['max_word_count']);

return View::make('tweet_listele',array("arama_sonuc"=>$arama_sonuc));

}
else
{

$veri= new Twitter();
$veri->connection($veri['consumer_key'],$veri['consumer_secret'],$veri['access_token'],$veri['access_token_secret']);
$arama_sonuc=$twit->SearchTweet($twit->permalink(trim($veri['search_word'])),$veri['max_word_count']);

return View::make('tweet_listele',array("arama_sonuc"=>$arama_sonuc));
}

		
	}

}
