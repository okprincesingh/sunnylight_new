<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Sunny Light | Innovative LED Lighting Solutions in India</title>
<meta name="description" content="Discover premium LED lighting solutions for indoor and outdoor spaces. Energy-efficient, elegant, and high-performance lighting by Sunny Light.">
<meta name="keywords" content="LED lighting, LED lights India, indoor lighting, outdoor lighting, smart lighting, LED profiles, energy efficient lights, modern lighting, Sunny Light">

  <link rel="stylesheet" href="assets/CSS/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <!-- Include Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <!-- Bootstrap JS (dropdowns, modals, etc. ke liye) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="shortcut icon" href="assets\img\logoH__1_-removebg-preview.png" type="image/x-icon">


    



</head>

<body>
  <!-- Header Section -->
  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sunny Light</title>
  <link rel="stylesheet" href="assets/CSS/main.css">
  <link rel="stylesheet" href="assets/CSS/mobile-product.css">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <!-- Include Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <!-- Bootstrap JS (dropdowns, modals, etc. ke liye) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



     <style>
      /* Search bar container ko higher z-index dena hoga */


/* ---------- Search suggestions (fixed positioning) ---------- */
.search-suggestions {
  position: absolute;
  top: 57px; /* below the search bar */
  margin: 0;
  padding: 0;
  list-style: none;
  background: #fff;
  border: 1px solid #ddd;
  border-top: none;
  border-radius: 0 0 4px 4px;
  max-height: 220px;
  overflow-y: auto;
  display: none;
  box-shadow: 0 6px 12px rgba(0,0,0,0.1);
  z-index: 10000 !important; /* 🔥 increased so it’s above the header */
}
/* Ensure second nav doesn't overlap */


.search-suggestions li {
  padding: 10px 12px;
  cursor: pointer;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  border-bottom: 1px solid #f5f5f5;
  font-size: 14px;
}

.search-suggestions li:last-child {
  border-bottom: none;
}

.search-suggestions li:hover,
.search-suggestions li.highlighted {
  background: #007bff;
  color: white;
}

.suggestion-heading {
  font-weight: bold;
  color: #666;
  background: #f8f9fa !important;
  cursor: default !important;
  border-bottom: 1px solid #ddd;
}

.suggestion-heading:hover {
  background: #f8f9fa !important;
  color: #666 !important;
}

/* Remove bottom border radius from input when suggestions are visible */
.Search-bar input:focus {
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}

/* Ensure search input has proper styling */
.Search-bar input {
  width: 100%;
  padding: 10px 15px;
  border: 1px solid #ddd;
  border-radius: 4px;
  outline: none;
  font-size: 14px;
}

.Search-bar input:focus {
  border-color: #007bff;
  box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.25);
}

.search-icon {
  background: none;
  border: none;
  padding: 10px;
  cursor: pointer;
  color: #666;
  margin-left: -40px; /* Position inside input */
  z-index: 1;
}

.search-icon:hover {
  color: #007bff;
}

/* Mobile responsive */
@media (max-width: 768px) {
  .Search-bar {
    width: 100%;
    margin: 0 10px;
  }

  .search-suggestions {
    position: fixed;
    top: auto;
    left: 10px;
    right: 10px;
    max-height: 50vh;
  }
}
</style>
    


</head>

<body>

  <section class="Head-section">
    <!-- Mobile Screen start-->
    <div class="d-flex justify-content-between align-items-center hearder-mobile d-md-none px-4 py-8">

      <!-- Left: Logo -->
      <div class="mobile-logo">
        <a href="index.php"> <img src="assets\img\logoH__1_-removebg-preview.png" alt="Logo" height="45"> </a>
      </div>

      <!-- Right: Search + Menu Icons -->
       <!-- Search Bar (Initially Hidden) -->
        <div class="mobile-search-bar" id="mobileSearchBar">
            <div class="mobile-search-container">
                <input type="text" id="mobileSearchInput" placeholder="Search..." autocomplete="off">
                <button class="mobile-search-close" id="mobileSearchClose">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <ul class="mobile-search-suggestions" id="mobileSearchSuggestions"></ul>
        </div>

      <div class="d-flex align-items-center gap-3">
        <div class="mobile-search-icon" id="mobileSearchToggle">
          <i class="bi bi-search"></i>
        </div>
        <div class="mobile-menu-icon">
          <i class="bi bi-list" id="menu-toggle"></i>
        </div>
      </div>

    </div>
    <!-- Side Panel (Initially Hidden) -->
    <div id="side-panel">
      <div class="side-panel-header">
        <span>Menu</span>
        <i class="bi bi-x" id="close-panel"></i>
      </div>
      <ul class="side-panel-menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <!-- Single Product Category -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle">Indoor Lights <i class="bi bi-chevron-down"></i></a>
          <ul class="submenu" id="sidepanel-indoor-products">

          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle">Outdoor Lights <i class="bi bi-chevron-down"></i></a>
          <ul class="submenu" id="sidepanel-outdoor-products">

          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle">Profile Lights <i class="bi bi-chevron-down"></i></a>
          <ul class="submenu" id="sidepanel-profile-products">

          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle">Flexi Lights <i class="bi bi-chevron-down"></i></a>
          <ul class="submenu" id="sidepanel-flexi-products">

          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle">Smps <i class="bi bi-chevron-down"></i></a>
          <ul class="submenu" id="sidepanel-smps-products">

          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle">Led Drivers <i class="bi bi-chevron-down"></i></a>
          <ul class="submenu" id="sidepanel-led-drivers-products">

          </ul>
        </li>
        <li><a href="career.php">Career</a></li>
        <li><a href="blog.php">Blogs</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contact.php">Contact Us</a></li>

      </ul>

    </div>

    <!-- Overlay -->
    <div id="overlay">

    </div>
    </div>




    <!-- Mobile screen end -->


    <!-- Desktop screen -->

    <header class="nav-section">
      <div class="nav-container mynavbar">
        <nav class="navbar">
          <div class="container-fluid logo">

            <!-- Logo -->
            <a class="hearder-logo" href="index.php">
              <img src="assets\img\logoH__1_-removebg-preview.png" alt="Logo" class="d-inline-block align-text-top">
            </a>

          
            <!-- Search Bar -->
            <form class="Search-bar d-flex" role="search" autocomplete="off"> 
              
              <input type="text" id="searchInput" placeholder="Search..."
                aria-label="Search" /> 
                <button class="search-icon" type="submit"> <i
                  class="fa-solid fa-magnifying-glass"></i> </button> 

                   <!-- suggestions container -->
                <ul id="searchSuggestions" class="search-suggestions" aria-hidden="true"></ul>
                  
                </form>


           



            <!-- Navigation Links -->
            <!-- <div class="top-hearder"> -->
            <ul class="nav hearder-list">
              <li class="nav-item"><a href="index.php " class="nav-link">HOME</a></li>
              <li class="nav-item"><a href="about.php" class="nav-link">ABOUT</a></li>
              <li class="nav-item"><a href="career.php" class="nav-link">CAREER</a></li>
              <li class="nav-item"><a href="blog.php" class="nav-link">BLOGS</a></li>
              <li class="nav-item"><a href="gallery.php" class="nav-link">GALLERY</a></li>
              <li class="nav-item"><a href="contact.php" class="nav-link">CONTACT US</a></li>
            </ul>
            <!-- </div> -->

            <!-- Quote Button -->
            <div class="quote-button">
              <button type="button" data-bs-toggle="modal" data-bs-target="#quoteModal">GET A QUOTE</button>
            </div>

          </div>
        </nav>
      </div>
    </header>
  </section>

  <section class="second-nav">
    <nav class="navbar-part container-fluid">
      <div class="box-size">
        <ul class="nav-list">
          <li class="dropdown"><a href="#">INDOOR LIGHTS <span><i class="fa-solid fa-chevron-down"></i></span></a>
            <ul class="dropdown-menu" id="desktop-indoor-products">

              <li><a href="indoor-lights-products.php#Anti-Glare-Smart-Tunable-Deep-Recessed-COB-Spotlight">Anti Glare
                  Smart Tunable Deep Recessed COB Spotlights</a></li>
              <li><a href="indoor-lights-products.php#Anti-Glare-Smart-COB-Spotlight-Tunable-Dimmable">Anti Glare Smart
                  COB Spotlight Tunable & Dimmable</a></li>
              <li><a href="indoor-lights-products.php#Premium-Deep-Recessed-Anti-Glare-COB-Spotlights">Premium Deep
                  Recessed Anti Glare COB Spotlights</a></li>
              <li><a
                  href="indoor-lights-products.php#Premium-Deep-Recessed-Ceiling-Secure-Trimless-Antiglare-Downlights">Premium
                  Deep Recessed Ceiling Secure Trimless Antiglare Downlights</a></li>
              <li><a href="indoor-lights-products.php#Deep-Recessed-Antiglare-LED-Wallwasher">Deep Recessed Antiglare
                  LED Wallwasher</a></li>
              <li><a href="#Premium-Deep-Recesses-Cob-Spot-Lights">Deep Recessed Cob Led Spotlights</a></li>
              <li><a href="#Deep-Recessed-Anti-Glare-Cob-Led-Spotlights">Deep Recessed Anti Glare Cob Led Spotlights</a>
              </li>
              <li><a href="indoor-lights-products.php#Laser-Blade-Linear-Spot-Lights">Laser Blade Linear Spot Lights</a>
              </li>
              <li><a href="indoor-lights-products.php#Tiltable-LED-COB-Spotlight">Economic Recessed Tiltable LED COB
                  Spotlights</a></li>
              <li><a href="indoor-lights-products.php#COB-360-Adjustable-Recessed-Ceiling-Downlight">COB 360 Adjustable
                  Recessed Ceiling Downlights</a></li>
              <li><a href="indoor-lights-products.php#Deep-Recessed-Adjustable-Led-Wall-Washer">Deep Recessed Adjustable
                  Led Wall Washer</a></li>
              <li><a href="indoor-lights-products.php#Adjustable-High-Neck-LED-Spot-Light">Adjustable High Neck LED Spot
                  Lights</a></li>
              <li><a href="indoor-lights-products.php#Mini-Series-Niche-Spot-Lights">Mini Series Niche Spot Lights</a>
              </li>
              <li><a href="indoor-lights-products.php#Zoom-15-To-60-Degree">Zoom 15 To 60 Degree Adjustable Spot
                  Light</a></li>
              <li><a href="indoor-lights-products.php#Laser-Blade-Tiltable-Trimless-Linear-Lights">Laser Blade
                  Tiltable/Trimless Linear Lights</a></li>
              <li><a href="indoor-lights-products.php#Premium-High-Power-Laser-Blade-Lights">Laser Blade High Power COB
                  Spot Lights</a></li>
              <li><a href="indoor-lights-products.php#Economic-Laser-Blade-Linear-Spot-Lights">Laser Blade Linear Spot
                  Lights</a></li>
              <li><a href="indoor-lights-products.php#Surface-Track-Recessed-Led-Spot-Lights">Surface/Track/Recessed Led
                  Spot Lights</a></li>
              <li><a href="indoor-lights-products.php#Surface-Pendant-Cylindrical-Lights">Surface/Pendant Cylindrical
                  Lights</a></li>
              <li><a href="indoor-lights-products.php#IP54-Rating-Surface-Cylinder-Lights">Outdoor Surface Cylinder
                  Lights - IP54 Rating</a></li>
              <li><a href="indoor-lights-products.php#Attachable-Linear-Led-Profile-Lights">Attachable Linear Led
                  Profile Lights</a></li>
              <!-- <li><a href="indoor-lights-products.php#Customized-Gym-Office-Lighting">Customized Gym & Office Lighting</a></li> -->
              <li><a href="indoor-lights-products.php#Office-Gym-Lighting-Powered-By-Osram">Office/Gym Lighting Powered
                  By Osram</a></li>
              <li><a href="indoor-lights-products.php#Commercial-Lighting-For-Multiple-Uses">Commercial Lighting For
                  Multiple Uses</a></li>
              <li><a href="indoor-lights-products.php#Indoor-Step-Lights">Indoor Step Lights</a></li>
              <li><a href="indoor-lights-products.php#Display-Counter-Lights">Display Counter Lights</a></li>
              <!-- <li><a href="indoor-lights-products.php#Indoor-Outdoor-Logo-Projector-Light">Indoor & Outdoor Logo Projector Lights</a></li> -->
              <li><a href="indoor-lights-products.php#Led-Profile-Flexible-Neon-Profile">Led Profile/Flexible Neon
                  Profile</a></li>
              <li><a href="indoor-lights-products.php#Mr-16-Gu-10-Fixture">MR 16/Gu 10 Fixtures</a></li>

              <li><a href="indoor-lights-products.php#Sl-Led-Panel-Edge-Lit-Smart-Series">Sl Led Panel Edge Lit - Smart
                  Series</a></li>
              <li><a href="indoor-lights-products.php#Sl-Led-Panel-Back-Lit-Smart-Series">Sl Led Panel Back Lit - Smart
                  Series</a></li>
              <li><a href="indoor-lights-products.php#SL-LED-Panels-Full-Series">SL LED Panels Full Series</a></li>
              <li><a href="indoor-lights-products.php#Sl-Led-Panel-Backlit">Sl Led Panel Backlit</a></li>
              <li><a href="indoor-lights-products.php#SL-LED-Slim-Panel-Trimmy-Series">SL LED Slim Panel - Trimmy
                  Series</a></li>
              <li><a href="indoor-lights-products.php#SL-LED-Remote-Panel-Edge-Lit">SL LED Remote Panel Edge Lit</a>
              </li>
              <li><a href="indoor-lights-products.php#SL-LED-Panel-With-Built-In-Driver-Prime-Series">SL LED Panel With
                  Built-In Driver - Prime Series</a></li>
              <li><a href="indoor-lights-products.php#SL-LED-Down-Lights-Galaxy-Series" ">SL LED Down Lights - Galaxy Series</a></li>
