<?php

// Require
require "../twitteroauth/vendor/autoload.php";
require "Tweets.class.php";

// uses
use Abraham\TwitterOAuth\TwitterOAuth;

// Connection to Twitter API.
$CONSUMER_KEY = "TVnZltDeiTZ3glmasrVKL9Fbs";
$CONSUMER_SECRET = "gkmf1X339O98nTwTWwG8HbpK7jKyqonR6pn3ZBECcVkBdEwzak";
$acces_token = "967873903-XoHM80tVabiSJD0ZtIvm2atpQQaPrsjcN5J8mVQv";
$acces_token_secret = "aKELAjYSziXQQVp1VzNFzQblBq460WLc68XrZIKm3gS2N";

// list id
$list_id = 220539461;

// Create Object Tweets in order to use twitter API and retrieve the tweets.
$my_tweet = new Tweets($CONSUMER_KEY, $CONSUMER_SECRET, $acces_token, $acces_token_secret);
$tweets = $my_tweet->getTweetsFromList($list_id);
$tweets = $my_tweet->toDataArray($tweets);
$my_tweet ->transformToJson($tweets);

?>