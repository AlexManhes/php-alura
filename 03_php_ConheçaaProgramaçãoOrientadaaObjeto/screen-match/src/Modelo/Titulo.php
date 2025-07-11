<?php
class Titulo{
    private array $notas;

    public function __construct(
      public readonly string $nome,
      public readonly int $anoLancamento,
      public readonly Genero $genero,
    )
        {
            
            $this->notas = [];
        }    
    public function avalia(float $nota): void{
       $this->notas[] = $nota;
    }
    public function media(): float{
        if (count($this->notas) === 0) {
            return 0.0;
        }
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);
        return $somaNotas / $quantidadeNotas;
    }
    public function duracaoEmMinutos(): int{
       return  '0';
    }
   
} 