<li><a href=" indoor-lights-products.php#SL-Down-Lights-Crystal-Series" ">SL Down Lights - Crystal Series</a></li>
<li><a href=" indoor-lights-products.php#SF-Slim-Surface-Panel-Solitaire-Series">SF Slim Surface Panel - Solitaire
                  Series</a></li>
              <li><a href="indoor-lights-products.php#SL-Surface-Panel">SL Surface Panel</a></li>
              <li><a href="indoor-lights-products.php#SL-COB-Down-Lights-Bloom-Series">SL COB Down Lights - Bloom
                  Series</a></li>
              <li><a href="indoor-lights-products.php#SL-COB-Spotlight-Coral-Series">SL COB Spotlight - Coral Series</a>
              </li>
              <li><a href="indoor-lights-products.php#SL-COB-Movable-SF-Spotlight-Coral-Series">SL COB Movable SF
                  Spotlight - Coral Series</a></li>
              <li><a href="indoor-lights-products.php#SL-COB-Laser-Blade-Spotlight-Matrix-Series">SL COB Laser Blade
                  Spotlight - Matrix Series</a></li>
              <li><a href="indoor-lights-products.php#SL-COB-Spotlight-Matrix-Series">SL COB Spotlight - Matrix
                  Series</a></li>
              <li><a href="indoor-lights-products.php#SL-COB-Zoom-Spotlight-Matrix-Series">SL COB Zoom Spotlight -
                  Matrix Series</a></li>
              <li><a href="indoor-lights-products.php#SL-COB-Spotlight-Rings-Matrix-Series">SL COB Spotlight Rings -
                  Matrix Series</a></li>
              <li><a href="indoor-lights-products.php#SL-Trimless-COB-Spotlight-Matrix-Series">SL Trimless COB Spotlight
                  - Matrix Series</a></li>
              <li><a href="indoor-lights-products.php#SL-Narrow-Trim-COB-Spotlight-Matrix-Series">SL Narrow Trim COB
                  Spotlight - Matrix Series</a></li>
              <li><a href="indoor-lights-products.php#SL-COB-Spotlight-Module-Rings-Beyond-Series">SL COB Spotlight
                  Module Rings - Beyond Series</a></li>
              <li><a href="indoor-lights-products.php#SL-COB-Spotlight-Modules-Beyond-Series">SL COB Spotlight Modules -
                  Beyond Series</a></li>
              <li><a href="indoor-lights-products.php#SL-Anti-Glare-Surface-Downlight-Beyond-Series">SL Anti-Glare
                  Surface Downlight - Beyond Series</a></li>
              <li><a href="indoor-lights-products.php#SL-COB-Directional-Surface-Light-Beyond-Series">SL COB Directional
                  Surface Light - Beyond Series</a></li>
              <li><a href="indoor-lights-products.php#SL-COB-Pendent-Light-Beyond-Series">SL COB Pendent Light - Beyond
                  Series</a></li>
              <li><a href="indoor-lights-products.php#SL-COB-Reading-Lamp">SL COB Reading Lamp</a></li>
              <li><a href="indoor-lights-products.php#SL-COB-Telescopic-Spotlight-Beyond-Series">SL COB Telescopic
                  Spotlight - Beyond Series</a></li>
              <li><a href="indoor-lights-products.php#SL-COB-Spotlight-Modules-Beyond-Series">SL COB Spotlight Modules -
                  Beyond Series</a></li>
              <li><a href="indoor-lights-products.php#SL-COB-Spotlight-Module-Rings-Beyon- Series">SL COB Spotlight
                  Module Rings - Beyond Series</a></li>
              <li><a href="indoor-lights-products.php#SL-X-Series-COB">SL-X Series COB</a></li>
              <li><a href="indoor-lights-products.php#SL-COB-Spotlight-Smart-Series">SL COB Spotlight Smart Series</a>
              </li>
              <li><a href="indoor-lights-products.php#SL-Zoom-COB-Spotlight">SL Zoom COB Spotlight</a></li>
              <li><a href="indoor-lights-products.php#SL-Degree-Adjust-Spotlight">SL Degree Adjust Spotlight</a></li>
              <li><a href="indoor-lights-products.php#SL-LED-Tube-Light-Neon-Series">SL LED Tube Light - Neon Series</a>
              </li>
              <li><a href="indoor-lights-products.php#SL-X-Series-Wall-Lights">SL-X Series Wall Lights</a></li>
              <li><a href="indoor-lights-products.php#SL-Kitchen-Cabinet-Lights">SL Kitchen & Cabinet Lights</a></li>
              <li><a href="indoor-lights-products.php#Sl-Basin-Mirror-Lights">SL Basin Mirror Lights</a></li>
            </ul>

          </li>
          <li class="dropdown"><a href="#">OUTDOOR LIGHTS <span><i class="fa-solid fa-chevron-down"></i></a>
            <ul class="dropdown-menu" id="desktop-outdoor-products">
              <li><a href="outdoor-lights.php#Recessed-Step-Light">Outdoor Recessed Step Light</a></li>
              <li><a href="outdoor-lights.php#Surface-Step-Wall-Light">Outdoor Surface Step/Wall Light</a></li>
              <li><a href="outdoor-lights.php#mini-wall">Outdoor Mini Series Wall Lights</a></li>
              <li><a href="outdoor-lights.php#adjustable-wall-lights">Led Linear Adjustable Outdoor Wall Washer
                  Lights</a></li>
              <li><a href="outdoor-lights.php#garden-spike-lights">Outdoor Garden Tree Spike Lights</a></li>
              <li><a href="outdoor-lights.php#pathway-lights">Inground Burial Pathway Lights</a></li>
              <li><a href="outdoor-lights.php#Tiltable-Garden-Bollard-Light">Tiltable Garden Bollard Lights</a></li>
              <li><a href="outdoor-lights.php#Inground-led-burial">Outdoor Inground LED Burial Light</a></li>
              <li><a href="outdoor-lights.php#Mini-Inground-Lights">Mini Inground Lights</a></li>
              <li><a href="outdoor-lights.php#narrow-beam-lights">Outdoor Narrow Beam Uplighters</a></li>
              <li><a href="outdoor-lights.php#solar-garden-lights">Outdoor Solar Garden Lights</a></li>
              <li><a href="outdoor-lights.php#Automatic-Sensor-Based-Solar-Garden-Bollard-Lights">Automatic Sensor Based
                  Solar Garden Bollard Lights</a></li>
              <li><a href="outdoor-lights.php#Outdoor-Garden-Lights">Outdoor Garden Lights</a></li>
              <li><a href="outdoor-lights.php#Outdoor-Surface-Wall-Foot-Lights">Outdoor Surface/Wall Foot Lights</a>
              </li>
              <li><a href="outdoor-lights.php#Outdoor-Recessed-Foot-Lights">Outdoor Recessed Foot Lights</a></li>
              <li><a href="outdoor-lights.php#Outdoor-Wall-Lights">Outdoor Wall Lights</a></li>
              <li><a href="outdoor-lights.php#Outdoor-Bollard-Lights">Outdoor Bollard Lights</a></li>
              <li><a href="outdoor-lights.php#Outdoor-Gate-Lights">Outdoor Gate Lights</a></li>
              <li><a href="outdoor-lights.php#Outdoor-Recessed-Ground-Burial-Wall-Washers">Outdoor Recessed Ground
                  Burial Wall Washer</a></li>
              <li><a href="outdoor-lights.php#Outdoor-IP68-Underwater-Outdoor-Flexible-Wall-Washer">Outdoor IP68
                  Underwater/Outdoor Flexible Wall Washers</a></li>
              <li><a href="outdoor-lights.php#Outdoor-Wall-Washers">Outdoor Wall Washers</a></li>



              <li><a href="outdoor-lights.php#SL-Outdoor-Lights-Cloudy-Series">SL Outdoor Lights - Cloudy Series</a>
              </li>
              <li><a href="outdoor-lights.php#SL-Foot-Lights">SL Foot Lights</a></li>
              <li><a href="outdoor-lights.php#SL-Outdoor-Wall-Ground-Burial-Lights">SL Outdoor Wall / Ground Burial
                  Lights</a></li>
              <li><a href="outdoor-lights.php#SL-Parking-Lights">SL Parking Lights</a></li>
              <li><a href="outdoor-lights.php#SL-Outdoor-Surface-COB-Downlights">SL Outdoor Surface COB Downlights</a>
              </li>
              <li><a href="outdoor-lights.php#SL-Garden-Lights">SL Garden Lights</a></li>
              <li><a href="outdoor-lights.php#SL-Bollard-Lights">SL Bollard Lights</a></li>
              <li><a href="outdoor-lights.php#SL-360°-Trick-Light">SL 360° Trick Light</a></li>
              <li><a href="outdoor-lights.php#SL-Wall-Washer">SL Wall Washer</a></li>
              <li><a href="outdoor-lights.php#SL-Underwater-Lights">SL-Underwater-Lights</a></li>
              <li><a href="outdoor-lights.php#SL-Drivers-for-Underwater-Lights">SL Drivers for Underwater Lights</a>
              </li>
              <li><a href="outdoor-lights.php#SL-High-Bay-Lights">SL High Bay Lights</a></li>
              <li><a href="outdoor-lights.php#SL-COB-LED-Flood-Lights">SL COB LED Flood Lights</a></li>
              <li><a href="outdoor-lights.php#SL-SMD-LED-Flood-Lights-Nano-Series">SL SMD LED Flood Lights - Nano
                  Series</a></li>
              <li><a href="outdoor-lights.php#SL-SMD-LED-Flood-Lights-Blush-Series">SL SMD LED Flood Lights - Blush
                  Series</a></li>
              <li><a href="outdoor-lights.php#SL-Colored-LED-Flood-Lights-Splash-Series">SL Colored LED Flood Lights -
                  Splash Series</a></li>
              <li><a href="outdoor-lights.php#SL-Edison-LED-Street-Lights">SL Edison LED Street Lights</a></li>
              <li><a href="outdoor-lights.php#SL-OSRAM-LED-Street-Lights">SL OSRAM LED Street Lights</a></li>
            </ul>
          </li>



          <li class="dropdown"><a href="profile-lights.php">PROFILE LIGHTS<span><i
                  class="fa-solid fa-chevron-down"></i></a>
            <ul class="dropdown-menu" id="desktop-profile-products">
              <li><a href="profile-lights.php#Led-Aluminium-Profiles">Led Aluminium Profiles</a></li>
              <li><a href="profile-lights.php#Sl-Profiles">SL Profiles</a>
              <li><a href="profile-lights.php#Ip67-Flexible-Neon-Profiles">Ip67 Flexible Neon Profiles</a>
              <li><a href="profile-lights.php#Ip67-Flexible-Neon-Profile-Accessories">IP67 Flexible Neon Profile
                  Accessories</a>
              <li><a href="profile-lights.php#C-Series-Recessed-Flexible-Neon-Profile-Without-Thread">C Series Recessed
                  Flexible Neon Profile Without Thread</a>
              <li><a href="profile-lights.php#D-Series-Led-Flexible-Neon-Profile">D Series LED Flexible Neon Profile</a>
              </li>
            </ul>
          </li>
          <li class="dropdown"><a href="#">FLEXI LIGHTS <span><i class="fa-solid fa-chevron-down"></i></a>
            <ul class="dropdown-menu" id="desktop-flexi-products">
              <li><a href="flexi-lights.php#Gold-Series-12V-DC">LED Strips - Gold Series 12V DC</a></li>
              <li><a href="flexi-lights.php#Gold-Series-24V-DC">LED Strips - Gold Series 24V DC</a></li>
              <li><a href="flexi-lights.php#Eco-Series-12V-DC-1">LED Strips - Eco Series 12V DC</a></li>
              <li><a href="flexi-lights.php#Eco-Series-12V-DC-2">LED Strips - Eco Series 12V DC</a></li>
              <li><a href="flexi-lights.php#Eco-Series-12V-DC-3">LED Strips - Eco Series 12V DC</a></li>
              <li><a href="flexi-lights.php#LED-Rope-Lights">LED Rope Lights</a></li>
              <li><a href="flexi-lights.php#LED-Soft-Neon-Lights">LED Soft Neon Lights</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#">SMPS <span><i class="fa-solid fa-chevron-down"></i></a>
            <ul class="dropdown-menu" id="desktop-smps-products">
              <li><a href="smps.php#Super-Slim-SMPS">Super Slim SMPS</a></li>
              <li><a href="smps.php#SMPS-12V-DC-Mini-Series(Low Height)">SMPS 12V DC-Mini Series(Low Height)</a></li>
              <li><a href="smps.php#SMPS-12V-DC">SMPS 12V DC</a></li>
              <li><a href="smps.php#SMPS-5V-DC">SMPS 5V DC</a></li>
              <li><a href="smps.php#SMPS-24V-DC">SMPS 24V DC</a></li>
              <li><a href="smps.php#SMPS-Waterproof-24V-DC">SMPS Waterproof 24V DC</a></li>
              <li><a href="smps.php#SMPS-Rainproof-12V-DC">SMPS Rainproof 12V DC</a></li>
              <li><a href="smps.php#SMPS-Waterproof-12V-DC">SMPS Waterproof 12V DC</a></li>
              <li><a href="smps.php#SMPS-Ultra-Slim-Phase-Cut-Analogue-Dimmer-12V-DC">SMPS Ultra Slim Phase Cut+Analogue
                  Dimmer 12V DC</a></li>
              <li><a href="smps.php#SMPS-Ultra-Slim-Phase-Cut-Analogue-Dimmer-24V-DC">SMPS Ultra Slim Phase Cut+Analogue
                  Dimmer 24V DC</a></li>
              <li><a href="smps.php#SL-Indoor-SMPS">SL Indoor SMPS</a></li>
              <li><a href="smps.php#SL-IP67-Outdoor-SMPS">SL IP67 Outdoor SMPS</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#">LED DRIVERS <span><i class="fa-solid fa-chevron-down"></i></a>
            <ul class="dropdown-menu" id="desktop-led-drivers-products">
              <li><a href="LED-drivers.php#LED-Drivers">LED Drivers</a></li>
              <li><a href="LED-drivers.php#Waterproof-LED-Drivers">Waterproof LED Drivers</a></li>
              <li><a href="LED-drivers.php#Phase-Cut-Dimmable-LED-Drivers">Phase Cut Dimmable LED Drivers (Traic
                  Dimming)</a></li>
              <li><a href="LED-drivers.php#Phase-Cut-Dimmable">Phase Cut Dimmable LED Drivers</a></li>
              <li><a href="LED-drivers.php#Analogue-Dimmable-LED-Driver">Analogue Dimmable LED Driver(0-10)</a></li>
              <li><a href="LED-drivers.php#Dali-Adjustable-Dimmable-LED-Drivers">Dali Adjustable Dimmable LED
                  Drivers</a></li>
            </ul>
          </li>
          
          <li class="dropdown"><a href="#">OUR CATALOGUE <span><i class="fa-solid fa-chevron-down"></i></a>
            <ul class="dropdown-menu" id="desktop-led-drivers-products">
              <li><a href="assets/img/catalogue/SL-PRICE-LIST-2020.pdf" target="_blank">SL PRICE LIST 2020</a></li>
              <li><a href="assets/img/catalogue/SUNNY-LIGHT-CATALOGUE-2026.pdf" target="_blank">SUNNY LIGHT CATALOGUE 2026</a></li>
              
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </section>


  <!-- Get a quotes pop form -->
  <!-- Add this modal container before the closing </body> tag in your main page -->
  <div class="modal-overlay" id="modalOverlay">
    <div class="modal">
      <div class="decoration circle"></div>
      <div class="decoration square"></div>

      <button class="close-btn" id="closeBtn">&times;</button>
      <div class="modal-content" id="modalContent">
        <!-- Quote form will be loaded here -->
      </div>
    </div>
  </div>



  <script>
    // JavaScript to handle the modal and load the quote form
    document.addEventListener('DOMContentLoaded', function () {
      const modalOverlay = document.getElementById('modalOverlay');
      const closeBtn = document.getElementById('closeBtn');
      const modalContent = document.getElementById('modalContent');
      const quoteButtons = document.querySelectorAll('#quoteBtn, .quote-button button, .quote-button a');

      // Function to load quote form
      function loadQuoteForm() {
        fetch('quote.php')
          .then(response => response.text())
          .then(data => {
            // Extract just the modal content from the quote.php
            const parser = new DOMParser();
            const doc = parser.parseFromString(data, 'text/html');
            const quoteForm = doc.querySelector('.modal-content');
            modalContent.innerHTML = quoteForm.innerHTML;

            // Initialize the form functionality
            initQuoteForm();
          })
          .catch(error => {
            console.error('Error loading quote form:', error);
            modalContent.innerHTML = '<p>Error loading form. Please try again later.</p>';
          });
      }

      // Function to initialize quote form functionality
      function initQuoteForm() {
        const quoteForm = document.getElementById('quoteForm');
        const closeBtn = document.getElementById('closeBtn');

        if (quoteForm) {
          quoteForm.addEventListener('submit', (e) => {
            e.preventDefault();

            // Get form values
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const service = document.getElementById('service').value;

            // In a real application, you would send this data to a server
            console.log('Quote request submitted:', { name, email, service });

            // Show success message
            alert(`Thank you, ${name}! We'll contact you at ${email} about your ${service} needs.`);

            // Reset form and close modal
            quoteForm.reset();
            modalOverlay.classList.remove('active');
            document.body.style.overflow = 'auto';
          });
        }

        if (closeBtn) {
          closeBtn.addEventListener('click', () => {
            modalOverlay.classList.remove('active');
            document.body.style.overflow = 'auto';
          });
        }
      }

      // Open modal when quote button is clicked
      quoteButtons.forEach(button => {
        button.addEventListener('click', (e) => {
          e.preventDefault();
          loadQuoteForm();
          modalOverlay.classList.add('active');
          document.body.style.overflow = 'hidden';
        });
      });

      // Close modal when close button is clicked
      closeBtn.addEventListener('click', () => {
        modalOverlay.classList.remove('active');
        document.body.style.overflow = 'auto';
      });

      // Close modal when clicking outside the modal content
      modalOverlay.addEventListener('click', (e) => {
        if (e.target === modalOverlay) {
          modalOverlay.classList.remove('active');
          document.body.style.overflow = 'auto';
        }
      });

      // Close modal with Escape key
      document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modalOverlay.classList.contains('active')) {
          modalOverlay.classList.remove('active');
          document.body.style.overflow = 'auto';
        }
      });
    });
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const categories = [
        { desktopId: 'desktop-indoor-products', sideId: 'sidepanel-indoor-products' },
        { desktopId: 'desktop-outdoor-products', sideId: 'sidepanel-outdoor-products' },
        { desktopId: 'desktop-profile-products', sideId: 'sidepanel-profile-products' },
        { desktopId: 'desktop-flexi-products', sideId: 'sidepanel-flexi-products' },
        { desktopId: 'desktop-smps-products', sideId: 'sidepanel-smps-products' },
        { desktopId: 'desktop-led-drivers-products', sideId: 'sidepanel-led-drivers-products' },
      ];

      categories.forEach(cat => {
        const desktop = document.getElementById(cat.desktopId);
        const side = document.getElementById(cat.sideId);
        if (desktop && side) {
          side.innerHTML = desktop.innerHTML;
        }
      });
    });
  </script>


 <script>
