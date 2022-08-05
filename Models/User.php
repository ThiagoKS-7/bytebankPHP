<?php
include './Models/Conta.php';

class User {
    public $id;
    private $nome;
    private $email;
    private $cpf;
    private $telefone;
    private $conta;
    public function __construct($request) {
        $this->id = $request['id'];
        $this->nome = $request['nome'];
        $this->email = $request['email'];
        $this->cpf = $request['cpf'];
        $this->telefone = $request['telefone'];
        $this->conta = new Conta($request);
    }
    public function getId() {
        return $this->id;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getCpf()
    {
        return $this->cpf;
    }
    public function getTelefone()
    {
        return $this->telefone;
    }
    public function getConta()
    {
        return $this->conta;
    }

    public function __toString()
    {
        return (
            "\nID: " . $this->id . "\n" .
            "Nome: " . $this->nome . "\n" .
            "Email: " . $this->email . "\n" .
            "Telefone: " . $this->telefone . "\n" .
            "========= Conta ========= \n" .
            $this->conta . "\n"
        );
    }

}