<?php
$username = "HyzioY7LP6ZoO7nTYKbG8O4ISkyWnX1JvAEVAhtWKZumooCzqp41";
$password = "";
$url ="https://nextar.flip.id/disburse/5535152564";
$context = stream_context_create(array(
    'http' => array(
        'header' => "Authorization: Basic " . base64_encode("$username:$password")
    )
    ));

$json = file_get_contents($url, false, $context);
$apiResult = json_decode($json);
// $apiResult = stream_get_contents(STDIN);
?>