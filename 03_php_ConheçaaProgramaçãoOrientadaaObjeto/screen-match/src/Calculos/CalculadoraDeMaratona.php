<?php

class CalculadoraDeMaratona{
    public int $duracaoMaratona = 0;

    public function inclui( Titulo $titulo): void{
       $this->duracaoMaratona += $titulo->duracaoEmMinutos();
    
    }
    public function duracao() : int{
        return $this->duracaoMaratona;
    }
}