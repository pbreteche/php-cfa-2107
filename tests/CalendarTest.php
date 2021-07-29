<?php

use App\Calendar;
use PHPUnit\Framework\TestCase;

class CalendarTest extends TestCase
{

    public function testEstFerie()
    {
        $noel = new DateTimeImmutable('2021-12-25');
        $miJuillet = new DateTimeImmutable('2021-07-15');
        $ascension = new DateTimeImmutable('2021-05-13');
        $calendar = new Calendar();

        $this->assertTrue($calendar->estFerie($noel), 'Noel doit être férié');
        $this->assertFalse($calendar->estFerie($miJuillet), 'Mi juillet ne doit pas être férié');
        $this->assertTrue($calendar->estFerie($ascension), 'Le jeudi de m\'ascension doit être férié');
    }
}