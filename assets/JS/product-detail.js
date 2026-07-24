function changeImage(element, imgSrc) {
  let mainImage = document.getElementById("mainImage");
  mainImage.src = imgSrc;

  // Active class toggle
  let thumbnails = document.querySelectorAll(".thumbnail");
  thumbnails.forEach(thumb => thumb.classList.remove("active"));
  element.classList.add("active");
}

function scrollThumbnails(amount) {
  document.getElementById("thumbnailContainer").scrollBy({
    top: amount,
    behavior: "smooth"
  });
}

function openLightbox() {
  let mainImage = document.getElementById("mainImage");
  let lightbox = document.getElementById("lightbox");
  let lightboxImage = document.getElementById("lightboxImage");

  lightbox.style.display = "flex";
  lightboxImage.src = mainImage.src;
}

function closeLightbox() {
  document.getElementById("lightbox").style.display = "none";
}
