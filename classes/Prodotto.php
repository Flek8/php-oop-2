<?php

class Prodotto {

    public $marca;
    public $prezzo;
    public $disponibilita = true;

    public function __construct($marca) {
        $this->marca = $marca;
        $this->modello = $modello;
    }

    public function setPrezzo($num) {
        $this->prezzo = $num;
    }

    public function esaurito() {
        $this->disponibilita = false;
    }
}