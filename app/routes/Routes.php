<?php

return [
    "get"=> [
        "/home" => "HomeController@index",
        "/authentication"=> "AuthenticationController@index",
    ],
    "post"=> [
        "/login"=> "AuthenticationController@login",
    ]
];