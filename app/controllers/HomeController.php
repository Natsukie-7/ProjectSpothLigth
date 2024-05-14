<?php

namespace app\controllers;

class HomeController
{
    public function index()
    {
        view('Home', [
            'Jojos'=> [
                'JonathanJoestar' => 'Dio Brando',
                'JosephJoestar' => 'Kars',
                'JotaroKujo' => 'Dio Brando',
                'JosukeHigashikata' => 'Yoshikage Kira',
                'GiornoGiovanna' => 'Diavolo',
                'JolyneCujoh' => 'Enrico Pucci',
                'JohnnyJoestar' => 'Funny Valentine',
                'JosukeHigashikata (JoJolion)' => 'Tooru',
            ], 
        ]);
    }
}