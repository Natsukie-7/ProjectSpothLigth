<?php

return [
    "get"=> [
        "/" => "HomeController@index",
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