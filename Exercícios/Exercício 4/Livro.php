<?php

class EmprestimoLivro {
    private string $nome;
    private string $titulo;
    private int $atraso;

    public function __construct($nome, $titulo, $atraso) {
        $this->nome = $nome;
        $this->titulo = $titulo;
        $this->atraso = $atraso;
    }

    public function getUsuario() {
        return $this->nome;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAtraso(){
        return $this->atraso;
    }

    public function calcularMulta(){
        if($this->getAtraso() == 0){
            return 'Sem multa';
        }else if($this->getAtraso() >= 1 && $this->getAtraso() < 6){
            return ($this->getAtraso() * 2);
        }else if($this->getAtraso() >= 6){
            return ($this->getAtraso() * 2 + 3);
        }
    }

    public function verificarSituacao(){
        if($this->getAtraso() == 0){
            return 'Livro devolvido no prazo';
        }else{
            return 'Livro devolvido com atraso';
        }
    }
}

?>