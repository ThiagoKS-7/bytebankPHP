<?php

include './Controllers/ProgramController.php';

$p = new ProgramController();
$users = [];
$p->runProgram($users);

/*
TODO: MENUCONTROLLER PRA CONSEGUIR CONTROLAR AS OPERAÇÕES;
TODO: SALVAR REGISTROS E CONSEGUIR ABRIR ELES COM UM .CSV;
*/