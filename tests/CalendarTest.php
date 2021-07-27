<?php

use App\Calendar;
use PHPUnit\Framework\TestCase;

class CalendarTest extends TestCase
{

    public function testHello()
    {
        $noel = new DateTimeImmutable('2021-12-25');
        $miJuillet = new DateTimeImmutable('2021-07-15');
        $ascension = new DateTimeImmutable('2021-05-13');
        $calendar = new Calendar();

        $this->assertTrue($calendar->estFerie($noel));
        $this->assertFalse($calendar->estFerie($miJuillet));
        $this->assertTrue($calendar->estFerie($ascension));
    }
}