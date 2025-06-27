<?php 
header("Access-Control-Allow-Origin: *");
require "../config/database.php";

$sql_chef = $pdo->query("SELECT * FROM Chef INNER JOIN User ON Chef.id_user = User.id_user");
$chef = $sql_chef->fetchAll();

// echo json_encode($chef);

$sql_cours =$pdo->query("SELECT * FROM Cours INNER JOIN Chef ON Chef.id_chef = Cours.id_chef INNER JOIN User ON Chef.id_user = User.id_user; ");
$cours = $sql_cours->fetchAll();

$resultat = [
    "chef"=>$chef,
    "cours"=>$cours
];
echo json_encode($resultat);

?>