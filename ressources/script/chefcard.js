const prev = document.querySelector(".skilleat-carousel__arrow--prev");
const next = document.querySelector(".skilleat-carousel__arrow--next");

let carouselVp = document.querySelector(".skilleat-carousel__viewport");

let skilleatCarouselInner = document.querySelector(".skilleat-carousel__inner");
let carouselInnerWidth = skilleatCarouselInner.getBoundingClientRect().width;

let leftValue = 0;

// Variable used to set the carousel movement value (card's width + gap)
const totalMovementSize =
  parseFloat(
    document.querySelector(".skilleat-carousel__item").getBoundingClientRect()
      .width,
    10
  ) +
  parseFloat(
    window.getComputedStyle(skilleatCarouselInner).getPropertyValue("gap"),
    10
  );

prev.addEventListener("click", () => {
  if (leftValue !== 0) {
    leftValue += totalMovementSize;
    skilleatCarouselInner.style.left = leftValue + "px";
  }
});

next.addEventListener("click", () => {
  const carouselVpWidth = carouselVp.getBoundingClientRect().width;
  if (carouselInnerWidth - Math.abs(leftValue) > carouselVpWidth) {
    leftValue -= totalMovementSize;
    skilleatCarouselInner.style.left = leftValue + "px";
  }
});

const mediaQuery510 = window.matchMedia("(max-width: 510px)");
const mediaQuery770 = window.matchMedia("(max-width: 770px)");

mediaQuery510.addEventListener("change", mediaManagement);
mediaQuery770.addEventListener("change", mediaManagement);

let oldViewportWidth = window.innerWidth;

function mediaManagement() {
  const newViewportWidth = window.innerWidth;

  if (leftValue <= -totalMovementSize && oldViewportWidth < newViewportWidth) {
    leftValue += totalMovementSize;
    skilleatCarouselInner.style.left = leftValue + "px";
    oldViewportWidth = newViewportWidth;
  } else if (
    leftValue <= -totalMovementSize &&
    oldViewportWidth > newViewportWidth
  ) {
    leftValue -= totalMovementSize;
    skilleatCarouselInner.style.left = leftValue + "px";
    oldViewportWidth = newViewportWidth;
  }
}
