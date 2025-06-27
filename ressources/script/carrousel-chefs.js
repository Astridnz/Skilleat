fetch("http://localhost:8088/API/carrousel.php").then((response)=>{
  
  if(response.ok)
  {
    response.json().then((data)=>{
      console.log(data);
      const carouselInner = document.querySelector(".skilleat-carousel__inner");
      carouselInner.innerHTML = "";

      data.chef.forEach((chef) => {
        carouselInner.appendChild(createCarouselItem(chef));
      });

    })
  }
});




function createCarouselItem(chef) {
  const article = document.createElement("article");
  article.className = "skilleat-carousel__item";
  article.innerHTML = `
    <img src="./ressources/assets/chef/${chef.photo_user}" alt="${chef.specialites}">
    <div class="skilleat-carousel__infos">
      <div class="skilleat-carousel__title">
        <h4>${chef.prenom_user} ${chef.nom_user}</h4>
        <h5>${chef.specialites}</h5>
      </div>
      <button type="button" class="skilleat-carousel__button">Réservez</button>
    </div>
  `;
  return article;
}

const carouselInner = document.querySelector(".skilleat-carousel__inner");


// Ajoute le derner item "Tout voir"
const toutVoir = {
  img: "./ressources/assets/recette/pates-fraiches.jpg",
  prenom: "Tout",
  nom: "Voir",
  specialite: "",
};
const toutVoirItem = createCarouselItem(toutVoir);
toutVoirItem.querySelector(".skilleat-carousel__button").textContent =
  "Tout voir";
carouselInner.appendChild(toutVoirItem);
