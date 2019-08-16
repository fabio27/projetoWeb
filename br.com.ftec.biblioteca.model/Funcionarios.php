<?php
include_once './Pessoa.php';


//CLASSE,ATRIBUTO, METODO,CONSTRUTOR-->


class Funcionarios extends Pessoa{
    function __construct($codigo, $função) {
        $this->codigo = $codigo;
        $this->função = $função;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getFunção() {
        return $this->função;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setFunção($função) {
        $this->função = $função;
    }

        private $codigo;
    private $função;
    //put your code here
}
