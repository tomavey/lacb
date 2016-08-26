<?php

require_once('twitter_proxy.php');

// Twitter OAuth Config options
$oauth_access_token = 'y3131680330-P9BZK0CsbdGP0Dxh6rgrbSFVKhecqxTq22RAhLf';
$oauth_access_token_secret = 'Ao9bIEghEEPr73yvaI4dwCFy9vSWDYejf94TPacvVj1IK';
$consumer_key = 'IF8Ws2hHYvnCym8VJvqQakZwn';
$consumer_secret = 'SsPBgv4Xfc6vFumgSrXOHWJzVA2l79xRT4RXx3BLk6Vs9g8fhe';
$user_id = '3131680330';
$screen_name = 'ThemeEagle';
$count = 1;

$twitter_url = 'statuses/user_timeline.json';
$twitter_url .= '?user_id=' . $user_id;
$twitter_url .= '&screen_name=' . $screen_name;
$twitter_url .= '&count=' . $count;

// Create a Twitter Proxy object from our twitter_proxy.php class
$twitter_proxy = new TwitterProxy(
	$oauth_access_token,			// 'Access token' on https://apps.twitter.com
	$oauth_access_token_secret,		// 'Access token secret' on https://apps.twitter.com
	$consumer_key,					// 'API key' on https://apps.twitter.com
	$consumer_secret,				// 'API secret' on https://apps.twitter.com
	$user_id,						// User id (http://gettwitterid.com/)
	$screen_name,					// Twitter handle
	$count							// The number of tweets to pull out
);

// Invoke the get method to retrieve results via a cURL request
$tweets = $twitter_proxy->get($twitter_url);

echo $tweets;

?>