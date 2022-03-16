<?php

class cartaCredito {
    public $circuito;
    private $numero;
    private $proprietario;
    private $dataScadenza;
    private $codice;
    private $validita = true;

    public function __construct($circuito, $numero, $proprietario, $dataScadenza) {

        $this->numero = $numero;
        $this->proprietario = $proprietario;
        $this->dataScadenza = $dataScadenza;
    }

    public function setCodice($num) {
        $this->codice = $num;
    }

    public function scadenzaCarta() {

        //funzione per confrontare la data di scadenza e la data odierna
        $this->validita = false;
    }
}