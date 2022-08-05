<?php
class ContaController {
    public function manageTransactions($users) {
        $users[0]->getConta()->depositar(100);
        $users[2]->getConta()->sacar(100);
        $users[0]->getConta()->transferir($users[0]->getConta(),$users[2]->getConta(), 1000);
    }
}