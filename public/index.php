<?php

$data = [
    'characters' => [
        'mercenary' => [
            'name' => 'Cahara',
            'class' => 'the Mercenary',
            'lore' => "
                Em um dia fatídico, Cahara recebeu uma tarefa desafiadora dos oficiais do reino: ele foi prometido uma recompensa generosa se conseguisse tirar Le'garde, o líder enigmático dos infames Cavaleiros do Sol da Meia-Noite, das temíveis masmorras do medo e da fome. Apesar de sentir uma certa inquietação desde o início, a necessidade de dinheiro de Cahara superou suas reservas. A estranheza da missão o deixou nauseado, mas ele decidiu prosseguir mesmo assim. Ao ouvir rumores sobre as perigosas masmorras e a possibilidade de grandes tesouros escondidos nas antigas ruínas, ele está bem ciente de que esta missão é um ponto crucial em sua vida.
            ",
        ],
        'knight' => [
            'name' => "D'arce",
            'class' => 'the Knight',
            'lore' => "
                Cercados pelos exércitos de Rondon, D'arce e seus camaradas lutaram bravamente, mas estavam em desvantagem. Le'garde foi capturado, e os Cavaleiros foram mortos quase que na totalidade. Escapando por pouco do campo de batalha, D'arce decidiu pessoalmente resgatar Le'garde e salvá-lo da execução a qualquer custo. Ela partiu em direção à sinistra masmorra onde Le'garde estava sendo mantido: as Masmorras do Medo e da Fome.
            ",
        ],
        'outlander' => [
            'name' => 'Ragnvaldr',
            'class' => 'The Outlander',
            'lore' => "
                Durante uma expedição de caça, Ragnvaldr retornou à sua aldeia, apenas para testemunhar seus piores medos se materializando diante de seus olhos: os Cavaleiros do Sol da Meia-Noite invadiram Oldegård para tomar o Cubo das Profundezas, matando muitos membros da tribo de Ragnvaldr no processo. Isso incluiu a esposa e o filho de Ragnvaldr, Hilde e Björn. Agora, com o coração cheio de raiva e um desejo de vingança, Ragnvaldr embarcou em uma jornada até as Masmorras do Medo e da Fome, a fim de recuperar o cubo e se vingar do capitão do exército, Le'garde, por toda a dor que seu povo sofreu durante a invasão.
            ",
        ],
        'darkPriest' => [
            'name' => 'Enki Ankarararian',
            'class' => 'Dark Priest',
            'lore' => "
                Enki was born with an Enlightened soul, which endowed him with an insatiable thirst for knowledge. His motivation for entering the foreboding Dungeons of Fear & Hunger was to learn more about the prophecies surrounding Le'garde. Enki is self-centered, abrasive, and has a sharp tongue.
            ",
        ],
    ],
];


ob_start(); // guarda os valores na memoria

extract($data);

require 'home.php';

$content = ob_get_contents(); // Armazena em uma variavel os valores que estão na mémoria

ob_end_clean(); // Limpa a mémoria

echo $content;