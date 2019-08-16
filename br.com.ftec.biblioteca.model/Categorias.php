<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categorias
 *
 * @author aline.zanin
 */
class Categorias {
    private $nome;
    private $discricao;
    function __construct($Id,$nome, $discricao) {
        $this->Id = $Id;
        $this->nome = $nome;
        $this->discricao = $discricao;
    }
     function getId() {
        return $this->Id;
    }

    function setId() {
        return $this->Id;
    }

    function getNome() {
        return $this->nome;
    }
    function setNome($nome) {
        $this->nome = $nome;
    }
    function getDiscricao() {
        return $this->discricao;
    }
    function setDiscricao($discricao) {
        $this->discricao = $discricao;
    }

        //put your code here
}
