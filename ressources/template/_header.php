<!-- <header class="header">
    <div class="header__content">
        <h1 class="header__title"><?php echo $header_title??""; ?></h1>
        <p class="header__subtitle"><?php echo $header_subtitle??""; ?></p>
        <a href="../pages/cours.php" class="header__button"><?php echo $header_button??""; ?></a>
    </div>
    <div class="header__image">
        <img src="<;?php echo $header_img ?? ''; ?>" alt="Chef Header" class="header__img"> 
    </div>
</header> -->

<header class="header">
    <div class="header__grid">
        <div class="header__text">
        <h1 class="header__title"><?php echo $header_title??""; ?></h1>
        <a href="#cours" class="header__cta"><?php echo $header_button??""; ?><span class="arrow">&rarr;</span>
        </a>
        </div>
        <img src="/ressources/assets/ambiance/header-1.jpg" alt="recette en cours" class="header__img">

        <div class="header__gallery">
        <img src="/ressources/assets/chef/virginie_martinetti_italie.jpg" alt="Chef" class="header__gallery-img">
        <img src="/ressources/assets/chef/latifa_ichou_vege.jpg" alt="Chef" class="header__gallery-img">
        <img src="/ressources/assets/chef/xavier_pincemin_moyenOrient.jpg" alt="Chef" class="header__gallery-img">
        <img src="/ressources/assets/chef/yoake_san_sushiMaki.jpg" alt="Chef" class="header__gallery-img">
        <img src="/ressources/assets/chef/etienne_geney_antiGaspi.jpg" alt="Chef" class="header__gallery-img">
        <img src="/ressources/assets/chef/christophe_pirotais_streetFoodAsia.jpg" alt="Chef" class="header__gallery-img">
        </div>

        <div class="header__text-bottom">
        <blockquote class="header__quote">
            <?php echo $header_subtitle??""; ?>
        </blockquote>
        </div>
    </div>
</header>
