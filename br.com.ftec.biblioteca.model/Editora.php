<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Editora
 *
 * @author aline.zanin
 */
class Editora {
    private $Id;
    private $Nome;
    private $Endereco;
    private $Telefone;
    private $Email;
    
    function __construct($Id,$Nome, $Endereco, $Telefone, $Email) {
        $this->Id = $Id;
        $this->Nome = $Nome;
        $this->Endereco = $Endereco;
        $this->Telefone = $Telefone;
        $this->Email = $Email;
    }

    
function getId() {
        return $this->Id;
    function getId() {
        return $this->Id;
    }

    function getEndereco() {
        return $this->Endereco;
    }

    function getTelefone() {
        return $this->Telefone;
    }

    function getEmail() {
        return $this->Email;
    }

    function setNome($Nome) {
        $this->Nome = $Nome;
    }

    function setEndereco($Endereco) {
        $this->Endereco = $Endereco;
    }

    function setTelefone($Telefone) {
        $this->Telefone = $Telefone;
    }

    function setEmail($Email) {
        $this->Email = $Email;
    }

        //put your code here
}

}