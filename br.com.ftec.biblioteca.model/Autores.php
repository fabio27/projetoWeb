<?php


class Autores {
    private $nome;
    private $Id;
            function __construct($nome,$Id) {
                $this->nome = $nome;
        $this->Id = $Id;
    }

    function getId() {
        return $this->Id;
    }

    function setNome($Id) {
        $this->Id = $Id;
    }

    function getNome() {
        return $this->nome;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

        //put your code here
}
