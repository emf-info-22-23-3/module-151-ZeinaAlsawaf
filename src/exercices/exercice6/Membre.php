<?php

class Membre
{
    private $nom;
    public $numero;

    public function __construct($nom, $numero)
    {
        $this->nom = $nom;
        $this->numero = $numero;
    }
    
    public function getNom()
    {
        return $this->nom;
    }
}
?>
