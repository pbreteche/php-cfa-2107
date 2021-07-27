<?php

// affectation / création de variables
list($var1, $var2, $var3) = ['valeur1', 'valeur2', 'valeur3'];
extract(['var4' => 'valeur4', 'var5' => 'valeur5']);

// tests
$fruits = ['ananas', 'banane', 'cerise'];

if (in_array('ananas', $fruits)) {
    echo 'trouvé dans le tableau'."\n";
}
if (key_exists(2, $fruits)) {
    echo 'trouvé dans le tableau'."\n";
}
if (in_array(2, array_flip($fruits))) {
    echo 'trouvé dans le tableau'."\n";
}

// insertion
array_push($fruits, 'datte');
array_unshift($fruits, 'pomme'); //insère au début et décale les éléments
$fruits[] = 'poire';

// extraction
array_pop($fruits);
array_shift($fruits);
// extraction d'une tranche (sans suppression)
$bananeCerise = array_slice($fruits, 1, 2);
// extraction d'une tranche (avec suppression/remplacement)
array_splice($fruits, 1, 2, ['pomme', 'poire']);
// suppression
unset($fruits[count($fruits) - 1]);

foreach ($fruits as $i => $fruit) {
    echo $fruit.'/'.$i."\n";
}

while ($fruit = current($fruits)) {
    echo $fruit.'/'.key($fruits)."\n";
    next($fruits); // end(), reset()
}

// applique une fonction sur chaque élément du tableau
array_walk($fruits, function ($fruit) {
    echo $fruit."\n";
});

// retourne un tableau qui le résultat d'un appel
// de fonction sur chacun des éléments
$upperFruits = array_map('strtoupper', $fruits);
print_r($upperFruits);

$stringFruits = array_reduce($fruits, function ($fruit, $accumulator) {
   return $accumulator.' - '.$fruit;
});
echo $stringFruits."\n";

$oddFruits = array_filter($fruits, function($fruit) {
    return strlen($fruit) % 2;
});
print_r($oddFruits);

function traitementAvecOptions($options = [])
{
    $defaultOptions = [
        'height' => 120,
        'width' => 160,
        'color' => '#abcdef',
    ];

    $parametres = array_merge($defaultOptions, $options);
    print_r($parametres);
}

traitementAvecOptions(['height' => 80, 'border' => 'none']);

print_r(array_values($fruits));
print_r(array_keys($fruits));

// Fonctions de tri:
// sort, rsort, asort, ksort, usort, uksort, uasort, krsort, ...
rsort($fruits); // tri inverse sur les valeurs
print_r($fruits);
asort($fruits); // tri sur les valeurs, maintient l'association des clés
print_r($fruits);
ksort($fruits); // tri sur les clés
print_r($fruits);

// tri personnalisé
// tri alphabétique en lisant à l'envers
usort($fruits, function ($a, $b) {
    return strrev($a) <=> strrev($b);
});

function estPalindrome(string $a): bool
{
    $letters = mb_str_split($a);
    krsort($letters);
    $reverseA = implode('', $letters);

    return $a == $reverseA;
}

print_r(estPalindrome('été'));

$fruits = ['cerise', 'pomme', 'citron'];
$couleurs = ['rouge', 'vert', 'jaune'];

print_r(array_combine($fruits, $couleurs));

$contacts = [
    ['nom' => 'Wayne', 'prenom' => 'Bruce'],
    ['nom' => 'Bernard', 'prenom' => 'Edwige'],
    ['nom' => 'Leperse', 'prenom' => 'Julien'],
    ['nom' => 'Wayne', 'prenom' => 'Thomas'],
    ['nom' => 'Doe', 'prenom' => 'John'],
];

usort($contacts, function($c1, $c2) {
    $comparaison = $c1['nom'] <=> $c2['nom'];
    if (0 !== $comparaison) {
        return $comparaison;
    }

    return $c1['prenom'] <=> $c2['prenom'];
});

print_r($contacts);

// 1 <=> 2 // 1 = déjà dans l'ordre
// 1 <=> 1 // 0 = égalité
// 2 <=> 1 // -1 = dans l'ordre inverse