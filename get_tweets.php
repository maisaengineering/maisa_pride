<?php
require_once('TwitterAPIExchange.php');

$settings = array(
    'oauth_access_token' => "3019692817-VNpFTOTGLd9oFSrSDVyfJhlh4x2ysTIGLDb5vnY",
    'oauth_access_token_secret' => "jofzBflFjM3zNo6cd1UWhsLweSRMLLwDWvECNK0m7Tvnv",
    'consumer_key' => "rgz4XZhbJHJpGhpTzmR1vAVuF",
    'consumer_secret' => "FWKlhfdZzrBb1lXSzUuq7wM9Bt2uIdJ4fgRGq4MUCV33RqqnPQ"
);


$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield = '?screen_name=Maisasolutions';
$requestMethod = 'GET';


$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();

?>