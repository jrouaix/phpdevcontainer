<?php declare(strict_types=1);


final class CinemaListeQuery {}

final class CinemaEntityQuery {
    public int $id;
    function __construct($id)
    {    
        $this->id = $id;
    }
}

final class CinemaService
{
    public array $cinemas;

    function __construct() 
    {
        $this->cinemas = [
            new Cinema(1, "CGR", "La Rochelle", "BIG", [ new Film(1, "Au temps pour moi en emporte le vent") ]),
            new Cinema(2, "Dragon", "La Rochelle", "Closed", [ new Film(2, "Le jour du ragondin") ])
        ];
    }

    public function getCinemas(CinemaListeQuery $query) : array
    {
        return $this->cinemas;
    }

    public function getCinema(CinemaEntityQuery $query) : Cinema
    {
        foreach ($this->cinemas as $key => $value) {
            if ($value->id == $query->id) {
                return $value;
            }
        }
        return null;
    }

    public function getFilms(CinemaEntityQuery $query) : array
    {
        foreach ($this->cinemas as $key => $value) {
            if ($value->id == $query->id) {
                return $value->films;
            }
        }
        return null;
    }
}
