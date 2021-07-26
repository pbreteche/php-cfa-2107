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

