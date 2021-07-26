<?php
// https://www.php.net/manual/en/book.strings.php
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
// Rechercher plusieurs chaînes
$sansAccent = str_replace(['é', 'è', 'ê'], 'e', $chaine);
// Recherche insensible à la casse
$sansAccent = str_ireplace(['é', 'è', 'ê'], 'e', $chaine);

// explode/implode converti chaine en tableau et inversement
$fruits = explode(', ', 'ananas, banane, cerise');
$chaineFruits = implode(' - ', $fruits);
echo $chaineFruits."\n";

// trim, ltrim, rtrim
echo trim('   une chaine avec des espacements aux extrémités  ')."\n";

// printf, sprintf, fprintf
echo printf('Le %s est de %d', 'devis', 34)."\n";
// Formatter un nombre en français
echo number_format(123456.78, 2, ',', ' ')."\n";

// changement de casse
echo strtoupper('en casse basse')."\n";
echo strtolower('EN CASSE HAUTE')."\n";
echo ucfirst('initiale en majuscules')."\n";
echo ucwords('initiale en majuscules')."\n";

// échapement de caractères
// addslashes déspécifie les '"', ''': utiles pour une chaine PHP
// à insérer dans une autre chaine PHP
echo addslashes('une chaine avec des "quotes"')."\n"; // réciproque stripslashes

// htmlspecialchars déspécifie les caractères interprétés par le HTML
// utile pour assemble du HTML (XSS)
echo htmlspecialchars('<script>alert("bonjour éèçàù")</script>')."\n"; // htmlspecialchars_decode
echo htmlentities('<script>alert("bonjour éèçàù")</script>')."\n"; //htmlentities_decode

// conversion de caractère
echo base64_encode('bonjour tout le monde')."\n";
echo json_encode(['nom' => 'Doe', 'prenom' => 'John'])."\n";

// hash / somme de control => vérification d'intégrité
// exemple E-Tag (cache-control)
echo md5('une donnée à hacher')."\n";
echo sha1('une donnée à hacher')."\n";

