<?php

class LocacaoBicicleta{
    private $nomeCliente;
    private $tipoBicicleta;
    private $horasLocacao;

    public function __construct($nomeCliente, $tipoBicicleta, $horasLocacao){
    $this->nomeCliente = $nomeCliente;
    $this->tipoBicicleta = $tipoBicicleta;
    $this->horasLocacao = $horasLocacao;
    }

    public function getNomeCliente(){
        return $this->nomeCliente;
    }

    public function getTipoBicicleta(){
        return $this->tipoBicicleta;
    }

    public function getHorasLocacao(){
        return $this->horasLocacao;
    }

    public function calcularValorBruto(){
        if($this->tipoBicicleta == "comum"){
            return $this->horasLocacao * 10;
        } elseif($this->tipoBicicleta == "eletrica"){
            return $this->horasLocacao * 18;
        } else {
            return 0;
        }
    }

    public function calcularDesconto(){
        $valorBruto = $this->calcularValorBruto();
        if($this->horasLocacao > 5){
            return $valorBruto * 0.1;
        } else {
            return 0;
        }
    }

    public function calcularTotal(){
        $valorBruto = $this->calcularValorBruto();
        $desconto = $this->calcularDesconto();
        return $valorBruto - $desconto;
    }

}