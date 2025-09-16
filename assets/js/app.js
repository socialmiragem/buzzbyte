const scrollImg = document.getElementById("scroll_img");

window.addEventListener("scroll", () => {
  // Get scroll position
  const scrollY = window.scrollY;

  // Rotate based on scroll position
  scrollImg.style.transform = `rotate(${scrollY}deg)`;
});
// alert()