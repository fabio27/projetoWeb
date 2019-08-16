<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Troca
 *
 * @author aline.zanin
 */
class Troca {
    private $Id;
    private $Nome_Doacao;
    private $E_mail;
    private $Whats_app;
    private $Titulo_do_Livro;
    private $Doacao_Emprestimo;
    function __construct($Id, $Nome_Doacao, $E_mail, $Whats_app, $Titulo_do_Livro, $Doacao_Emprestimo) {
        $this->Id = $Id;
        $this->Nome_Doacao = $Nome_Doacao;
        $this->E_mail = $E_mail;
        $this->Whats_app = $Whats_app;
        $this->Titulo_do_Livro = $Titulo_do_Livro;
        $this->Doacao_Emprestimo = $Doacao_Emprestimo;
    }

    function getId() {
        return $this->Id;
    }

    function getNome_Doacao() {
        return $this->Nome_Doacao;
    }

    function getE_mail() {
        return $this->E_mail;
    }

    function getWhats_app() {
        return $this->Whats_app;
    }

    function getTitulo_do_Livro() {
        return $this->Titulo_do_Livro;
    }

    function getDoacao_Emprestimo() {
        return $this->Doacao_Emprestimo;
    }

    function setId($Id) {
        $this->Id = $Id;
    }

    function setNome_Doacao($Nome_Doacao) {
        $this->Nome_Doacao = $Nome_Doacao;
    }

    function setE_mail($E_mail) {
        $this->E_mail = $E_mail;
    }

    function setWhats_app($Whats_app) {
        $this->Whats_app = $Whats_app;
    }

    function setTitulo_do_Livro($Titulo_do_Livro) {
        $this->Titulo_do_Livro = $Titulo_do_Livro;
    }

    function setDoacao_Emprestimo($Doacao_Emprestimo) {
        $this->Doacao_Emprestimo = $Doacao_Emprestimo;
    }

    
    //put your code here
}
