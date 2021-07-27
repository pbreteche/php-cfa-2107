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
        echo $this->ouverture->format('d/m/Y');
    }
}