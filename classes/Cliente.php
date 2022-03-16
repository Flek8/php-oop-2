<?php

require __DIR__ . '/User.php';

class Cliente extends User {

    private $email;
    private $password;
    protected $puntiCliente;
    public $sconto = 20;

    public function __construct($nome, $cognome, $email, $password ) {
        parent::__construct($nome, $cognome);

        $this->email = $email;
        $this->password = $password;
    }

    public function setPunti($spesa) {
        $this->puntiCliente = $spesa / 5;
    }
}