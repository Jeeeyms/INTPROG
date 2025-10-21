<?php

header('Content-Type: application/json');


$user_profile = [
    "id"     => "1",
    "name"   => "Maria",
    "email"  => "Maria@example.com",
    "status" => "active"
];


$json_response = json_encode($user_profile);
echo $json_response;

?>