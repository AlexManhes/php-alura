<?php
  echo "Bem cindo(a) ao\t\tsceen match\n";

  $nomeFilme = "Top gun - maverick";


  $anoLancamento = $argv[1] ?? 2022;

  $quantidadeDeNotas = $argc - 1;
 $notas= [];

 for ($contador = 1; $contador < $argc; $contador++){
   $notas[] = (float) $argv[$contador];
 }

 $somaDeNotas = 0;
 for ($i = 0; $i < count($notas); $i++){
    $somaDeNotas += $notas[$i];
 }
  $notaFilme = array_sum($notas) / $quantidadeDeNotas ;
  $planoPime = true;

  $incluindoNoPlano = $planoPime || $anoLancamento < 2025;



  echo  "Nome do filme: " .$nomeFilme ."\n";
  echo  "Ano de lançamento: ".$anoLancamento ."\n";
  echo  "Nota do filme: ".$notaFilme ."\n";
  echo  "Esta no plano? ".$incluindoNoPlano ."\n";
  
  if ($anoLancamento > 2022) {
    echo "Esse filme é um lançameto\n";
  } elseif ($anoLancamento > 2020 && $anoLancamento <= 2022){
    echo "Esse filme é novo\n";
  } 
  else {
    echo "esse filme não é um lançamento\n";
  }
  $genero = match ($nomeFilme) {
    "Top gun - maverick" => "Ação",
    "Thor: Ragnarock" => "Super-Herói",
    "Se beber não case" => "Comédia",
    default => "gênero desconhecido"
  };
echo "O gênero do Filme é:  $genero";

