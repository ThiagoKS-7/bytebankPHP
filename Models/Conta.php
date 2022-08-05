<?php
//  tipo char (F ou J) req,
//  codigo Number req,
//  agencia Number req,
//  banco String req
class Conta {
    public $id;
    private $tipo;
    private $codigo;
    private $agencia;
    private $saldo;
    private $banco;
    public function __construct($request) {
        $this->id = $request['id'];
        $this->tipo = $request['tipo'] == 'F' ? "Pessoa Física" : "Pessoa Jurídica";
        $this->codigo = $request['codigo'];
        $this->saldo = $request['saldo'];
        $this->agencia = $request['agencia'];
        $this->banco = $request['banco'];
    }
    public function getId() {
        return $this->id;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function getCodigo()
    {
        return $this->codigo;
    }
    public function getAgencia()
    {
        return $this->agencia;
    }
    public function getBanco()
    {
        return $this->banco;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function sacar($valor) {
        $this-> saldo -= $valor;
        echo "\n- R$" . $valor;
    }

    public function depositar($valor) {
        $this-> saldo += $valor;
        echo "\n+ R$" . $valor;
    }

    public function transferir($conta1, $conta2, $valor) {
        $conta1->sacar($valor);
        $conta2->depositar($valor);
        echo "\n\nR$" . $valor . " transferidos com sucesso!\n";
    }

    public function __toString()
    {
        return (
            "Tipo: " . $this->tipo . "\n" .
            "Saldo: " . $this->saldo . "\n" .
            "Banco: " . $this->banco . "\n" .
            "Agência: " . $this->agencia . "\n" 
        );
    }

}