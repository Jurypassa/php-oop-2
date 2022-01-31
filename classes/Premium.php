<?php

class Premium extends Utente{
    private $sconto;

    public function __construct($_nome, $_cognome, $_sconto)
    {
        parent::__construct($_nome, $_cognome);
        $this->sconto = $_sconto;
    }
    
    public function setEmail($_email){
        $this->email = $_email;
    }

    public function getEmail(){
        return $this->email;
    }
}