document.addEventListener('DOMContentLoaded', function () {
  console.log('Initializing enhanced search...');

  const input = document.getElementById('searchInput');
  const suggestions = document.getElementById('searchSuggestions');
  const form = input ? input.closest('form') : null;

  if (!input || !suggestions) {
    console.error('Search elements not found!');
    return;
  }

  const defaultSuggestions = [
    { name: "Anti Glare Smart Tunable Deep Recessed COB Spotlights", href: "indoor-lights-products.php#Anti-Glare-Smart-Tunable-Deep-Recessed-COB-Spotlight" },
    { name: "Premium Deep Recessed Anti Glare COB Spotlights", href: "indoor-lights-products.php#Premium-Deep-Recessed-Anti-Glare-COB-Spotlights" },
    { name: "Outdoor Recessed Step Light", href: "outdoor-lights.php#Recessed-Step-Light" },
    { name: "LED Strips - Gold Series 12V DC", href: "flexi-lights.php#Gold-Series-12V-DC" },
    { name: "Super Slim SMPS", href: "smps.php#Super-Slim-SMPS" },
    { name: "Led Aluminium Profiles", href: "profile-lights.php#Led-Aluminium-Profiles" }
  ];

  const selectors = [
    '#desktop-indoor-products a',
    '#desktop-outdoor-products a',
    '#desktop-profile-products a',
    '#desktop-flexi-products a',
    '#desktop-smps-products a',
    '#desktop-led-drivers-products a'
  ];

  const excludeKeywords = [
    'indoor', 'outdoor', 'profile', 'smps', 'flexi', 'led driver', 'drivers', 'products'
  ];

  const nodeList = new Set();
  selectors.forEach(sel => {
    document.querySelectorAll(sel).forEach(a => nodeList.add(a));
  });

  const allItems = Array.from(nodeList)
    .map(a => {
      const name = a.textContent.trim();
      const href = a.getAttribute('href') || '';
      return { name, href };
    })
    .filter(item => {
      if (!item.name || !item.href || item.name.length < 3) return false;
      const lower = item.name.toLowerCase();
      return !excludeKeywords.some(keyword => lower === keyword || lower.includes(' ' + keyword));
    })
    .reduce((acc, cur) => {
      const key = cur.name.toLowerCase();
      if (!acc._map) acc._map = new Set();
      if (!acc._map.has(key)) {
        acc._map.add(key);
        acc.push(cur);
      }
      return acc;
    }, []);

  console.log('Search items loaded:', allItems.length);

  let highlightedIndex = -1;
  let currentMatches = [];
  let isShowingDefault = false;

  function clearSuggestions() {
    suggestions.innerHTML = '';
    suggestions.style.display = 'none';
    suggestions.setAttribute('aria-hidden', 'true');
    highlightedIndex = -1;
    currentMatches = [];
    isShowingDefault = false;
  }

  function showDefaultSuggestions() {
    suggestions.innerHTML = '';
    currentMatches = defaultSuggestions;
    isShowingDefault = true;

    defaultSuggestions.forEach((item, idx) => {
      const li = document.createElement('li');
      li.textContent = item.name;
      li.setAttribute('data-index', idx);
      li.addEventListener('click', () => navigateTo(item.href));
      li.addEventListener('mouseenter', () => {
        highlightedIndex = idx;
        updateHighlight();
      });
      suggestions.appendChild(li);
    });

    showSuggestions();
  }

  function showFilteredSuggestions(query) {
    const matches = allItems.filter(item =>
      item.name.toLowerCase().includes(query.toLowerCase())
    ).slice(0, 8);

    currentMatches = matches;
    isShowingDefault = false;
    suggestions.innerHTML = '';

    if (matches.length === 0) {
      const li = document.createElement('li');
      li.textContent = 'No products found';
      li.style.cssText = 'padding: 12px; color: #666; font-style: italic;';
      suggestions.appendChild(li);
    } else {
      matches.forEach((item, idx) => {
        const li = document.createElement('li');
        li.textContent = item.name;
        li.setAttribute('data-index', idx);
        li.addEventListener('click', () => navigateTo(item.href));
        li.addEventListener('mouseenter', () => {
          highlightedIndex = idx;
          updateHighlight();
        });
        suggestions.appendChild(li);
      });
    }

    showSuggestions();
  }

  function showSuggestions() {
    suggestions.style.display = 'block';
    suggestions.setAttribute('aria-hidden', 'false');
    highlightedIndex = -1;
    updateHighlight();
  }

  function updateHighlight() {
    const listItems = suggestions.querySelectorAll('li');
    listItems.forEach((li, i) => {
      li.style.background = i === highlightedIndex ? '#007bff' : 'white';
      li.style.color = i === highlightedIndex ? 'white' : 'black';
    });
  }

  function navigateTo(href) {
    clearSuggestions();
    input.value = '';
    if (href.startsWith('#')) {
      const el = document.getElementById(href.slice(1));
      if (el) el.scrollIntoView({ behavior: 'smooth' });
    } else {
      window.location.href = href;
    }
  }

  input.addEventListener('focus', () => {
    const query = input.value.trim().toLowerCase();
    if (!query) showDefaultSuggestions();
    else showFilteredSuggestions(query);
  });

  input.addEventListener('input', () => {
    const query = input.value.trim().toLowerCase();
    if (!query) showDefaultSuggestions();
    else showFilteredSuggestions(query);
  });

  input.addEventListener('keydown', e => {
    const listItems = suggestions.querySelectorAll('li');
    if (listItems.length === 0) return;
    switch (e.key) {
      case 'ArrowDown':
        e.preventDefault();
        highlightedIndex = (highlightedIndex + 1) % listItems.length;
        updateHighlight();
        break;
      case 'ArrowUp':
        e.preventDefault();
        highlightedIndex = highlightedIndex <= 0 ? listItems.length - 1 : highlightedIndex - 1;
        updateHighlight();
        break;
      case 'Enter':
        e.preventDefault();
        if (currentMatches.length > 0) {
          const idx = highlightedIndex >= 0 ? highlightedIndex : 0;
          navigateTo(currentMatches[idx].href);
        }
        break;
      case 'Escape':
        clearSuggestions();
        break;
    }
  });

  document.addEventListener('click', e => {
    if (!e.target.closest('.Search-bar')) clearSuggestions();
  });

  if (form) {
    form.addEventListener('submit', e => {
      e.preventDefault();
      const query = input.value.trim().toLowerCase();
      if (!query) return;
      if (currentMatches.length > 0) {
        const idx = highlightedIndex >= 0 ? highlightedIndex : 0;
        navigateTo(currentMatches[idx].href);
      } else {
        const firstMatch = allItems.find(item =>
          item.name.toLowerCase().includes(query)
        );
        if (firstMatch) navigateTo(firstMatch.href);
        else alert('No products found matching: ' + query);
      }
    });
  }

  console.log('Enhanced search ready!');
});
</script>

