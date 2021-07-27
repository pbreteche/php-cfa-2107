<?php

$apparte = file_get_contents('apparte.php');
// affichage première ligne
echo substr($apparte, 0, strpos($apparte, "\n"));
$lignes = explode("\n", $apparte);

$file = fopen('apparte.php', 'r');
$fileContent = fread($file, filesize('apparte.php'));
fseek($file, 0); // équivalent à rewind($file)
$premiereLigne = fgets($file); // fgetc pour lire 1 caractère
echo $premiereLigne;

$char = fgetc($file);
while (false !== $char && "\n" !== $char) {
    echo $char."\n";
    $char = fgetc($file);
}

fclose($file);

$fichierCsv = fopen('exemple.csv', 'r');
$ligneCsv = fgetcsv($fichierCsv, null, ';');
fclose($fichierCsv);
print_r($ligneCsv);

$dataFromJson = json_decode(file_get_contents('exemple.json'), true);
print_r($dataFromJson);

$outputDir = './output';
if (!file_exists($outputDir) || !is_dir($outputDir)) {
    throw new Exception('Le répertoire de sortie doit exister:');
}

file_put_contents('output/put_content.php', $apparte);

$file = fopen('output/fwrite.php', 'w');
fwrite($file, $premiereLigne);
fputs($file, $premiereLigne);
fclose($file);

$file = fopen('output/test.csv', 'w');
fputcsv($file, array_keys($dataFromJson[0]));
foreach ($dataFromJson as $ligne) {
    fputcsv($file, $dataFromJson[0]);
}

// accès aux commandes standard de manipuation de système de fichier
// via des fonctions PHP
// mkdir, touch, chmod, chown, rename (équivalent de mv), etc

print_r(pathinfo(__FILE__));
echo pathinfo('exemple.html.twig', PATHINFO_EXTENSION)."\n";

echo realpath('/home/pierre/Documents/../php-cfa')."\n";
echo realpath('.')."\n";
echo __DIR__."\n";