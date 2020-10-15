<?php declare(strict_types=1);

final class Cinema
{
    public int $id;
    public string $nom;
    public string $adresse;
    public string $description;

    function __construct($id, $nom, $adresse, $description)
    {    
        $this->id = $id;
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->description = $description;
    }
}
