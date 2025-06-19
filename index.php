<?php 
$tab_title = "Welcome";
$header_title = "Cuisiner ensemble,<br>même à distance.";
$header_subtitle = '"Vivez une expérience interactive avec un chef, en direct, dans votre cuisine."';
$header_button = "Explorez les cours";
$header_img="/ressources/assets/ambiance/cooking-2.jpg";
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