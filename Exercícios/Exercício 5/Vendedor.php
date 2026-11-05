<?php

class Vendedor{
    private string $nomeVendedor;
    private float $salarioBase;
    private float $totalVendas;

    public function __construct($nomeVendedor, $salarioBase, $totalVendas){
        $this->nomeVendedor = $nomeVendedor;
        $this->salarioBase = $salarioBase;
        $this->totalVendas = $totalVendas;
    }

    public function getNomeVendedor(){
        return $this->nomeVendedor;
    }

    public function getSalario(){
        return $this->salarioBase;
    }

    public function getTotalVendas(){
        return $this->totalVendas;
    }

    public function calcularComissao(){
        if($this->totalVendas <= 5000){
            return ($this->totalVendas * 0.04) + $this->totalVendas;
        }
        else{
            return ($this->totalVendas * 0.06) + $this->totalVendas;
        }
    }

    public function calcularBonus(){
        if($this->totalVendas > 10000){
            return 100;
        }
    }

    public function calcularSalarioFinal(){
        return $this->salarioBase + $this->calcularComissao() + $this->calcularBonus();
    }
}

?>