<!-- Mobile search bar script start -->
<script>
// Mobile Search Functionality - Filtered (no main headings)
document.addEventListener('DOMContentLoaded', function() {
    const mobileSearchToggle = document.getElementById('mobileSearchToggle');
    const mobileSearchBar = document.getElementById('mobileSearchBar');
    const mobileSearchInput = document.getElementById('mobileSearchInput');
    const mobileSearchClose = document.getElementById('mobileSearchClose');
    const mobileSearchSuggestions = document.getElementById('mobileSearchSuggestions');

    let mobileHighlightedIndex = -1;
    let mobileCurrentMatches = [];

    // Excluded keywords (main headings)
    const excludeKeywords = [
        'indoor', 'outdoor', 'profile', 'smps', 'flexi', 'led driver', 'drivers', 'products'
    ];

    // Toggle search bar
    if (mobileSearchToggle) {
        mobileSearchToggle.addEventListener('click', function() {
            mobileSearchBar.classList.add('active');
            setTimeout(() => mobileSearchInput.focus(), 100);
        });
    }

    function closeMobileSearch() {
        mobileSearchBar.classList.remove('active');
        mobileSearchInput.value = '';
        clearMobileSuggestions();
    }

    if (mobileSearchClose) {
        mobileSearchClose.addEventListener('click', closeMobileSearch);
    }

    function clearMobileSuggestions() {
        mobileSearchSuggestions.innerHTML = '';
        mobileHighlightedIndex = -1;
        mobileCurrentMatches = [];
    }

    function showMobileSuggestions(suggestions, isDefault = false) {
        mobileSearchSuggestions.innerHTML = '';
        mobileCurrentMatches = suggestions;

        if (suggestions.length === 0) {
            const noResults = document.createElement('li');
            noResults.textContent = 'No products found';
            noResults.style.cssText = 'color: #666; font-style: italic; text-align: center;';
            mobileSearchSuggestions.appendChild(noResults);
            return;
        }

        if (isDefault) {
            const heading = document.createElement('li');
            heading.className = 'suggestion-heading';
            // heading.textContent = 'Popular Products';
            mobileSearchSuggestions.appendChild(heading);
        }

        suggestions.forEach((item, idx) => {
            const li = document.createElement('li');
            li.textContent = item.name;
            li.setAttribute('data-index', idx);
            li.addEventListener('click', () => navigateToMobile(item.href));
            mobileSearchSuggestions.appendChild(li);
        });
    }

    function navigateToMobile(href) {
        closeMobileSearch();
        if (href.startsWith('#')) {
            const id = href.slice(1);
            const el = document.getElementById(id);
            if (el) el.scrollIntoView({ behavior: 'smooth', block: 'start' });
        } else {
            window.location.href = href;
        }
    }

    mobileSearchInput.addEventListener('input', function() {
        const query = this.value.trim().toLowerCase();

        if (!query) {
            // Default suggestions
            showMobileSuggestions([
                { name: "Anti Glare Smart COB Spotlights", href: "indoor-lights-products.php#Anti-Glare-Smart-COB-Spotlight-Tunable-Dimmable" },
                { name: "Outdoor Recessed Step Light", href: "outdoor-lights.php#Recessed-Step-Light" },
                { name: "LED Strips - Gold Series", href: "flexi-lights.php#Gold-Series-12V-DC" },
                { name: "Super Slim SMPS", href: "smps.php#Super-Slim-SMPS" }
            ], true);
            return;
        }

        const allItems = getAllSearchItems();
        const matches = allItems
            .filter(item => item.name.toLowerCase().includes(query))
            .slice(0, 6);

        showMobileSuggestions(matches);
    });

    mobileSearchInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            const query = this.value.trim().toLowerCase();
            if (!query) return;

            if (mobileCurrentMatches.length > 0) {
                navigateToMobile(mobileCurrentMatches[0].href);
            } else {
                const allItems = getAllSearchItems();
                const firstMatch = allItems.find(item =>
                    item.name.toLowerCase().includes(query)
                );
                if (firstMatch) navigateToMobile(firstMatch.href);
            }
        }
    });

    document.addEventListener('click', function(e) {
        if (!e.target.closest('.mobile-search-bar') && 
            !e.target.closest('.mobile-search-icon') &&
            mobileSearchBar.classList.contains('active')) {
            closeMobileSearch();
        }
    });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && mobileSearchBar.classList.contains('active')) {
            closeMobileSearch();
        }
    });

    function getAllSearchItems() {
        const selectors = [
            '#desktop-indoor-products a',
            '#desktop-outdoor-products a',
            '#desktop-profile-products a',
            '#desktop-flexi-products a',
            '#desktop-smps-products a',
            '#desktop-led-drivers-products a'
        ];

        const nodeList = new Set();
        selectors.forEach(sel => {
            document.querySelectorAll(sel).forEach(a => nodeList.add(a));
        });

        return Array.from(nodeList)
            .map(a => {
                const name = a.textContent.trim();
                let href = a.getAttribute('href') || '';
                return { name, href };
            })
            .filter(item => {
                if (!item.name || !item.href || item.name.length < 3) return false;
                const lower = item.name.toLowerCase();
                return !excludeKeywords.some(keyword => lower === keyword || lower.includes(' ' + keyword));
            })
            .reduce((acc, cur) => {
                const key = cur.name.toLowerCase();
                if (!acc._map) acc._map = new Set();
                if (!acc._map.has(key)) {
                    acc._map.add(key);
                    acc.push(cur);
                }
                return acc;
            }, []);
    }
});
</script>


