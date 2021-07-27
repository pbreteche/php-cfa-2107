<?php

namespace App;

class Calendar
{

    public function estFerie(\DateTimeImmutable $date)
    {
        return in_array($date->format('m-d'), $this->listeFeries($date->format('Y'))) ;
    }

    private function listeFeries(int $annee)
    {
        return [
            '01-01',
            '05-01',
            '05-08',
            '07-14',
            '08-15',
            '11-01',
            '11-11',
            '12-25',
            //Easter Monday = easter Sunday + 1
            date('m-d', strtotime('+1 day', \easter_date($annee))),
            // Ascension Thursday = Easter Sunday + 40
            date('m-d', strtotime('+40 day', \easter_date($annee))),
        ];
    }
}