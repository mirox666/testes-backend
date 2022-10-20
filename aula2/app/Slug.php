<?php

class Slug {
    private $texto;
    public function __construct($texto)
    {
       $this->texto = $texto; 
    }
    public function converter(){
          
        $resultado = str_replace(" ","-","$this->texto");// o str_replace() irá subistir um determinado valor que está sendo procurado(1° parâmetro), por outro (2° parâmetro) é uma determinada string,(3° parâmetro)
        return strtolower($resultado);
    }
}