<?php

namespace App;

class WorkingDays
{
    private Calendar $calendar;

    public function __construct(Calendar $calendar)
    {
        $this->calendar = $calendar;
    }

    public function getWorkingDays(\DateTimeImmutable $begin, \DateTimeImmutable $end): int
    {
        $count = 0;

        for ($day = $begin; $day <= $end; $day = $day->modify('+1 day')) {
            if (6 > $day->format('N') && !$this->calendar->estFerie($day)) {
                ++$count;
            }
        }

        return $count;
    }
}