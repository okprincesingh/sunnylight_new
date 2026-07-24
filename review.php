<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Custom Review Swiper</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
body {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
font-family: 'Times New Roman', serif;
}

.review-container {
  padding: 40px 0;
 background-image: url('Img/background-img/banner.jpg');
 background-size: cover;     /* optional, makes image cover the area */
  background-position: center; /* optional, centers the image */
  background-repeat: no-repeat; /* optional, prevents tiling */
}

.review-heading {
  text-align: center;
  margin-bottom: 20px;
}

.review-heading h1 {
  color: red;
}

.review-heading p {
  font-size:17px;
  padding-top:10px;
  color: #555;
}

.reviewSwiper {
  width: 100%;
  padding-top: 50px;
  padding-bottom: 70px;
  position: relative;
}

.reviewSwiper .swiper-slide {
  text-align: center;
  transition: transform 0.8s ease;
}

.review-card {
  border-radius: 10px;
  padding: 20px;
  background: white;
  color: black;
  min-height: 250px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
  transition: transform 0.8s ease, box-shadow 0.8s ease;
}

.review-text {
  font-size: 14px;
  margin-bottom: 15px;
}

.review-user {
  display: flex;
  align-items: center;
  gap: 10px;
}

.review-user img {
  width: 40px;
  height: 40px;
  border-radius: 50%;
}

.user-info strong {
  display: block;
  font-size: 14px;
}

.user-info span {
  font-size: 12px;
  color: gray;
}

/* Active slide zoom */
.reviewSwiper .swiper-slide-active .review-card {
  transform: scale(1.1);
  transition: transform 0.8s ease;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
}

/* Custom pagination */
.review-pagination {
  position: absolute;
  bottom: 20px;
  left: 0;
  width: 100%;
  text-align: center;
  z-index: 10;
}

/* Pagination */ 
.swiper-pagination 
{ 
  position: absolute; 
  bottom: 20px; left: 0; 
  width: 100%; text-align: 
  center; z-index: 10; 
}
 /* Arrows */ 
 .swiper-button-next, .swiper-button-prev 
 {
   color: white; 
   background: rgba(0, 0, 0, 0.4); 
   padding: 20 px; 
   border-radius: 50%; 
   width: 40px; 
   height: 40px; 
   cursor: pointer; 
  } 
  .swiper-button-next::after, 
  .swiper-button-prev::after 
  { 
    font-size: 20px; 
    font-weight: bold; 
  } 

.desktop-view-banner{
  display: block;
}

.mobile-view-banner{
  display: none;
}
   
  /* Mobile view: show arrows */ 
@media (max-width: 767px) 
{ 
  .review-card {
  width: 85%;
  }

 .reviewSwiper .swiper-slide-active .review-card {
  margin-left:28px;
  border:1px solid black;
    box-shadow: 0 0 30px 10px rgba(0, 0, 0, 0.3);
  }

  .desktop-view-banner{
  display: none;
}

.mobile-view-banner{
  display: block;
}
  
}


</style>
</head>
<body>

  <!-- Google Review banner part -->
  <section class="my-section mr-b">
    <div class="google-container">
      <div class="google-banner">
        <img src="assets/img/banners/reivew-banner.jpg" alt="google-banner" class="desktop-view-banner">
        <img src="assets/img/banners/mobile-view-review-banner.jpg" alt="google-banner" class="mobile-view-banner">
        
      </div>
    </div>
  </section>

  <section class="myreview-Section">
<div class="review-container">
  <div class="review-heading ">
    <h1>What Our Customers Say</h1>
    <p>Real reviews from people who love our products</p>
  </div>

  <div class="swiper reviewSwiper">
  <div class="swiper-wrapper">

    <div class="swiper-slide">
      <div class="review-card">
        <div class="review-text">
          "I recently installed their magnetic track lights in my living room and the effect is just amazing. 
          The sleek design perfectly matches my modern interiors and the flexibility to adjust the lights is a big plus. 
          The brightness is soothing to the eyes and creates a cozy ambiance. 
          Definitely a product worth the investment!"
        </div>
        <div class="review-user">
          <img src="https://randomuser.me/api/portraits/men/28.jpg" alt="user">
          <div class="user-info">
            <strong>Amit Patel</strong>
            <span>Ahmedabad, India</span>
          </div>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="review-card">
        <div class="review-text">
          "We purchased LED garden lights for our backyard and the transformation has been incredible. 
          Every evening our garden lights up beautifully, creating a warm and inviting vibe for our family dinners. 
          The installation was simple, and the quality of light is bright yet soft. 
          Our neighbors even complimented us on how amazing it looks now!"
        </div>
        <div class="review-user">
          <img src="https://randomuser.me/api/portraits/women/12.jpg" alt="user">
          <div class="user-info">
            <strong>Sneha Kapoor</strong>
            <span>Bangalore, India</span>
          </div>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="review-card">
        <div class="review-text">
          "These LED lights have been a great addition to my office setup. 
          They provide the perfect balance of brightness and energy efficiency, 
          helping me save on my electricity bills. 
          The quality feels premium and the lighting creates a very professional environment. 
          I’m very happy with the purchase!"
        </div>
        <div class="review-user">
          <img src="https://randomuser.me/api/portraits/men/54.jpg" alt="user">
          <div class="user-info">
            <strong>Rohit Mehra</strong>
            <span>Chandigarh, India</span>
          </div>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="review-card">
        <div class="review-text">
          "I ordered indoor magnetic lights for my boutique and they have completely uplifted the look of my store. 
          Customers love how the products are highlighted with focused beams. 
          The installation team guided me well and the lights are easy to adjust anytime. 
          It has truly enhanced the shopping experience for my clients."
        </div>
        <div class="review-user">
          <img src="https://randomuser.me/api/portraits/women/33.jpg" alt="user">
          <div class="user-info">
            <strong>Priya Singh</strong>
            <span>Delhi, India</span>
          </div>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="review-card">
        <div class="review-text">
          "For my outdoor patio, I purchased a set of LED lights and the difference is unbelievable. 
          The area looks bright, stylish, and welcoming for evening gatherings. 
          The lights are durable and weatherproof, which is perfect for outdoor use. 
          I’m impressed with both the quality and the customer service provided!"
        </div>
        <div class="review-user">
          <img src="https://randomuser.me/api/portraits/men/61.jpg" alt="user">
          <div class="user-info">
            <strong>Vikram Joshi</strong>
            <span>Mumbai, India</span>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Pagination -->
  <div class="swiper-pagination"></div>
  <!-- Navigation Arrows -->
  <div class="reviewArrwos">
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</div>

</div>
</section>


<!-- scripts -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
var reviewSwiper = new Swiper(".reviewSwiper", {
  slidesPerView: 3,
  spaceBetween: 20,
  centeredSlides: true,
  loop: true,
  //grabCursor: true,
  // autoplay:true,
  // speed:3000,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: { slidesPerView: 1, 
      centeredSlides: false,
      spaceBetween: 10 },
    768: 
    { 
      slidesPerView: 3, 
      spaceBetween: 12 },
    992: { slidesPerView: 3, spaceBetween: 20 }
  }
});

// Pagination click center
reviewSwiper.on('paginationClick', function(swiper, e) {
  const clickedIndex = swiper.clickedIndex;
  if (clickedIndex !== undefined) {
    swiper.slideToLoop(clickedIndex);
  }
  
});
</script>
</body>
</html>
