<?php

namespace App\model;

class User{

    private $nome;

    function __construct($nome){
        $this -> nome = $nome;
    }
   
    public function getNome(){
        return $this-> nome ;
    }

}