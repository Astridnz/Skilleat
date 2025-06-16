<?php 
$tab_title = "Welcome";
$header_title = "Apprenez la cuisine avec de vrais chefs";
$header_subtitle = "En direct depuis votre cuisine";
$header_button = "Explorez les cours";
$header_img="/ressources/assets/header1.jpg";
require "./ressources/template/_nav.php";
require "./ressources/template/_header.php";
require "./ressources/template/_howItWorks.php";
?>





<section class="vedette">
    <h2>Chefs en vedette</h2>
    <div class="cartes">
        <div class="chef carte"></div>
        <div class="chef carte"></div>
        <div class="chef carte"></div>
    </div>
</section>

<section class="vedette">
    <h2>Recettes populaires</h2>
    <div class="cartes">
        <div class="recette carte"></div>
        <div class="recette carte"></div>
        <div class="recette carte"></div>
    </div>
</section>

<?php
require "./ressources/template/_footer.php";
?>