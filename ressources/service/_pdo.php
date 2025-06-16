<?php 

/**
 * Retourne une instance de connexion PDO pour se connecter à la BDD "blog"
 *
 * @return \PDO
 */
function connexionPDO(): \PDO{
    // Pour plus de détails, voir le cours "00-database.php"
    try
    {
        // todo : adapter les chemins
        //Je récupère ma configuration:
        $config = require __DIR__."/../config/_blogConfig.php";
        //Je construis mon DSN:
        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";
        //Je créé mon instance de PDO
        $pdo = new \PDO($dsn, $config["user"], $config["password"], $config["options"]);
        //Je retourne mon instance:
        return $pdo;
    }
    catch(\PDOException $e)
    {
        throw new \PDOException($e->getMessages(), (int)$e->getCode());
    }
}
?>