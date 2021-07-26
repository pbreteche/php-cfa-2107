<?php
$chaine = 'littéral';
$chaineInterpolee = "template avec $chaine";

$position = strpos($chaineInterpolee, 'avec');

echo $chaineInterpolee."\n";
if (false === $position) {
    echo 'la chaine est absente'."\n";
} else {
    echo 'la chaine a été trouvée en position '.$position."\n";
}

$traduction = str_replace('template', 'gabarit', $chaineInterpolee);
echo $traduction."\n";
