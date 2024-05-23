<?php

return [
    "get"=> [
        "/" => "HomeController@index",
        "/account-connect"=> "AccountConnectController@index",
    ],
    "post"=> [
        "/login"=> "LoginController@store",
    ]
];