<!-- Mobile search bar script end -->

  <?php include 'get-a-quote.php'; ?>
  <script src="assets/JS/index.js"></script> 
</body>

</html>

  <!-- Body Section -->
  <section class="hero-section mr-b">
    <div class="banner-part ">
      <div class="container-fluid" style="padding:0px !important">
        <div class="row align-items-center container-body m-0">
          <div class="col-md-12 col-lg-12 p-0">
            <!-- Swiper Container -->
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="assets/img/3d-rendering-modern-dining-room-living-room-with-luxury-decor.jpg"
                    alt="home_slider" />
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/beautiful-hotel-insights-details.jpg" alt="home_slider" />
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/home-banner/modern-office.jpg" alt="home_slider" />
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/home-banner/luxury-modern.jpg" alt="home_slider" />
                </div>
                <!-- <div class="swiper-slide">
                  <img src="assets/img/3d-render-contemporary-living-space.jpg" alt="home_slider" />
                </div> -->

              </div>

              <!-- /Swiper Container -->
            </div>
          </div>

        </div>
        <!-- Navigation arrows -->
        <div class="arrows">
          <div class="left-arrow"><span><i class="bi bi-chevron-right"></i></span></div>
          <div class="right-arrow"><span><i class="bi bi-chevron-left"></i></span></div>
        </div>
      </div>
    </div>

  </section>

  <!-- Product Section -->
  <section class="product-category">
    <div class="page-width">
      <div class="row g-3 text-center">
        <div class="col-4 col-md-4">
          <a href="outdoor-lights.php" class="category-item">
            <div class="self">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image17.jpg" alt="Outdoor Lights"></div>
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image31.jpg" alt="Outdoor Lights"></div>
                <div class="swiper-slide"><img src="assets/img/outdoor-light-products-img/outdoor-main-page-products/image7.jpg"  alt="Outdoor Lights"></div>
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image32.jpg" alt="Outdoor Lights"></div>
              </div>
            </div>
            <p>Outdoor Lights</p>
          </a>
        </div>
        <div class="col-4 col-md-4">
          <a href="indoor-lights-products.php" class="category-item">
            <div class="self">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image24-1.jpg" alt="Indoor light"></div>
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image9-1.jpg" alt="Indoor light"></div> 
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image10.jpg" alt="Indoor light"></div>
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image4.jpg" alt="Indoor light"></div>
              </div>
            </div>
            <p>Indoor Lights</p>
          </a>
        </div>
        <div class="col-4 col-md-4">
          <a href="waterprooflights.php" class="category-item">
            <div class="self">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image14-.jpg" alt="Waterproof Lights"></div>
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image24.jpg"  alt="Waterproof Lights"></div>
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image23.jpg"  alt="Waterproof Lights"></div>
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image39.jpg"  alt="Waterproof Lights"></div>
              </div>
            </div>
            <p>Waterproof Lights</p>
          </a>
        </div>
        <div class="col-4 col-md-4">
          <a href="main-solar-page.php" class="category-item">
            <div class="self">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image16.jpg" alt="Chandeliers"></div>
                <div class="swiper-slide"><img src="assets/img/outdoor-light-products-img/outdoor-main-page-products/image5.jpg" alt="Chandeliers"></div>
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image18.jpg" alt="Chandeliers"></div>
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image19.jpg" alt="Chandeliers"></div>
              </div>
            </div>
            <p>Solar Lights</p>
          </a>
        </div>
        <div class="col-4 col-md-4">
          <a href="main-surfacelight-page.php" class="category-item">
            <div class="self">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image37.jpg" alt="Waterproof Lights"></div>
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image38.jpg" alt="Waterproof Lights"></div>
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image28.jpg" alt="Waterproof Lights"></div>
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image40.jpg" alt="Waterproof Lights"></div>
              </div>
            </div>
            <p>Surface Lights</p>
          </a>
        </div>
        <div class="col-4 col-md-4">
          <a href="main-track-light.php" class="category-item">
            <div class="self">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image12.jpg" alt="Track Lights"></div>
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image20.jpg" alt="Track Lights"></div>
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image21.jpg" alt="Track Lights"></div>
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image22.jpg" alt="Track Lights"></div>
              </div>
            </div>
            <p>Track Lights</p>
          </a>
        </div>
        <div class="col-4 col-md-4">
          <a href="main-sensor.php" class="category-item">
            <div class="self ">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image36.jpg" alt="Sensor Lights"></div>
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image30.jpg" alt="Sensor Lights"></div>
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image33.jpg" alt="Sensor Lights"></div>
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image35.jpg" alt="Sensor Lights"></div>
              </div>
            </div>
            <p>Sensor Lights</p>
          </a>
        </div>
        <div class="col-4 col-md-4">
          <a href="main-magnetic-page.php" class="category-item">
            <div class="self">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image27.jpg" alt="Magnetic Lights"></div>
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image26.jpg" alt="Magnetic Lights"></div>
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image34.jpg" alt="Magnetic Lights"></div>
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image25.jpg" alt="Magnetic Lights"></div>
              </div>
            </div>
            <p>Magnetic Lights</p>
          </a>
        </div>
        <div class="col-4 col-md-4">
          <a href="main-projector-page.php" class="category-item">
            <div class="self">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image2-1.jpg" alt="Projector Lights"></div>
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image29.jpg"  alt="Projector Lights"></div>
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image2-1.jpg" alt="Projector Lights"></div>
                <div class="swiper-slide"><img src="assets/img/in-prodoct/image29.jpg"  alt="Projector Lights"></div>
              </div>
            </div>
            <p>Projector Lights</p>
          </a>
        </div>
      </div>
    </div>
  </section>


  <!-- About Section -->
  <section class="my-section about-sec py-4 ">
    <div class="container-fluid">
      <div class="row py-3">
        <div class="col-lg-6 col-md-5">
          <div class="about-text">
            <h1 class="mb-3">Sunny <span>Lights</span> </h1>
            <p class="mb-3">
             At Sunny Light, we believe in a bright future illuminated by innovation and creativity.
