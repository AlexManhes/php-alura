<?php
    
function exibeMensagemLancamento(int $ano): void {
    if ($ano > 2022) {
        echo "Esse filme é um lançamento\n";
    } elseif($ano > 2020 && $ano <= 2022) {
        echo "Esse filme ainda é novo\n";
    } else {
        echo "Esse filme não é um lançamento\n";
    }
} 

function incluidoNoPlano (bool $planoPrime, int $anoLancamento): bool{
 return $planoPrime || $anoLancamento < 2020;
}
 function criaFilme(string $nome, int $anoLancamento, float $nota, Genero $genero, int $duracaoEmMinutos): Filme
 {
    $filme = new Filme($nome, $anoLancamento, $genero, $duracaoEmMinutos);
    $filme->avalia($nota);
    return $filme;
 }
