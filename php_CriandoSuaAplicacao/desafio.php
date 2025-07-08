<?php
$titular_conta = "Alex Sander";
$saldo_atual = 500;

while (true) {
    echo "\n**************************\n";
    echo "Titular da conta: $titular_conta\n";
    echo "Saldo Atual: $saldo_atual\n";
    echo "**************************\n";

    echo "1. Consultar saldo atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";
    echo "**************************\n";
    echo "Escolha uma opção: ";

    $numero = trim(fgets(STDIN));

    if ($numero == 1) {
        echo "Saldo atual da sua conta: R$ $saldo_atual\n";
    } elseif ($numero == 2) {
        echo "Quanto deseja sacar? ";
        $saque = (float) fgets(STDIN);

        if ($saque > $saldo_atual) {
            echo "Saldo insuficiente para saque!\n";
        } else {
            $saldo_atual -= $saque;
            echo "Saque de R$ $saque realizado com sucesso. Saldo restante: R$ $saldo_atual\n";
        }
    } elseif ($numero == 3) {
        echo "Quanto deseja depositar? ";
        $deposito = (float) fgets(STDIN);
        $saldo_atual += $deposito;
        echo "Depósito de R$ $deposito realizado. Saldo atual: R$ $saldo_atual\n";
    } elseif ($numero == 4) {
        echo "Saindo do sistema. Até logo!\n";
        break;
    } else {
        echo "Opção inválida. Tente novamente.\n";
    }
}
