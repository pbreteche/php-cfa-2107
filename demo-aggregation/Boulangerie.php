<?php

class Boulangerie extends Commerce
{

    private Meunier $meunier;

    public function __construct()
    {
        parent::__construct(new DateTimeImmutable());
        $this->meunier = new Meunier();
    }

    public function getMeunier()
    {
        return $this->meunier;
    }

    public function faireUnPain()
    {
        $this->getHoraireOuverture();
        $this->meunier->fournirFarine();
    }
}