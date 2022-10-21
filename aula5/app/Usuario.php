<?php
namespace App;

class Usuario{
    private $nome;


    public function verificaNome($valor){
        $this->nome = strlen($valor);// strlen() Conta quantidades de letras em um texto.
        if($this->nome >= 10 ){
            return $this->nome;
        }
        else{
            return false;
        }
    }
}