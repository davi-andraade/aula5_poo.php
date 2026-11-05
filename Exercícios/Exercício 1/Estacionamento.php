<?php

class Estacionamento{
    private string $placa;
    private string $tipoVeiculo;
    private int $horas;

    public function __construct($placa, $tipoVeiculo, $horas){
        $this->placa = $placa;
        $this->tipoVeiculo = $tipoVeiculo;
        $this->horas = $horas;
    }

    public function getPlaca(){
        return $this->placa;
    }

    public function getTipoVeiculo(){
        return $this->tipoVeiculo;
    }

    public function getHoras(){
        return $this->horas;
    }

    public function valorTotal(){
        if($this->tipoVeiculo == "Carro"){
            return $this->horas * 10;
        } elseif($this->tipoVeiculo == "Moto"){
            return $this->horas * 7;
        } else {
            return 0;
        }
    }
}

?>