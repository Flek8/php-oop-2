<?php

class User {

    public $nome;
    public $cognome;
    protected $eta;

    public function __construct($nome, $cognome) {
        $this->nome = $nome;
        $this->cognome = $cognome;
    }

    public function setEta($num) {
        if (is_numeric($num) && $num > 18) {
            $this->eta = $num;
        }
    }

}