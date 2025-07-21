<?php

require_once __DIR__ . '/src/Modelo/Genero.php';
require_once __DIR__ . '/src/Modelo/Titulo.php';
require_once __DIR__ . '/src/Modelo/Filme.php';
require_once __DIR__ . '/src/Modelo/Serie.php';
require_once __DIR__ . '/src/Calculos/CalculadoraDeMaratona.php';

echo "Bem-vindo(a) ao ScreenMach\n";

$filme = new Filme(
    'Top Gun - Maverick',
    2022,
    Genero::SuperHeroi,
    180
);

$filme->avalia(10);
$filme->avalia(6);
$filme->avalia(7.8);
$filme->avalia(8.2);

var_dump($filme);

echo 'Filme:' . "\n";

echo $filme->nome . "\n";
echo $filme->media() . "\n";
echo $filme->anoLancamento . "\n";

echo 'Serie: '."\n";

$serie = new Serie('Lost', 2007, Genero::Drama, 10, 20, 30);

echo $serie->nome . "\n";
echo $serie->anoLancamento . "\n";
$serie->avalia(8);
echo $serie->media() . "\n";

$calculadora = new CalculadoraDeMaratona();

$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();
echo"Duração da maratona: ". $duracao ;