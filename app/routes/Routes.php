<?php

return [
    "get"=> [
        /* Rotas de renderizar telas */
        "/" => "HomeController@index",
        "/authentication/login" => "AuthenticationController@login",
        "/authentication/register" => "AuthenticationController@register",
        "/addContent" => "ContentController@index:auth",
        /* Rotas de requisição de dados */
        "/data/artist" => "HomeController@getArtists",
        "/data/content" => "ContentController@getContents",
        "/login/status" => "LoginController@getStatus",

        /* Rotas de conteudos */
        "/content" => "ContentController@renderContent:auth",

        /* Rotas de visualizar os artistas */
        "/perfil" => "PerfilController@renderPerfil:auth",
        "/perfil-artist" => "PerfilController@renderArtistProfile",

        /* Rota de desconectar */
        "/logout" => "LoginController@logout",
    ],
    "post"=> [
        "/authentication/login"=> "LoginController@bind",
        "/authentication/register"=> "LoginController@store",
        "/addContent/send" => "ContentController@register",
        "/perfil/edit" => "PerfilController@edit"
    ]
];