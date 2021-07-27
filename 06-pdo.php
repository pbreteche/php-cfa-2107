<?php

//$pdo = new PDO('mysql:host=localhost;port=3306;dbname=demo', 'pierre', 'secret');
$pdo = new PDO('sqlite:mydb.sq3');

// Execute une requête SQL
//$statement = $pdo->query('INSERT INTO article (title, body) VALUES (\'premier article\', \'du contenu\')');

$statement = $pdo->prepare(
    'SELECT id, title, body, publishedAt '.
    ' FROM article WHERE publishedAt <= :date'
);

$statement->bindValue(':date', (new DateTime())->format('Y-m-d'));
$statement->execute();

echo 'nombre de lignes : '.$statement->rowCount()."\n";
//print_r($statement->errorInfo());

while ($row = $statement->fetch()) { // par défaut FETCH_BOTH
    echo $row[0].' : '.$row['title']."\n";
}

$statement->execute();
$statement->setFetchMode(PDO::FETCH_OBJ);
foreach ($statement as $row) {
    echo $row->id.' : '.$row->title."\n";
}

class Article
{
    private int $id;
    private string $title;
    private string $body;
    // PDO ne fabrique pas des objets DateTime par défaut
    private string $publishedAt;

    public function getTitle(): string
    {
        return $this->title;
    }
}

$statement->execute();
$statement->setFetchMode(PDO::FETCH_CLASS, Article::class);
foreach ($statement as $row) {
    echo $row->getTitle()."\n";
}

// Les transactions permettent d'avoir toutes les requêtes
// d'écriture
$pdo->beginTransaction();
$statement = $pdo->prepare(
    'UPDATE article SET publishedAt = DATE(publishedAt, \'+1 day\')'
    //'UPDATE article SET id = 1'
);

$statement->execute();

if ('00000' !== $statement->errorCode()) {
    $pdo->rollBack();
    echo 'la requête SQL a été annulée'."\n";
} else {
    $pdo->commit();
}

// Injection
$keyword = 'toto\'; DROP TABLE article; --';
$pdo->query('SELECT * FROM article WHERE title LIKE \'%'.$keyword.'%\'');

$article = null;
if ($article instanceOf Article && 0 > $article->getId()) {

}

try {
    $article->getId();
} catch (Throwable $error) {

}

/**
 * GET /article/34
 *
 * accept: text/html
 * accept-language: fr; en_US
 *
 */
