<?php
include './Models/User.php';
include './Data/UsersRepository.php';
include './Views/User.View.php';
include './Controllers/ContaController.php';

class ProgramController {
    public function runProgram($users) {
        $usr = new UsersRepository();
        $usv = new UserView();
        $cctrl = new ContaController();

        $users = $usr->getUsers($users);
        $usv->showUserList($users);
        $cctrl->manageTransactions($users);
        $usv->showUserBalance($users);
        
    }
}