We transform spaces with light — blending technology, design, and human comfort into every solution.
<br>
Our lighting products go beyond illumination; they inspire, enhance, and bring energy to every environment.
<br>
With a focus on efficiency, aesthetics, and well-being, we create lighting that truly makes a difference.
<br>
Driven by passion and purpose, we continue to shape the way people experience light.
            </p>
            <a href="about.php" class="about-btn">
              <span>Read More</span>
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>

        </div>

        <div class="col-lg-6 col-md-5 main-img-box">
          <div class="box-img">
            <img class="image1" src="assets/img/about-img1.png" alt="About-img" />
            <img class="image2" src="assets/img/about-img2.png" alt="About-img" />
          </div>
        </div>
      </div>
  </section>

  <!-- Video Section -->
  <section class="video-sec">
    <div class="video-container">
      <video class="video" autoplay muted loop>
        <source src="assets\video\4948849_Interior_Design_Lounge_1920x1080.mp4" type="video/mp4" />
        Your browser does not support the video tag.
      </video>

      <div class="video-overlay-text">
        <!-- <h2>Welcome to Our Website</h2> -->
        <h2>Create Warmth & Style with Premium Decor Lights.</h2>
        <div class="button">
          <button><a href="contact.php">Contact Us</a></button>
        </div>

      </div>

    </div>
  </section>


  <!-- Discover the new Section -->
  <section class="my-section pd-bl ">
    <div class="page-width">
      <div class="D-heading">
        <h1 class="D-h1">Discover The New</h1>
        <a href="discover-new.php" class="D-link">View all</a>
      </div>
    </div>
    <div class="page-width text-center">
      <!-- <div class="container"> -->
      <div class="row D-row">
        <div class="col">
          <div class="D-container">
            <div class="D-img">
              <img src="assets/img/Discover-imgs/curve-shape-magnetic-light.png" alt="" class="default-img">
              <img src="assets/img/Discover-imgs/curve-shape-light-image.png" alt="" class="hover-img">
            </div>
            <div class="D-details">
              <h5>Curved Shape Magnetic Lights</h5>
              <!-- <spam>Price 20000</spam> -->
            </div>
          </div>
        </div>
        <div class="col">
          <div class="D-container">
            <div class="D-img">
              <img src="assets/img/Discover-imgs/tree-spike-light.png" alt="" class="default-img">
              <img src="assets/img/Discover-imgs/tree-spike-light-use.png" alt="" class="hover-img">
            </div>
            <div class="D-details">
              <h5>Outdoor Garden Tree Spike Light</h5>
              <!-- <spam>Price 20000</spam> -->
            </div>
          </div>
        </div>
        <div class="col">
          <div class="D-container">
            <div class="D-img">
              <img src="assets/img/Discover-imgs/display-counter-light.jpeg" alt="" class="default-img">
              <img src="assets/img/Discover-imgs/display-counter-light-img.jpg" alt="" class="hover-img">
            </div>
            <div class="D-details">
              <h5>Exclusively Jewellery/ Watches Display Counter Light</h5>
              <!-- <spam>Price 20000</spam> -->
            </div>
          </div>
        </div>
        <div class="col">
          <div class="D-container">
            <div class="D-img">
              <img src="assets/img/Discover-imgs/Movable-project-light.png" alt="" class="default-img">
              <img src="assets/img/Discover-imgs/projector-light-img.jpg" alt="" class="hover-img">
            </div>
            <div class="D-details">
              <h5>Outdoor 4 Logo Projector Movable Projector Light</h5>
              <!-- <spam>Price 20000</spam> -->
            </div>
          </div>
        </div>
        <div class="col">
          <div class="D-container">
            <div class="D-img">
              <img src="assets/img/Discover-imgs/niche-spotlight.png" alt="" class="default-img">
              <img src="assets/img/Discover-imgs/niche-spotlight-img.png" alt="" class="hover-img">
            </div>
            <div class="D-details">
              <h5>Mini Series Niche Spotlights</h5>
              <!-- <spam>Price 20000</spam> -->
            </div>
          </div>
        </div>
        <!-- </div> -->
      </div>
  </section>


  <!-- Banner part -->
  <section class="my-section ">
    <div class="mid-banner">
      <!-- desktop view banner -->
      <img src="assets/img/banners/banner...(2).jpg" alt="mid-banner" class="desktop-view-banner"> 

      <!-- mobile view banner -->
      <img src="assets/img/banners/sunnybanner-mobile-view.jpg" alt="mid-banner" class="mobile-view-banner"> 


      <div class="mid-overlay-btn">
       <button><a href="gallery.php">EXPLORE</a></button>
      </div>
    </div>
  </section>

  <!-- Home Decor Lights collection Section -->
  <section class="my-section pd-bl ">
    <div class="page-width ">
      <div class="D-heading">
        <h1 class="D-h1">Home Decor Lights</h1>
        <a href="home-d-light.php" class="D-link">View all</a>
      </div>
    </div>
    <div class="page-width text-center">
      <!-- <div class="container"> -->
      <div class="row D-row">
        <div class="col">
          <div class="D-container">
            <div class="D-img">
              <img src="assets/img/home-decore-light/living-room-light.png" alt="" class="default-img">
              <img src="assets/img/home-decore-light/living-room-img.png" alt="" class="hover-img">
            </div>
            <div class="D-details">
              <h5>360° Recessed Light Telescope</h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="D-container">
            <div class="D-img">
              <img src="assets/img/home-decore-light/sensor-light.png" alt="" class="default-img">
              <img src="assets/img/home-decore-light/768b5272-6e30-49d0-bada-463aa70ee044.jpg" alt="" class="hover-img">
            </div>
            <div class="D-details">
              <h5>PIR Motion Sensor Light</h5>
              <!-- <spam>Price 20000</spam> -->
            </div>
          </div>
        </div>
        <div class="col">
          <div class="D-container">
            <div class="D-img">
              <img src="assets/img/zz-indoor/track-2-r.png" alt="" class="default-img">
              <img src="assets/img/home-decore-light/track-light-img.jpg" alt="" class="hover-img">
            </div>
            <div class="D-details">
              <h5>Track Lights</h5>
              <!-- <spam>Price 20000</spam> -->
            </div>
          </div>
        </div>
        <div class="col">
          <div class="D-container">
            <div class="D-img">
              <img src="assets/img/home-decore-light/ceiling-light.png" alt="" class="default-img">
              <img src="assets/img/home-decore-light/ceiling-light-img.png" alt="" class="hover-img">
            </div>
            <div class="D-details">
              <h5>Led Profile/Flexible Neon Profile</h5>
              <!-- <spam>Price 20000</spam> -->
            </div>
          </div>
        </div>
        <div class="col">
          <div class="D-container">
            <div class="D-img">
              <img src="assets/img/home-decore-light/room-wash-room-light.png" alt="" class="default-img">
              <img src="assets/img/home-decore-light/room-wash-room-light-img.png" alt="" class="hover-img">
            </div>
            <div class="D-details">
              <h5>Steam Room/Wash Room Downlight</h5>
              <!-- <spam>Price 20000</spam> -->
            </div>
          </div>
        </div>
        <!-- </div> -->
      </div>
  </section>





  <!-- Review Section -->
  <?php include 'review.php'; ?>


  <!-- Indoor product Collection part -->
  <section class="my-section pd-bl">
    <div class="page-width">
      <div class="pdt-heading">
        <h1 class="pdt-h1 ">Indoor Lights</h1>
      </div>
    </div>
    <div class="page-width text-center">
      <!-- <div class="container"> -->
      <div class="row indoor-outdoor-row">
        <div class="col">
          <div class="pdt-container">
            <div class="pdt-img">
             <a href="surface-light-details-page.php?id=2"> <img src="assets/img/Indoor-light-img/COB-Surface-lights.png" alt=""></a>
            </div>
            <div class="pdt-details">
              <h5>COB Surface Light</h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="pdt-container">
            <div class="pdt-img">
             <a href="track-light-details-page.php?id=1"> <img src="assets/img/Indoor-light-img/Track-lights.png" alt=""></a>
            </div>
            <div class="pdt-details">
              <h5>Track Light</h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="pdt-container">
            <div class="pdt-img">
             <a href="surface-light-details-page.php?id=3"> <img src="assets/img/Indoor-light-img/SMD-light.png" alt=""></a>
            </div>
            <div class="pdt-details">
              <h5>SMD Surface Lights</h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="pdt-container">
            <div class="pdt-img">
            <a href="indoor-product-detail-page.php?id=102"> <img src="assets/img/Indoor-light-img/Wall-Washers-Recessed-Downlights.png" alt=""></a> 
            </div>
            <div class="pdt-details">
              <h5>Wall Washers Recessed Downlights</h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="pdt-container">
            <div class="pdt-img">
             <a href="surface-light-details-page.php?id=8"> <img src="assets/img/Indoor-light-img/surface-downlight.png" alt="" class="default-img"></a>
            </div>
            <div class="pdt-details">
              <h5>Surface Cob Downlights</h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="pdt-container">
            <div class="pdt-img">
             <a href="indoor-product-detail-page.php?id=73"><img src="assets/img/Indoor-light-img/High-Neck-Led-Spot-Light.png" alt=""></a> 
            </div>
            <div class="pdt-details">
              <h5>Adjustable High Neck LED Spot Light</h5>
            </div>
          </div>
        </div>
        <!-- </div> -->
      </div>
  </section>

  <!-- bottom swiper banner section -->
  <section class="bottom-swiper-section">
    <div class="banner-part">
      <div class="container-fluid" style="padding:0px !important">
        <div class="row align-items-center container-body m-0">
          <div class="col-md-12 col-lg-12 p-0">
            <!-- Swiper Container -->
            <div class="swiper bottomSwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="assets\img\modern-dining.jpg" alt="home_slider" class="myslide-image" />
                  <div class="slide-content">
                    <h2 class="heading">Brighten Your Home</h2>
                    <p class="text">Master Piece</p>
                    <a href="blog.php"> <button class="my-btn">Know More</button></a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <img src="assets\img\modern-elegance.jpg" alt="home_slider" class="myslide-image" />
                  <div class="slide-content">
                    <h2 class="heading">Style in Every Light.</h2>
                    <p class="text"> Premium Lighting Decor</p>
                    <a href="blog.php"> <button class="my-btn">Know More</button></a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <img src="assets\img\modern-living-room.jpg" alt="home_slider" class="myslide-image" />
                  <div class="slide-content">
                    <h2 class="heading">Elegant Indoor Glow</h2>
                    <p class="text">
                      Recently Launched
                    </p>
                   <a href="blog.php"> <button class="my-btn">Know More</button></a>
                  </div>
                </div>
              </div>

              <!-- /Swiper Container -->
            </div>
          </div>

        </div>
        <!-- Navigation arrows -->
        <div class="arrows">
          <div class="left-arrow"><span><i class="bi bi-chevron-right"></i></span></div>
          <div class="right-arrow"><span><i class="bi bi-chevron-left"></i></span></div>
        </div>
      </div>
    </div>

  </section>


  <!-- FQA Section -->
  <section class="faq-section">
    <div class="page-width py-3">
      <div class="row">

        <div class="col-lg-6 faq1 p-3">
          <h2 class="faq-heading">Frequently Asked Questions</h2>
          <div class="faq-item">
            <button class="faq-question">Do you provide installation service? <span class="arrow"> <i
                  class="fa-solid fa-chevron-down"></i></span></button>
            <div class="faq-answer">Yes, we provide professional installation for all types of home lights.</div>
          </div>

          <div class="faq-item">
            <button class="faq-question">Are your lights energy-efficient? <span class="arrow"> <i
                  class="fa-solid fa-chevron-down"></i></span></button>
            <div class="faq-answer">All our home lights are LED-based and designed for maximum energy efficiency.</div>
          </div>

          <div class="faq-item">
            <button class="faq-question">Do you offer smart lighting solutions? <span class="arrow"> <i
                  class="fa-solid fa-chevron-down"></i></span></button>
            <div class="faq-answer">Yes, we provide smart lights that can be controlled via mobile app or voice
              assistants.
            </div>
          </div>

          <div class="faq-item">
            <button class="faq-question">Can I customize the design of lights? <span class="arrow"> <i
                  class="fa-solid fa-chevron-down"></i></span></button>
            <div class="faq-answer">We offer customization in design, size, and finish to match your interiors.</div>
          </div>

          <div class="faq-item">
            <button class="faq-question">Do you provide warranty on lights? <span class="arrow"> <i
                  class="fa-solid fa-chevron-down"></i></span></button>
            <div class="faq-answer">Yes, all our lights come with a standard 2-year replacement warranty.</div>
          </div>

          <!-- <div class="faq-item">
            <button class="faq-question">Can I order lights in bulk? <span class="arrow">
                <i class="fa-solid fa-chevron-down"></i></span></button>
            <div class="faq-answer">Yes, we offer bulk orders for residential and commercial projects.</div>
          </div> -->
        </div>

        <div class="col-lg-6">
          <div class="yt-video pb-0 text-center">
              <div style="position: relative; width: 100%; max-width: 1200px;">
               <video  id="video" width="100%" height="410" autoplay muted loop>
        <source src="assets/video/1111942_Turkey_Oven_3840x2160.mp4" type="video/mp4" />
        Your browser does not support the video tag.
      </video>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- bottom-top-banner part -->
  <section class="my-section my-btm-top-bnr">
    <div class="btm-top-container">
      <div class="btm-top-banner-overlay">
        <!-- <img src="assets/img/banners/bottom-top-banner.png" alt="Consultant-banner"> -->
         <h2>Great lighting design is a result of<br> knowledge, experience and creativity.</h2>
         <a href="gallery.php" class="btm-bnr-btn">VIEW PROJECTS</a>
      </div>
    </div>
  </section>


  <!-- Outdoor product Collection part -->
  <section class="my-section pd-bl ">
    <div class="page-width">
      <div class="pdt-heading">
        <h1 class="pdt-h1 ">Outdoor Lights</h1>
      </div>
    </div>
    <div class="page-width text-center">
      <!-- <div class="container"> -->
      <div class="row indoor-outdoor-row">
        <div class="col">
          <div class="pdt-container">
            <div class="pdt-img">
              <a href="outdoor-product-detail-page.php?id=89"><img src="assets/img/outdoor/out-39.jpg" alt=""></a>
            </div>
            <div class="pdt-details">
              <h5>Outdoor Wall Light</h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="pdt-container">
            <div class="pdt-img">
             <a href="outdoor-product-detail-page.php?id=49"><img src="assets/img/Solar-light.png" alt=""></a> 
            </div>
            <div class="pdt-details">
              <h5>Outdoor Solar Garden Light</h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="pdt-container">
            <div class="pdt-img">
            <a href="outdoor-product-detail-page.php?id=116"><img src="assets/img/outdoor/out-69.jpg" alt=""></a>  
            </div>
            <div class="pdt-details">
              <h5>Outdoor Wall Washer</h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="pdt-container">
            <div class="pdt-img">
             <a href="outdoor-product-detail-page.php?id=66"> <img src="assets/img/outdoor/out-13.jpg" alt=""></a>
            </div>
            <div class="pdt-details">
              <h5>Outdoor Garden Light</h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="pdt-container">
            <div class="pdt-img">
              <a href="sensor-details-page.php?id=8" ><img src="assets/img/Motion-sensor-light.png" alt="" class="default-img"></a>
            </div>
            <div class="pdt-details">
              <h5>Outdoor Motion Sensor Light</h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="pdt-container">
            <div class="pdt-img">
              <a href="outdoor-product-detail-page.php?id=29"><img src="assets/img/pathway-light.png" alt=""></a>
            </div>
            <div class="pdt-details">
              <h5>Tiltable Garden Bollard Light</h5>
            </div>
          </div>
        </div>
        <!-- </div> -->
      </div>
  </section>


  <!-- Get Exclusive Offers Section -->
  <section class="my-section">
  <div class="offer-container">
    <div class="offer-content" id="offerContent">
      <h1 class="mr-b">Get Exclusive Offers</h1>
      <p class="mr-b">Subscribe to get special offers, free giveaways, and once-in-a-lifetime deals.</p>
      
      <!-- Form with FormSubmit -->
      <form id="subscribeArea" action="https://formsubmit.co/info@sunnylights.co.in" method="POST">
        <div class="offer-btn">
          <input type="email" name="email" placeholder="Enter Your Email" id="emailInput" required class="px-3" />
          <button type="submit" class="mt-btn" id="subscribeBtn">Subscribe</button>
        </div>
        
        <!-- Hidden fields for FormSubmit customization -->
        <input type="hidden" name="_subject" value="Someone just submitted your form on website https://sunnylights.co.in/" />
        <input type="hidden" name="_autoresponse" value="Thanks for Subscribing! You will receive our offers soon." />
        <input type="hidden" name="_captcha" value="false" />
      </form>
      
    </div>
  </div>
