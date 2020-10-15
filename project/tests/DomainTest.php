<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class DomainTest extends TestCase
{
    public function testCinemaService_can_get_cinemas(): void
    {
        $sut = new CinemaService();
        $query = new CinemaListeQuery();
        $cinemas = $sut->getCinemas($query);
        $this->assertEquals(count($cinemas), 1);
    }
}
