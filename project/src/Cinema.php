<?php declare(strict_types=1);

final class Cinema
{
    protected $nom;

    protected $adresse;

    protected $description;

    function __construct($nom, $adresse, $description)
    {    
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->description = $description;
    }
}
