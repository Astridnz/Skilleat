//todo : remplacer par la BDD des chefs
const skilleatChefs = [
  {
    img: "./ressources/assets/chef/id10_wilfried_graux_mixologie.jpg",
    prenom: "Wilfried",
    nom: "Graux",
    specialite: "Mixologie & Apéritif",
  },
  {
    img: "./ressources/assets/chef/id1_benjamin_darnaud_cuisine_francaise.jpg",
    prenom: "Benjamin",
    nom: "Darnaud",
    specialite: "Cuisine française revisitée",
  },
  {
    img: "./ressources/assets/chef/id6_christophe_pirotais_streetFoodAsia.jpg",
    prenom: "Christophe",
    nom: "Pirotais",
    specialite: "Street Food Asiatique",
  },
  {
    img: "./ressources/assets/chef/id2_etienne_geney_antiGaspi.jpg",
    prenom: "Etienne",
    nom: "Geney",
    specialite: "Anti-gaspillage",
  },
  {
    img: "./ressources/assets/chef/id3_virginie_martinetti_italie.jpg",
    prenom: "Virginie",
    nom: "Martinetti",
    specialite: "Cuisine italienne",
  },
  {
    img: "./ressources/assets/chef/id4_flora_lamoure_patisserie.jpg",
    prenom: "Flora",
    nom: "Lamoure",
    specialite: "Pâtisserie",
  },
  {
    img: "./ressources/assets/chef/id5_latifa_ichou_vege.jpg",
    prenom: "Latifa",
    nom: "Ichou",
    specialite: "Cuisine végétale",
  },
  {
    img: "./ressources/assets/chef/id7_yoake_san_sushiMaki.jpg",
    prenom: "Yoake",
    nom: "San",
    specialite: "Sushi & Maki",
  },
  {
    img: "./ressources/assets/chef/id8_marjorie_maltais_brunch.jpg",
    prenom: "Marjorie",
    nom: "Maltais",
    specialite: "Brunch",
  },
  {
    img: "./ressources/assets/chef/id9-xavier_picemin_moyenOrient.jpg",
    prenom: "Xavier",
    nom: "Picemin",
    specialite: "Cuisine du Moyen-Orient",
  },
];

function createCarouselItem(chef) {
  const article = document.createElement("article");
  article.className = "skilleat-carousel__item";
  article.innerHTML = `
    <img src="${chef.img}" alt="${chef.specialite}">
    <div class="skilleat-carousel__infos">
      <div class="skilleat-carousel__title">
        <h4>${chef.prenom} ${chef.nom}</h4>
        <h5>${chef.specialite}</h5>
      </div>
      <button type="button" class="skilleat-carousel__button">Réservez</button>
    </div>
  `;
  return article;
}

const carouselInner = document.querySelector(".skilleat-carousel__inner");
carouselInner.innerHTML = "";

skilleatChefs.forEach((chef) => {
  carouselInner.appendChild(createCarouselItem(chef));
});

// Ajoute le derner item "Tout voir"
const toutVoir = {
  img: "./ressources/assets/recette/ed6e140f0aea7d583dac839d49b46e61.jpg",
  prenom: "Tout",
  nom: "Voir",
  specialite: "",
};
const toutVoirItem = createCarouselItem(toutVoir);
toutVoirItem.querySelector(".skilleat-carousel__button").textContent =
  "Tout voir";
carouselInner.appendChild(toutVoirItem);
