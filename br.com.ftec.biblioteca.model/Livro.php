<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Livro
 *
 * @author aline.zanin
 */
class Livro {
    private $Id;
    private $Titulo;
    private $Editora;
    private $Autor;
    private $Categoria;
    function __construct($Id, $Titulo, $Editora, $Autor, $Categoria) {
        $this->Id = $Id;
        $this->Titulo = $Titulo;
        $this->Editora = $Editora;
        $this->Autor = $Autor;
        $this->Categoria = $Categoria;
    }

        function getTitulo() {
        return $this->Titulo;
    }

    function getEditora() {
        return $this->Editora;
    }

    function getAutor() {
        return $this->Autor;
    }

    function getCategoria() {
        return $this->Categoria;
    }

    function setTitulo($Titulo) {
        $this->Titulo = $Titulo;
    }

    function setEditora($Editora) {
        $this->Editora = $Editora;
    }

    function setAutor($Autor) {
        $this->Autor = $Autor;
    }

    function setCategoria($Categoria) {
        $this->Categoria = $Categoria;
    }

        //put your code here
}
