<?php

return [
    "get"=> [
        "/" => "HomeController@index",
        "/data/artist" => "HomeController@getArtists",
        "/logout" => "LoginController@logout",
        "/login/status" => "LoginController@getStatus",
        "/authentication/login" => "AuthenticationController@login",
        "/authentication/register" => "AuthenticationController@register",
    ],
    "post"=> [
        "/authentication/login"=> "LoginController@bind",
        "/authentication/register"=> "LoginController@store",
    ]
];