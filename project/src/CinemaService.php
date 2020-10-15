<?php declare(strict_types=1);

final class CinemaListeQuery
{
    
}

final class CinemaService
{
    private array $_cinemas;

    function __construct() 
    {
        $this.$_cinemas = [
            new Cinema("CGR", "La Rochelle", "BIG"),
        ];
    }

    public function getCinemas($query) 
    {
        return $_cinemas;
    }



}
