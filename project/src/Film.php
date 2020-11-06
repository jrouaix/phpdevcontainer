<?php declare(strict_types=1);

final class Film
{
    public int $id;
    public string $titre;

    function __construct($id, $titre)
    {    
        $this->id = $id;
        $this->titre = $titre;
    }
}
