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

/**
 * Type de tests
 *  - unitaire:
 *      valider une classe et ses méthodes isolée et fournissant les données d'entrées
 *      et en validant les données de retour
 *      avantages: peu couteux et rapide à l'exécution, vont être exécuter très fréquemment
 *          afin d'alerter tôt si un problème est détecter
 *      inconvénients: ne garantie rien sur la fonctionnalité globale
 *  - fonctionnel (end-to-end)
 *      valider une application entière, dans un environement similaire à la production,
 *      en testant des fonctionnalités utilisateurs
 *      avantages: réaliste, ie on va pouvoir vérifier l'adéquation entre la spécification
 *          de la fonctionnalité et son implémentation
 *      inconvénient: lourd et couteux, utiliser moins souvent, quand les tests plus rapide
 *          ont tous en succès
 *  - test d'intégration
 *      tester l'appli au sein de son écosystème, en la liant aux autres applications, aux données, etc.
 *  - test de fumée
 *      petit test simple et rapide, pour vérifier que l'application tourne
 *  - tests utilisateurs
 *      on met l'application en production, et ce sont l'ensemble des utilisateurs qui peuvent remonter
 *      les dysfonctionnements et les suggestions d'évolution
 *  - autres suivant le type d'application
 */
/**
 * Quoi tester de façon unitaire ?
 *  - exclure les classes triviales (trop simples, sans réel traitement)
 *  - chercher en priorité des classes avec des méthodes "métier" (liés aux fonctionnalités utilisateur)
 *  - moins priorité sur les objets purement technique
 *
 * Caractéristiques d'un test unitaire:
 *  - il est unitaire, il isole un objet des ses dépendances pour le tester tout seul
 *      on «bouchonne» les dépendances
 *  - il est indépendant du contexte, la seule variation est fournie par les données d'entrée
 *  - il est extrêmement simple (voir stupide), on doit pouvoir vérifier qu'on teste convenablement
 *      en un coup d'œil
 */