</section>




<!-- Subscription section ends  -->




  <!-- Include Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Top home page Swiper -->
  <script>
    const swiper = new Swiper(".mySwiper", {
      loop: true,
      effect: "fade", // fade effect instead of slide
      fadeEffect: {
        crossFade: true,
      },
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".right-arrow",
        prevEl: ".left-arrow",
      },
    });
  </script>

  <!-- Product category swiper -->

  <script>
    let selfSwipers = [];

    document.querySelectorAll(".self").forEach((el) => {
      let swiper = new Swiper(el, {
        loop: true,
        effect: "cube",
        // grabCursor: true,
        cubeEffect: {
          shadow: true,
          slideShadows: true,
          shadowOffset: 20,
          shadowScale: 0.94,
        },
        autoplay: {
         delay: 2000,
         disableOnInteraction: false, // ✅ important for sync
        },
        speed: 600,
        pagination: {
          el: el.querySelector(".swiper-pagination"),
        },
      });

      // Hover -> pause only this swiper
      el.addEventListener("mouseenter", () => {
        swiper.autoplay.stop();
      });

      // Hover out -> resume this swiper (will catch global autoplay timing)
      el.addEventListener("mouseleave", () => {
        swiper.autoplay.start();
      });

      selfSwipers.push(swiper);
    });
  </script>

  <!-- Bottom swiper -->
  <script>
    var bottomSwiper = new Swiper(".bottomSwiper", {
      loop: true,
      effect: "fade", // ya "fade", "cube", "coverflow", "flip"
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".right-arrow",
        prevEl: ".left-arrow",
      },
      on: {
        init: function () {
          animateSlide(this.slides[this.activeIndex]);
        },
        slideChangeTransitionStart: function () {
          resetSlideAnimation();
        },
        slideChangeTransitionEnd: function () {
          animateSlide(this.slides[this.activeIndex]);
        },
      },
    });

    function animateSlide(slide) {
      const heading = slide.querySelector(".heading");
      const text = slide.querySelector(".text");
      const button = slide.querySelector(".my-btn");

      heading.classList.add("show");
      text.classList.add("show");
      button.classList.add("show");
    }

    function resetSlideAnimation() {
      document.querySelectorAll(".bottomSwiper .heading, .bottomSwiper .text, .bottomSwiper .my-btn").forEach(el => {
        el.classList.remove("show");
      });

      document.querySelectorAll(".bottomSwiper .slide-image").forEach(img => {
        img.style.transform = "scale(1)"; // reset image zoom
      });
    }

  </script>
 
 
 <!-- Subsription script-->
 <script>
  const form = document.getElementById('subscribeArea');

  // Check sessionStorage on page load (current tab only)
  window.addEventListener('DOMContentLoaded', () => {
    if(sessionStorage.getItem('subscribed') === 'true') {
      form.innerHTML = '<p class="text-success fw-bold mt-2 fs-4">Thanks for Subscribing!</p>';
    }
  });

  // Handle form submit
  form.addEventListener('submit', function(e){
    e.preventDefault(); // prevent default reload
    const formData = new FormData(form);

    fetch(form.action, {
      method: 'POST',
      body: formData,
      headers: { 'Accept': 'application/json' }
    })
    .then(response => {
      // Show thank you message in place of the form
      form.innerHTML = '<p class="text-success fw-bold mt-2 fs-4">Thanks for Subscribing!</p>';
      // Set sessionStorage flag (current tab only)
      sessionStorage.setItem('subscribed', 'true');
    })
    .catch(error => {
      form.innerHTML = '<p class="text-danger fw-bold mt-2">Oops! Something went wrong. Please try again.</p>';
    });
  });
