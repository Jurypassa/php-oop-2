<?php


class Prodotti {
    public $CPU;
    public $GPU;
    public $SSD;
    public $RAM;
    public $dimensioni;

    public function __construct($_CPU, $_GPU, $_SSD, $_RAM, $_dimensioni)
    {
        $this->CPU = $_CPU;
        $this->GPU = $_GPU;
        $this->SSD = $_SSD;
        $this->RAM = $_RAM;
        $this->dimensioni = $_dimensioni;
    }
}