<?php
$index = 0;
foreach ($Jojos as $jojo => $antagonist) {
    $index++;
    echo "
        <h1>Parte {$index}</h1>
        <h2>Protagonista: {$jojo}<h2>
        <h2>Antagonista: {$antagonist}<h2>
    ";
}