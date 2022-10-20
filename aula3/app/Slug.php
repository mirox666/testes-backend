<?php
namespace App;
class Slug {
    private $texto;
    public function __construct($texto)
    {
       $this->texto = $texto; 
    }
    public function converter(){
          
        $resultado = str_replace(" ","-",$this->getTexto());// o str_replace() irá subistir um determinado valor que está sendo procurado(1° parâmetro), por outro (2° parâmetro) é uma determinada string,(3° parâmetro)
        return strtolower($resultado);
    }

    public function getTexto(){
        return trim($this->texto);// A função TRIM() remove todas os espaços do lado direito e esquerdo do texto
    }
}