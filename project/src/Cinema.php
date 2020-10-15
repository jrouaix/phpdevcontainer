<?php declare(strict_types=1);

final class Cinema
{
    public int $id;
    public string $nom;
    public string $adresse;
    public string $description;
    public array $films;

    function __construct($id, $nom, $adresse, $description, $films)
    {    
        $this->id = $id;
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->description = $description;
        $this->films = $films;
    }
}
