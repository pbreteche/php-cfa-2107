<?php

class Commerce
{
    private DateTimeImmutable $ouverture;

    public function __construct(DateTimeImmutable $ouverture)
    {
        $this->ouverture = $ouverture;
    }

    public function getHoraireOuverture()
    {
        return $this->ouverture;
    }
}