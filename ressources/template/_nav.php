<?php 
if(session_status() !== PHP_SESSION_ACTIVE)
{
    session_start();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skilleat - <?php echo $tab_title??"" ?></title>
    <link rel="stylesheet" href="/ressources/sass/app.css">
    <!-- Ajouter les scripts js defer -->
</head>
<body>

<nav class="nav">
    <a href="/index.php" class="nav__logo">
    <img class="nav__img" src="/ressources/assets/icone/logo-SkillEat.png" alt="logo">
    Skilleat
    </a>
    <ul class="nav__list">
        <li class="nav__item">
            <a class="nav__link" href="/pages/cours.php">Cours</a>
        </li>
        <li class="nav__item">
            <a class="nav__link" href="/pages/chef.php">Chef</a>
        </li>
        <li class="nav__item">
            <a class="nav__link" href="/pages/connexion.php">Connexion</a>
        </li>
        <li class="nav__item">
            <a class="nav__link" href="/pages/inscription.php">Inscription</a>
        </li>
    </ul>
</nav>

