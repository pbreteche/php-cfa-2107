<?php

// heure actuelle en seconde depuis epoch (1er janvier 1970)
time();
// idem en millisecondes
microtime();

// formate une date
echo date('d/m/Y')."\n";
echo date('d M, y', time() - 24 * 60 * 60)."\n";
// fabrique une date
echo mktime(12, 0, 0, 7, 26, 2021)."\n";
echo strtotime('2021-07-26 12:00:00')."\n";

// via des objets
$maintenant = new DateTime();
echo $maintenant->format('d/m/Y')."\n";
$maintenant->modify('+1 week');
echo $maintenant->format('d/m/Y')."\n";

$premierLundiDeCeMois = new DateTime('first monday of this month');
echo $premierLundiDeCeMois->format('d/m/Y')."\n";

$lundiPrecedent = new DateTimeImmutable('previous monday');
$mardiPrecedent = $lundiPrecedent->modify('tomorrow');
echo $lundiPrecedent->format('d/m/Y')."\n";

class Formation
{
    private $titre;

    private $debut;

    public function __construct(string $titre, DateTimeImmutable $debut)
    {
        $this->titre = $titre;
        $this->debut = $debut;
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function getDebut(): DateTimeImmutable
    {
        return $this->debut;
    }

    public function setDebut(DateTimeImmutable $debut)
    {
        $now = new DateTime();
        if ($debut < $now) {
            throw new Exception('la date ne peut être dans le passé');
        }

        $this->debut = $debut;
    }
}

$formation = new Formation('PHP', new DateTimeImmutable());
$titre = $formation->getTitre();
$debut = $formation->getDebut();

echo DateTimeInterface::W3C."\n";
