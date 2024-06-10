<?php $this->extends('Master', ['title' => $contentData->nome, 'childCss' => ['./assets/css/content.css']]); ?>

<div id="content-focus">
    <div class="content-data">
        <div class="img-container">
            <img src="<?php echo $contentData->thumbnail; ?>" alt="Thumbnail">
        </div>
        
        <div class="content-info">
            <h2><?php echo $contentData->nome; ?></h2>
            <p>Descrição: <?php echo $contentData->descricao; ?></p>
            <p>Artista: <?php echo $contentData->nome_usuario; ?></p>
        </div>
    </div>
    
    <div class="custom-audio">
        <audio controls>
            <source src="<?php echo $contentData->audio; ?>" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
    </div>
</div>