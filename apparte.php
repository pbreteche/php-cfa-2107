<?php
// éàô

$a = 10;

while (0 < $a) {
switch ($a % 3) {
case 2:
echo 'premier cas';
break;
case 1:
echo 'deuxième cas';
break 2;
default:
echo 'defaut';
}

--$a;
}

/**
* Objet stateful :
*
*  possède un "état" qui permet distinguer deux instances
*  de cette même classe
*/

/**
* Objet stateless :
*
*  ne possède pas d'état, mais sert à exécuter un traitement
*  à partir d'entrées éventuelles pour produire une éventuelle sortir
*  sortie
*
*  Objectif:
*      1 même appel de méthode = même résultat
*      ma méthode devient testable
*/

/**
* http://monblog.com/dernières-actus
* http://monblog.com/articles/les-notions-objets-en-php
*/

/**
 * Objet en conception
 * Classe en programmation
 * métaphore: rôle métier = savoir-faire spécialisé
 * illustration: village d'Asterix
 */
/**
 * Interface
 * métaphore: contrat/engagement
 * Question comment ça s'utilise et non comment ça marche
 */

/**
 * 2 mots clé pour faire un appel static
 *
 * self:: appel la méthode la classe courante de l'implémentation
 *      (dans laquelle on est en train d'écrire)
 * static:: appel la méthode de la classe d'origin de l'appel
 *      (déterminé au moment de l'exécution)
 */
