<?php 
/* 
    En PHP, il existe plusieurs outils pour se connecter à une BDD.
    On trouvera par exemple "mysqli" ou "pdo"
    Ici nous verrons "pdo" (PHP Data Object)
    
    Pour se connecter, PDO demande un DSN (Data Source Name)
    C'est un string contenant toute les informations pour localiser la BDD.
    {pilote}:host={adresse};port={port de connexion};dbname={nom de la bdd};charset={charset à utiliser}
*/
$dsn = "mysql:host=bdd;port=3306;dbname=skilleat-BDD;charset=utf8mb4";
/* 
    Lorsque l'on crée une nouvelle instance de PDO, il prendra les paramètres suivant :
        1. le DSN
        2. le nom d'utilisateur pour se connecter à la BDD
        3. le mot de passe pour la BDD
        4. un tableau contenant la configuration de PDO
*/
$pdo = new PDO($dsn, "root", "root", [
    // Type d'erreur que dois afficher PDO :
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    // Comment les données récupéré en BDD doivent être affiché
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    // Indique à PDO de ne pas émuler les requêtes préparés (voir plus bas)
    // PDO::ATTR_EMULATE_PREPARES => false
]);
?>
