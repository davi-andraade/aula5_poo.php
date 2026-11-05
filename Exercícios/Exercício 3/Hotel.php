<?php

class ReservaHotel{
    
    private $nome;
    private $tipo;
    private $diarias;
    private $cafe;

    public function __construct($nome, $tipo, $diarias, $cafe){
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->diarias = $diarias;
        $this->cafe = $cafe;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function getDiarias(){
        return $this->diarias;
    }

    public function getCafe(){
        return $this->cafe;
    }

    public function calcularHospedagem(){
        if($this->tipo == "standard"){
            $valorDiaria = 150;
        } elseif($this->tipo == "suite"){
            $valorDiaria = 230;
        } else {
            return "Tipo de quarto inválido.";
        }
        return $valorDiaria;
    }

    public function calcularCafe(){
        if($this->cafe == "Sim"){
            $valorCafe = 20;
        } elseif($this->cafe == "Não"){
            $valorCafe = 0;
        } else {
            return "Opção de café da manhã inválida.";
        }
        return $valorCafe;
    }

    public function calcularDesconto(){
        if($this->diarias >= 5){
            $desconto = 0.08;
        } else {
            $desconto = 0;
        }
        return $desconto;
    }

    public function calcularTotal(){
        $valorDiaria = $this->calcularHospedagem();
        $valorCafe = $this->calcularCafe();
        $desconto = $this->calcularDesconto();

        $total = ($valorDiaria * $this->diarias) + ($valorCafe * $this->diarias);
        $totalComDesconto = $total - ($total * $desconto);

        return number_format($totalComDesconto, 2, ',', '.');
    }
}

?>