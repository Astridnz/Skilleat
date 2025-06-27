fetch("http://localhost:8088/API/carrousel.php").then((response)=>{
  
  if(response.ok)
  {
    response.json().then((data)=>{
      console.log(data);
      const carouselInner = document.querySelector(".skilleat-carousel__inner");
      carouselInner.innerHTML = "";

      data.cours.forEach((cours) => {
        carouselInner.appendChild(createCarouselItem(cours));
      });

    })
  }
});


function createCarouselItem(cours) {
  const article = document.createElement("article");
  article.className = "skilleat-carousel__item";
  article.innerHTML = `
    <img src="./ressources/assets/recette/${cours.photo_cours}" alt="${cours.titre_cours}">
    <div class="skilleat-carousel__infos">
      <div class="skilleat-carousel__title">
        <h4>${cours.titre_cours}</h4>
        <h5>  Chef ${cours.prenom_user} ${cours.nom_user}</h5>
      </div>
      <button type="button" class="skilleat-carousel__button">Réservez</button>
    </div>
  `;
  return article;
}

const carouselInner = document.querySelector(".skilleat-carousel__inner");

// Ajoute le derner item "Tout voir"
// const toutVoir = {
//   img: "./ressources/assets/recette/ed6e140f0aea7d583dac839d49b46e61.jpg",
//   prenom: "Tout",
//   nom: "Voir",
//   specialite: "",
// };
// const toutVoirItem = createCarouselItem(toutVoir);
// toutVoirItem.querySelector(".skilleat-carousel__button").textContent =
//   "Tout voir";
// carouselInner.appendChild(toutVoirItem);
