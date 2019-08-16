<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Locacao
 *
 * @author aline.zanin
 */
class Locacao {
    private $Livro;
    private $Data_retirada;
    private $Data_devolucao;
    private $Id;
    function __construct($Livro, $Data_retirada, $Data_devolucao, $Id) {
        $this->Livro = $Livro;
        $this->Data_retirada = $Data_retirada;
        $this->Data_devolucao = $Data_devolucao;
        $this->Id = $Id;
    }

    function getLivro() {
        return $this->Livro;
    }

    function getData_retirada() {
        return $this->Data_retirada;
    }

    function getData_devolucao() {
        return $this->Data_devolucao;
    }

    function getId() {
        return $this->Id;
    }

    function setLivro($Livro) {
        $this->Livro = $Livro;
    }

    function setData_retirada($Data_retirada) {
        $this->Data_retirada = $Data_retirada;
    }

    function setData_devolucao($Data_devolucao) {
        $this->Data_devolucao = $Data_devolucao;
    }

    function setId($Id) {
        $this->Id = $Id;
    }

        
    //put your code here
}
