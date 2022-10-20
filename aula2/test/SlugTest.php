<?php
use PHPUnit\Framework\TestCase;

class SlugTest extends TestCase{
    public function test_converter(){
        require ("app/Slug.php");

        $meuSlug = new Slug("noticia do estado maior");
        $resultadoEsperado = "noticia-do-estado-maior";

        $this->assertEquals($meuSlug->converter(),$resultadoEsperado);// O método assertEquals significa literalmente afirmar que seja igual, com isso estamos comparando o valor do médo com o valor passado.
    }

}