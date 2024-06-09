<?php $this->extends('Master', [
    'title' => $title,
    "childCss" => [
        "./assets/css/home.css"
        ],
    "childScripts" => [
        "./assets/js/home.js"
    ]
    ]); ?>

<div id="home-container">
    <div>
        <h2>Artistas:</h2>

        <div id="artist-list"></div>
    </div>

    <div>
        <h2>Musicas:</h2>

        <div id="music-list"></div>
    </div>
</div>