<?php

class Utente {
    public $nome;
    public $cognome;
    public $email;

    public function __construct($_nome, $_cognome)
    {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
    }

    public function setEmail($_email){
        $this->email = $_email;
    }

    public function getEmail(){
        return $this->email;
    }
}