<?php 
header("Content-type:text/html;charset='utf-8'");
require 'twitteroauth.php';
/**
* 
*/
class Twitter 
{
private $consumer_key;
private $consumer_secret;
private $access_token;
private  $access_token_secret;

	
	function __construct()
	{
		$this->consumer_key="UOOArvgIa2ovp1JOIHFfxecRZ";
$this->consumer_secret="RiSpE6i4e5InX4dtD9u4N0jq7s7F24PfvkqPujSVTRMsv7HtwC";
$this->access_token="3300624450-7Os1GxssixpuoAkY0eZ6MlobgIr3VzG1WH6xYFW";
$this->access_token_secret="jeQHLjvYQP6eRv9a084KK8XkrzIcZ9wR5xl4G1qEbevHo";
   }

public  function connection($consumer_key="",$consumer_secret="",$access_token="",$access_token_secret="")
{
	$this->consumer_key=$consumer_key;
$this->consumer_secret=$consumer_secret;
$this->access_token=$access_token;
$this->access_token_secret=$access_token_secret;

}

   public function SearchTweet($kelime,$count=10)
   {

   	if (empty(trim($kelime)))
   	 {
$kelime="merhaba";
 		
   	}

   	$twitter=new TwitterOAuth($this->consumer_key,$this->consumer_secret,$this->access_token,$this->access_token_secret);
	$tweets=$twitter->get("https://api.twitter.com/1.1/search/tweets.json?q=$kelime&result_type=recent&count=$count&format=json");
	return $tweets;

   	
   }




function permalink($string)
{
$find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
$replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
$string = strtolower(str_replace($find, $replace, $string));
$string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
$string = trim(preg_replace('/\s+/', ' ', $string));
$string = str_replace(' ', '-', $string);
return $string;
}












}