<?php

class UserView {
    public function showUserBalance($users) {
        foreach ($users as $user) {
            echo $user->getNome() ." - " .$user->getConta()->getSaldo() . "\n";
        }
    }
    public function showUserList($users) {
        foreach ($users as $user) {
            echo $user;
        }
    }
}