</script>

<!-- subsription script end-->

  <!-- Footer Section -->
  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sunny Light</title>
  <link rel="stylesheet" href="assets/CSS/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


  <!-- Bootstrap JS (dropdowns, modals, etc. ke liye) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <!-- Our Client -->
  <!-- <section class="my-section">
    <div class="page-width text-center ourClient-section py-3">
      <h1 class="colortext">Our Client</h1>
      <div class="swiper myswiper2 py-5">
        <div class="swiper-wrapper our-client">
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/apollo-logo-.png" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/bombay-logo.png" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/core-logo.png" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/haldiram-logo.png" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/home-saaz-logo.png" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/Hero-logo.png" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/airtel-logo.png" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/bnw-logo (2).png" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/Costa_Coffee-Logo-.png" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/hindware-logo.png" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/kfc-logo-.png" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/lakme-salon.jpg" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/lava.jpg" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/luxuria.jpg" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/max-health-care.png" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/nike-logo.jpg" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/ramada-logo.png" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/sony-logo.png" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/suzuki-logo.png" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/tanishq-logo (2).png" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/tecno-logo.jpg" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/vivo-logo.png" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/royal-enfield-.png" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/timex-logo.png" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/vodafone-logo.png" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/Reebok-Logo.wine.png" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/gd doenka.jpg" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/taj-hotel-logo.png" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/indian-oil-logo-png.png" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/audi-logo.png" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/gionee-logo.png" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/p.p_jewellers-logo.png" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/Intex_Logo.jpg" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/sarvodaya-logo.jpg" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/giani-logo.jpg" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/fortune-hotel-logo.png" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/titan-logo-.png" alt="BPTP Logo" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client">
              <img src="assets/img/our-client/Redico Logo.jpg" alt="BPTP Logo" width="100%">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->


  <!-- Footer Section -->
  <section>
    <div class="footer-part">
      <div class="container-fluid upper-footer">
        <div class="row ">
          <div class="col-sm-6 col-xl-3 col-md-3">
            <div class="footer-widget">
              <a class="footer-logo" href="index.php">
                <img src="assets/img/logoH__1_-removebg-preview.png" alt="logo"></a>
              <p class="footer-desc">We believe in a brighter future.
Through innovation and new technologies, we transform spaces and create meaningful experiences with light.</p>
              <div class="social-icons">
                <ul class="footer-social">
                  <li><a class="icofont-facebook" href="https://www.facebook.com/profile.php?id=61578299321011" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                  </li>
                  <!--<li><a class="icofont-linkedin" href="#" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>-->
                  </li>
                  <li><a class="icofont-instagram" href="https://www.instagram.com/_sunny_lights_/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                  </li>
                </ul>
              </div>

            </div>
          </div>
          <div class="col-sm-6 col-xl-3 col-md-3">
            <div class="footer-widget contact">
              <h3 class="footer-title">Quick Link</h3>
              <ul class="footer-contact lineheightset">
                <li><a href="index.php"><span><i class="bi bi-chevron-double-right "></i>Home</span></a></li>
                <li><a href="about.php"><span><i class="bi bi-chevron-double-right "></i>About</span></a></li>
                <li><a href="blog.php"><span><i class="bi bi-chevron-double-right "></i>Blogs</span></a></li>
                <li><a href="career.php"><span><i class="bi bi-chevron-double-right "></i>Career</span></a></li>
                <li><a href="gallery.php"><span><i class="bi bi-chevron-double-right "></i>Gallery</span></a></li>
                <li><a href="contact.php"><span><i class="bi bi-chevron-double-right "></i>Contact</span></a></li>
                <!--<li><a href="#"><span><i class="bi bi-chevron-double-right "></i>Admin Login</span></a></li>-->
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3 col-md-3">
            <div class="footer-widget contact">
              <h3 class="footer-title">Products</h3>
              <ul class="footer-contact lineheightset">
                <li><a href="outdoor-lights.php"><span><i class="bi bi-chevron-double-right "></i>Outdoor Lights</span></a></li>
                <li><a href="indoor-lights-products.php"><span><i class="bi bi-chevron-double-right "></i>Indoor Lights</span></a></li>
                <li><a href="flexi-lights.php"><span><i class="bi bi-chevron-double-right "></i>Flexi Lights</span></a></li>
                <li><a href="smps.php"><span><i class="bi bi-chevron-double-right "></i>SMPS</span></a></li>
                <li><a href="LED-drivers.php"><span><i class="bi bi-chevron-double-right "></i>LED Drivers</span></a></li>
                <li><a href="profile-lights.php"><span><i class="bi bi-chevron-double-right "></i>Profile Lights</span></a></li>

              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3 col-md-3">
            <div class="footer-widget contact">
              <h3 class="footer-title">Contact us</h3>
              <ul class="footer-contact">
                <li><a href="mailto:sunnylights377@gmail.com"><i class="fa-solid fa-at"></i>
                    <span>sunnylights377@gmail.com</span></a>
                </li>
                <li> <a href="tel:+919891119177"> <i class="fa-solid fa-phone"></i>
                    <span>(+91) 9891119177</span></a>                                       
                </li> 
                    
                <li> <a href="tel:+919891119199"><i class="fa-solid fa-phone"></i>
                    <span>(+91) 9891119199</span></a>
                </li>
                <li> <a href="tel:+919891119188"><i class="fa-solid fa-phone"></i>
                    <span>(+91) 9891119188</span></a>
                </li>

                <li> <a href="#" ><i class="fa-solid fa-location-dot"></i>
                    <span>   1670/6, Khajoor Wali Building, Bhagirath Palace, Chandni Chowk, New Delhi – 110006.
                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <p class="footer-copytext">© All Copyrights Reserved by Sunny Lights</p>
        <p class="footer-copytext">© 2025 Designed &amp; Developed By <a href="https://www.jaikviktechnology.com/"
            target="_blank"><span>Jaikvik Technology India Pvt Ltd</span></a></p>

      </div>
    </div>
  </section>



  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Swiper -->
  <script>
    var myswiper2 = new Swiper(".myswiper2", {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 20,
      speed: 2000,
      autoplay: {
        delay: 0,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      },
      breakpoints: {
        320: {
          slidesPerView: 1.2,
        },
        480: {
          slidesPerView: 2.5,
        },
        640: {
          slidesPerView: 4.8,
        },
        768: {
          slidesPerView: 6.5,
        },
        1024: {
          slidesPerView: 8.5,
        },
      },
    });

  </script>
</body>

</html>
  <!--  -->
  <script src="assets/JS/index.js"></script>
  <script src="assets/JS/faq.js"></script>
</body>

</html>