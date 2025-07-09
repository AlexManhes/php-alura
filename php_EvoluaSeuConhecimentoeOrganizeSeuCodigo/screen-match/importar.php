<?php

$caminhoArquvo = __DIR__ ."filme.json";
$conteudoArquivoFIlve = file_get_contents($caminhoArquvo);
$filme = json_decode($conteudoArquivoFIlve, true);

var_dump($filme);