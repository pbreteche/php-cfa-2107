<?php

use App\WorkingDays;
use PHPUnit\Framework\TestCase;

class WorkingDaysTest extends TestCase
{

    public function testGetWorkingDays()
    {
        $begin = new DateTimeImmutable('2021-07-12');
        $end = new DateTimeImmutable('2021-07-18');

        $workingDays = new WorkingDays(new \App\Calendar());

        $result = $workingDays->getWorkingDays($begin, $end);

        $this->assertEquals(4, $result, 'La semaine du 14 juillet doit avoir 4 jours ouvrés');
    }
}
