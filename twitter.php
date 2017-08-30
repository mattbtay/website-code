<?php

// keys and tokens
$consumer_key = 'EtmsBy4ZP0HErQreacxg';
$consumer_secret = 'RyZoTI8xt6CY9yLXZwla7BUMWwECTH0CDkd3xhpZVis';
$access_token = '16320748-Xf6LwZhdWgzsa6musuiOyAQQC8wiqg5UYrvCoWGg';
$access_token_secret = 'ap8kdrP0LR8tBw4OnWeI69lBQV58S7wYKkOtzBJFPA';

// include library
require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

// connect API
$connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");

// get tweets
$status = $connection->get("statuses/user_timeline", ["count" => 1, "exclude_replies" => true, "user_id" => "16320748", "include_rts" => false]);

$statusText = $status[0]->text;

?>
