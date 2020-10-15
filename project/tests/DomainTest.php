<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class DomainTest extends TestCase
{
    public function testCinemaService_can_get_cinemas(): void
    {
        $sut = new CinemaService();
        $query = new CinemaListeQuery();
        $cinemas = $sut->getCinemas($query);
        $this->assertEquals(count($cinemas), 2);
    }

    public function testCinemaService_can_get_a_cinema(): void
    {
        $sut = new CinemaService();
        $query = new CinemaEntityQuery(2);
        $cinema = $sut->getCinema($query);
        $this->assertNotSame($cinema, null);
        // var_dump($sut);
        $this->assertEquals($cinema->nom, "Dragon");
    }

    public function testCinemaService_can_get_a_list_of_movies_in_a_cinema(): void
    {
        $sut = new CinemaService();
        $query = new CinemaEntityQuery(2);
        $films = $sut->getFilms($query);
        $this->assertNotSame($films, null);
        // var_dump($sut);
        $this->assertEquals(count($films), 1);
    }

    public function testPHPundefinedIsNull(): void
    {
        $this->assertSame($voidvoid, null);
    }
}
