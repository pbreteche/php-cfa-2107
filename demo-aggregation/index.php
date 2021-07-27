<?php

require_once 'Boulangerie.php';
require_once 'Meunier.php';


$maBoulangerie = new Boulangerie();
try {
    $maBoulangerie->faireUnPain();
} catch (PlusDeCerealException $exception) {
    http_response_code(401);
    echo 'message spécifique à cette exception';
} catch (Throwable $exception) {
    http_response_code(500);
    echo 'une erreur s\'est produite, merci de renouveler...';
}

/**
 * Exemple de gestion d'exception au sein d'un blog
 *
 * Pile d'appel:
 *   - Blog::execute
 *   - ChargeurArticle::chargerParId($id)
 *          --> lève une exception "ArticleAbsentException" si article absent en base
 *          --> Blog::execute gère une page 404 si ArticleAbsentException
 */
