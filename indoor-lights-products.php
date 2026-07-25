<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indoor LED Lighting | Elegant & Efficient Lights by Sunny Light</title>
<meta name="description" content="Explore modern indoor LED lighting solutions designed for aesthetics, comfort, and energy efficiency. Perfect for homes, offices, and commercial spaces.">
<meta name="keywords" content="indoor lighting, LED panel lights, ceiling lights, recessed lights, office lighting, home lighting, commercial LED lighting, energy saving lights">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/CSS/main.css">
    <link rel="stylesheet" href="assets/CSS/outdoor-lights-productpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="shortcut icon" href="assets\img\logoH__1_-removebg-preview.png" type="image/x-icon">

    <style>
        .mysidebar {
            /* max-height: 180vh; */
                scroll-behavior: smooth !important;
    /* scrollbar-width: none !important; */
        }
    </style>

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

    <!-- production category section -->
    <section class="productpage-category mt-4">
        <div class="page-width main-productcategory">
            <!-- left part -->
            <div class="mysidebar">
                <div class="mysidebar-section">
                    <div class="mysidebar-header">
                        <h4>Indoor Lights</h4>
                                <button class="dropdown-toggle" id="mobileDropdownBtn">
        <i class="fa fa-chevron-down"></i>
      </button>
                    </div>
                    <div class="mysidebar-content" id="mobileDropdownContent">
    <ul class="mysidebar-list">
        <li><a href="#" class="filter-link all-products-link active" id="all-products-link">All Products</a></li>
        
        <li><a href="#Anti-Glare-Smart-Tunable-Deep-Recessed-COB-Spotlight" class="filter-link" data-category="anti-tunable">Anti Glare Smart Tunable Deep Recessed COB Spotlights</a></li>
        <li><a href="#Anti-Glare-Smart-COB-Spotlight-Tunable-Dimmable" class="filter-link" data-category="anti-dimmable">Anti Glare Smart COB Spotlight Tunable & Dimmable</a></li>
        <li><a href="#Premium-Deep-Recessed-Anti-Glare-COB-Downlights" class="filter-link" data-category="premium-anti">Premium Deep Recessed Anti Glare COB Downlights</a></li>
        <li><a href="#Premium-Deep-Recessed-Anti-Glare-COB-Spotlights" class="filter-link" data-category="premium-anti">Premium Deep Recessed Anti Glare COB Spotlights</a></li>
        <li><a href="#Premium-Deep-Recessed-Ceiling-Secure-Trimless-Antiglare-Downlights" class="filter-link" data-category="trimless">Premium Deep Recessed Ceiling Secure Trimless Antiglare Downlights</a></li>
        <li><a href="#Deep-Recessed-Antiglare-LED-Wallwasher" class="filter-link" data-category="wallwasher">Deep Recessed Antiglare LED Wallwasher</a></li>
        <li><a href="#Premium-Deep-Recesses-Cob-Spot-Lights" class="filter-link" data-category="premium-cob">Deep Recessed Cob Led Spotlights</a></li>
        <li><a href="#Deep-Recessed-Anti-Glare-Cob-Led-Spotlights" class="filter-link" data-category="premium-cob">Deep Recessed Anti Glare Cob Led Spotlights</a></li>
        <li><a href="#Laser-Blade-Linear-Spot-Lights" class="filter-link" data-category="laser-linear">Laser Blade Linear Spot Lights</a></li>
        <li><a href="#Tiltable-LED-COB-Spotlight" class="filter-link" data-category="tiltable">Economic Recessed Tiltable LED COB Spotlights</a></li>
        <li><a href="#COB-360-Adjustable-Recessed-Ceiling-Downlight" class="filter-link" data-category="cob360">COB 360 Adjustable Recessed Ceiling Downlights</a></li>
        <li><a href="#Deep-Recessed-Adjustable-Led-Wall-Washer" class="filter-link" data-category="adj-wallwasher">Deep Recessed Adjustable Led Wall Washer</a></li>
        <li><a href="#Adjustable-High-Neck-LED-Spot-Light" class="filter-link" data-category="highneck">Adjustable High Neck LED Spot Lights</a></li>
        <li><a href="#Mini-Series-Niche-Spot-Lights" class="filter-link" data-category="mini-niche">Mini Series Niche Spot Lights</a></li>
        <li><a href="#Zoom-15-To-60-Degree" class="filter-link" data-category="zoom">Zoom 15 To 60 Degree Adjustable Spot Lights</a></li>
        <li><a href="#Laser-Blade-Tiltable-Trimless-Linear-Lights" class="filter-link" data-category="laser-tilt">Laser Blade Tiltable/Trimless Linear Lights</a></li>
        <li><a href="#Premium-High-Power-Laser-Blade-Lights" class="filter-link" data-category="laser-premium">Laser Blade High Power COB Spot Lights</a></li>
        <li><a href="#Economic-Laser-Blade-Linear-Spot-Lights" class="filter-link" data-category="laser-economic">Laser Blade Linear Spot Lights</a></li>
                <li><a href="#Surface-Pendant-Cylindrical-Lights" class="filter-link" data-category="cylinder">Surface/Pendant Cylindrical Lights</a></li>
        <li><a href="#IP54-Rating-Surface-Cylinder-Lights" class="filter-link" data-category="cylinder">Outdoor Surface Cylinder Lights - IP54 Rating</a></li>
        <li><a href="#Surface-Track-Recessed-Led-Spot-Lights" class="filter-link" data-category="surface-track">Surface/Track/Recessed Led Spot Lights</a></li>
        <li><a href="#Commercial-Tiltable-Premium-LED-Spotlight" class="filter-link" data-category="surface-track1">Commercial Tiltable Premium LED Spotlights</a></li>
        <li><a href="#Attachable-Linear-Led-Profile-Lights" class="filter-link" data-category="attachable">Attachable Linear Led Profile Lights</a></li>
        <!-- <li><a href="#Customized-Gym-Office-Lighting" class="filter-link" data-category="customised">Customized Gym & Office Lighting</a></li> -->
        <li><a href="#Office-Gym-Lighting-Powered-By-Osram" class="filter-link" data-category="Osram">Office/Gym Lighting Powered By Osram</a></li>
        <li><a href="#Commercial-Lighting-For-Multiple-Uses" class="filter-link" data-category="commercial">Commercial Lighting For Multiple Uses</a></li>
        <li><a href="#Indoor-Step-Lights" class="filter-link" data-category="step">Indoor Step Lights</a></li>
        <li><a href="#Display-Counter-Lights" class="filter-link" data-category="counter">Display Counter Lights</a></li>
        <!-- <li><a href="#Indoor-Outdoor-Logo-Projector-Light" class="filter-link" data-category="projector">Indoor & Outdoor Logo Projector Lights</a></li> -->
        <li><a href="#Smd-Deep-Recessed-Down-Lights" class="filter-link" data-category="projector">Smd Deep Recessed Down Lights</a></li>
        <li><a href="#Recessed-Light-Telescope" class="filter-link" data-category="projector">360° Recessed Light Telescope</a></li>
        <li><a href="#Led-Profile-Flexible-Neon-Profile" class="filter-link" data-category="neon">Led Profile/Flexible Neon Profile</a></li>
        <li><a href="#Mr-16-Gu-10-Fixture" class="filter-link" data-category="neon">MR 16/Gu 10 Fixtures</a></li>





        <li><a href="#Sl-Led-Panel-Edge-Lit-Smart-Series" class="filter-link" data-category="sl-led-panel">Sl Led Panel Edge Lit - Smart Series</a></li>
        <li><a href="#Sl-Led-Panel-Back-Lit-Smart-Series" class="filter-link" data-category="sl-led-panel">Sl Led Panel Back Lit - Smart Series</a></li>
        <li><a href="#SL-LED-Panels-Full-Series" class="filter-link" data-category="sl-led-panel">SL LED Panels Full Series</a></li>
        <li><a href="#Sl-Led-Panel-Backlit" class="filter-link" data-category="sl-led-panel">Sl Led Panel Backlit</a></li>
        <li><a href="#SL-LED-Slim-Panel-Trimmy-Series" class="filter-link" data-category="sl-led-panel">SL LED Slim Panel - Trimmy Series</a></li>
        <li><a href="#SL-LED-Remote-Panel-Edge-Lit" class="filter-link" data-category="sl-led-panel">SL LED Remote Panel Edge Lit</a></li>
        <li><a href="#SL-LED-Panel-With-Built-In-Driver-Prime-Series" class="filter-link" data-category="sl-led-panel">SL LED Panel With Built-In Driver - Prime Series</a></li>
        <li><a href="#SL-LED-Down-Lights-Galaxy-Series" class="filter-link" data-category="sl-down-lights">SL LED Down Lights - Galaxy Series</a></li>
        <li><a href="#SL-Down-Lights-Crystal-Series" class="filter-link" data-category="sl-down-lights">SL Down Lights - Crystal Series</a></li>
        <li><a href="#SF-Slim-Surface-Panel-Solitaire-Series" class="filter-link" data-category="surface-lights">SF Slim Surface Panel - Solitaire Series</a></li>
        <li><a href="#SL-Surface-Panel" class="filter-link" data-category="surface-lights">SL Surface Panel</a></li>
        <li><a href="#SL-COB-Down-Lights-Bloom-Series" class="filter-link" data-category="cob-lights">SL COB Down Lights - Bloom Series</a></li>
        <li><a href="#SL-COB-Spotlight-Coral-Series" class="filter-link" data-category="cob-lights">SL COB Spotlight - Coral Series</a></li>
        <li><a href="#SL-COB-Movable-SF-Spotlight-Coral-Series" class="filter-link" data-category="cob-lights">SL COB Movable SF Spotlight - Coral Series</a></li>
        <li><a href="#SL-COB-Laser-Blade-Spotlight-Matrix-Series" class="filter-link" data-category="cob-lights">SL COB Laser Blade Spotlight - Matrix Series</a></li>
        <li><a href="#SL-COB-Spotlight-Matrix-Series" class="filter-link" data-category="cob-lights">SL COB Spotlight - Matrix Series</a></li>
        <li><a href="#SL-COB-Zoom-Spotlight-Matrix-Series" class="filter-link" data-category="cob-lights">SL COB Zoom Spotlight - Matrix Series</a></li>
        <li><a href="#SL-COB-Spotlight-Rings-Matrix-Series" class="filter-link" data-category="cob-lights">SL COB Spotlight Rings - Matrix Series</a></li>
        <li><a href="#SL-Trimless-COB-Spotlight-Matrix-Series" class="filter-link" data-category="cob-lights">SL Trimless COB Spotlight - Matrix Series</a></li>
        <li><a href="#SL-Narrow-Trim-COB-Spotlight-Matrix-Series" class="filter-link" data-category="cob-lights">SL Narrow Trim COB Spotlight - Matrix Series</a></li>
        <li><a href="#SL-COB-Spotlight-Module-Rings-Beyond-Series" class="filter-link" data-category="cob-lights">SL COB Spotlight Module Rings - Beyond Series</a></li>
        <li><a href="#SL-COB-Spotlight-Modules-Beyond-Series" class="filter-link" data-category="cob-lights">SL COB Spotlight Modules - Beyond Series</a></li>
        <li><a href="#SL-Anti-Glare-Surface-Downlight-Beyond-Series" class="filter-link" data-category="cob-lights">SL Anti-Glare Surface Downlight - Beyond Series</a></li>
        <li><a href="#SL-COB-Directional-Surface-Light-Beyond-Series" class="filter-link" data-category="cob-lights">SL COB Directional Surface Light - Beyond Series</a></li>
        <li><a href="#SL-COB-Pendent-Light-Beyond-Series" class="filter-link" data-category="cob-lights">SL COB Pendent Light - Beyond Series</a></li>
        <li><a href="#SL-COB-Reading-Lamp" class="filter-link" data-category="cob-lights">SL COB Reading Lamp</a></li>
        <li><a href="#SL-COB-Telescopic-Spotlight-Beyond-Series" class="filter-link" data-category="cob-lights">SL COB Telescopic Spotlight - Beyond Series</a></li>
        <li><a href="#SL-COB-Spotlight-Modules-Beyond-Series" class="filter-link" data-category="cob-lights">SL COB Spotlight Modules - Beyond Series</a></li>
        <li><a href="#SL-COB-Spotlight-Module-Rings-Beyon- Series" class="filter-link" data-category="cob-lights">SL COB Spotlight Module Rings - Beyond Series</a></li>
        <li><a href="#SL-X-Series-COB" class="filter-link" data-category="cob-lights">SL-X Series COB</a></li>
        <li><a href="#SL-COB-Spotlight-Smart-Series" class="filter-link" data-category="cob-lights">SL COB Spotlight Smart Series</a></li>
        <li><a href="#SL-Zoom-COB-Spotlight" class="filter-link" data-category="cob-lights">SL Zoom COB Spotlight</a></li>
        <li><a href="#SL-Degree-Adjust-Spotlight" class="filter-link" data-category="cob-lights">SL Degree Adjust Spotlight</a></li>
        <li><a href="#SL-LED-Tube-Light-Neon-Series" class="filter-link" data-category="tube-lights">SL LED Tube Light - Neon Series</a></li>
        <li><a href="#SL-X-Series-Wall-Lights" class="filter-link" data-category="wall-lights">SL-X Series Wall Lights</a></li>
        <li><a href="#SL-Kitchen-Cabinet-Lights" class="filter-link" data-category="specialty-lights">SL Kitchen & Cabinet Lights</a></li>
        <li><a href="#Sl-Basin-Mirror-Lights" class="filter-link" data-category="specialty-lights">SL Basin Mirror Lights</a></li>
        <li><a href="#Linear-Led-Pendant-Light" class="filter-link" data-category="specialty-lights">Linear Led Pendant Light</a></li>
        <li><a href="#Commercial-Premium-Quality-Tiltable-COB-Down-Light" class="filter-link" data-category="specialty-lights">Commercial Premium Quality Tiltable COB Down Light</a></li>
        <li><a href="#pin-hole-cob-lights" class="filter-link" data-category="specialty-lights">Pin Hole COB Lights</a></li>
        <li><a href="#trimless-cob-anti-glare" class="filter-link" data-category="specialty-lights">Trimless COB Deep Recessed Anti-Glare Light</a></li>
        <li><a href="#mini-series-small-dia-deep-recessed-cob" class="filter-link" data-category="specialty-lights">Mini Series Small Dia Deep Recessed Celing Secure COB Down Lights</a></li>
        <li><a href="#adoptable-cob-frame" class="filter-link" data-category="specialty-lights">Adoptable Ceiling Secure COB Down Light Frame (MR-16 / GU-10 / COB Module)</a></li>
        <li><a href="#surface-cob-cylinder-light" class="filter-link" data-category="specialty-lights">Surface COB Cylinder Light</a></li>
       
    </ul>
</div>

                </div>
            </div>

            <!-- right product grid -->
            <div class="products-grid">
<!-- Back to All Products Button -->
                <div class="back-to-all" id="backToAll">
                    <button id="backButton">
                        <i class="fas fa-arrow-left"></i> Back to All Products
                    </button>
                </div>

                <div class="products-container">
                    

                    <!-- product group 2 Anti Glare Smart Tunable Deep Recessed COB Spotlight -->
                    <div class="product-group" id="Anti-Glare-Smart-Tunable-Deep-Recessed-COB-Spotlight">
                        <h3 id="" class="product-group-title">Anti Glare Smart Tunable Deep Recessed COB Spotlights</h3>
                        <div class="products-container">

                            <a href="indoor-product-detail-page.php?id=4" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/anti-glare-light/spot-2.jpeg"
                                            alt="Economic Anti Glare Tunable Cob Spot Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/spot-light/use17.jpg"
                                            alt="Economic Anti Glare Tunable Cob Spot Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Anti Glare Smart Tunable Deep Recessed COB Spotlight</h3>
                                        <div class="product-model"><span>Model:</span> SLMX1091 (3s)</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=5" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/anti-glare-light/tuneable-spot.jpeg"
                                            alt="Economic Anti Glare Tunable Cob Spot Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/spot-light/use18.jpg"
                                            alt="Economic Anti Glare Tunable Cob Spot Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Anti Glare Smart Tunable Deep Recessed COB Spotlight</h3>
                                        <div class="product-model"><span>Model:</span> SLMX1092 (3s)</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

                     <!-- product group 3  Anti Glare Smart COB Spotlight Tunable & Dimmable -->
                    <div class="product-group" id="Anti-Glare-Smart-COB-Spotlight-Tunable-Dimmable">
                        <h3 id="" class="product-group-title"> Anti Glare Smart COB Spotlight Tunable & Dimmable</h3>
                        <div class="products-container">

                            <a href="indoor-product-detail-page.php?id=64" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/anti-d-1.jpg"
                                            alt="Economic Anti Glare Tunable Cob Spot Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/anti-d-3.jpg"
                                            alt="Economic Anti Glare Tunable Cob Spot Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"> Anti Glare Smart COB Spotlight Tunable & Dimmable</h3>
                                        <div class="product-model"><span>Model:</span> SLMX1091R</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=65" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/anti-d-1.jpg"
                                            alt="Economic Anti Glare Tunable Cob Spot Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/anti-d-3.jpg"
                                            alt="Economic Anti Glare Tunable Cob Spot Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"> Anti Glare Smart COB Spotlight Tunable & Dimmable</h3>
                                        <div class="product-model"><span>Model:</span> SLMX1092R</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

<!-- product group 4  Anti Glare Smart COB Spotlight Tunable & Dimmable -->

                    <div class="product-group" id="Premium-Deep-Recessed-Anti-Glare-COB-Downlights">
                        <h3 id="" class="product-group-title"> Premium Deep Recessed Anti Glare COB Downlights</h3>
                        <div class="products-container">

                            <a href="indoor-product-detail-page.php?id=145" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/anti-glare-light/SLMX1191.png"
                                            alt="Premium Deep Recessed Anti Glare COB Downlight" class="default-image">
                                        <img src="assets/img/Indoor-light-img/anti-glare-light/1192_1.png"
                                            alt="Premium Deep Recessed Anti Glare COB Downlight USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"> Premium Deep Recessed Anti Glare COB Downlights</h3>
                                        <div class="product-model"><span>Model:</span> SL MX 1191</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=146" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/anti-glare-light/SLMX1191.png"
                                            alt="Premium Deep Recessed Anti Glare COB Downlight" class="default-image">
                                        <img src="assets/img/Indoor-light-img/anti-glare-light/1192_1.png"
                                            alt="Premium Deep Recessed Anti Glare COB Downlight USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"> Premium Deep Recessed Anti Glare COB Downlights</h3>
                                        <div class="product-model"><span>Model:</span> SL MX 1192</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=147" class="product-card-link">
                                <div class="product-card" data-price="1800">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/anti-glare-light/SLMX1191.png"
                                            alt="Premium Deep Recessed Anti Glare COB Downlight" class="default-image">
                                        <img src="assets/img/Indoor-light-img/anti-glare-light/1192_1.png"
                                            alt="Premium Deep Recessed Anti Glare COB Downlight USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"> Premium Deep Recessed Anti Glare COB Downlights</h3>
                                        <div class="product-model"><span>Model:</span> SL MX 1193</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

                    <div class="product-group" id="Premium-Deep-Recessed-Anti-Glare-COB-Spotlights">
                        <h3 id="" class="product-group-title"> Premium Deep Recessed Anti Glare COB Spotlights</h3>
                        <div class="products-container">

                            <a href="indoor-product-detail-page.php?id=66" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/anti-glare-light/pr-3.png"
                                            alt="Economic Anti Glare Tunable Cob Spot Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/anti-glare-light/SLMX1591-1.jpg"
                                            alt="Economic Anti Glare Tunable Cob Spot Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"> Premium Deep Recessed Anti Glare COB Spotlight</h3>
                                        <div class="product-model"><span>Model:</span> SLMX1591</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=67" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/anti-glare-light/pr-3.png"
                                            alt="Economic Anti Glare Tunable Cob Spot Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/anti-glare-light/SLMX1591-2.png"
                                            alt="Economic Anti Glare Tunable Cob Spot Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"> Premium Deep Recessed Anti Glare COB Spotlight</h3>
                                        <div class="product-model"><span>Model:</span> SLMX1592</div>
                                    </div>
                                </div>
                            </a>

                             <a href="indoor-product-detail-page.php?id=68" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/anti-glare-light/pr-3.png"
                                            alt="Economic Anti Glare Tunable Cob Spot Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/anti-glare-light/SLMX1591-2.png"
                                            alt="Economic Anti Glare Tunable Cob Spot Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"> Premium Deep Recessed Anti Glare COB Spotlight</h3>
                                        <div class="product-model"><span>Model:</span> SLMX1593</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

            <!-- product group 5  Premium Deep Recessed Ceiling Secure Trimless Antiglare Downlights -->
                    <div class="product-group" id="Premium-Deep-Recessed-Ceiling-Secure-Trimless-Antiglare-Downlights">
                        <h3 id="" class="product-group-title"> Premium Deep Recessed Ceiling Secure Trimless Antiglare Downlights</h3>
                        <div class="products-container">

                            <a href="indoor-product-detail-page.php?id=69" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/d-c-light/dl-3.jpg"
                                            alt="Economic Anti Glare Tunable Cob Spot Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/d-c-light/dl-6.jpg"
                                            alt="Economic Anti Glare Tunable Cob Spot Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"> Premium Deep Recessed Ceiling Secure Trimless Antiglare Downlight</h3>
                                        <div class="product-model"><span>Model:</span> SIMX1310 Trimless</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=70" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/d-c-light/dl-2.jpg"
                                            alt="Economic Anti Glare Tunable Cob Spot Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/d-c-light/dl-6.jpg"
                                            alt="Economic Anti Glare Tunable Cob Spot Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"> Premium Deep Recessed Ceiling Secure Trimless Antiglare Downlight</h3>
                                        <div class="product-model"><span>Model:</span> SIMX1312 Trimless</div>
                                    </div>
                                </div>
                            </a>

                           

                        </div>
                    </div>
             
        <!-- product group 6  Premium Deep Recessed Ceiling Secure Trimless Antiglare Downlights -->
                    <div class="product-group" id="Deep-Recessed-Antiglare-LED-Wallwasher">
                        <h3 id="" class="product-group-title"> Deep Recessed Antiglare LED Wallwasher</h3>
                        <div class="products-container">

                            <a href="indoor-product-detail-page.php?id=71" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/wall-washer-1.jpg"
                                            alt="Economic Anti Glare Tunable Cob Spot Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/washer-img.jpg"
                                            alt="Economic Anti Glare Tunable Cob Spot Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"> Deep Recessed Antiglare LED Wallwasher</h3>
                                        <div class="product-model"><span>Model:</span> SIMX891</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=72" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/wall-washer-2.jpg"
                                            alt="Economic Anti Glare Tunable Cob Spot Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/washer-img-1.png"
                                            alt="Economic Anti Glare Tunable Cob Spot Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Deep Recessed Antiglare LED Wallwasher</h3>
                                        <div class="product-model"><span>Model:</span> SIMX892</div>
                                    </div>
                                </div>
                            </a>

                           

                        </div>
                    </div>            

                    <!-- product group 7 Premium Deep Recesses Cob Spot Lights-->
                    <div class="product-group" id="Premium-Deep-Recesses-Cob-Spot-Lights">
                        <h3 id="" class="product-group-title">Deep Recessed Cob Led Spotlights
                        </h3>
                        <div class="products-container">

                            <a href="indoor-product-detail-page.php?id=6" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/spot-light/spot2.png"
                                            alt="Premium Deep Recesses Cob Spot Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/anti-glare-light/SLMX4620-3.jpeg"
                                            alt="Premium Deep Recesses Cob Spot Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Deep Recessed Cob Led Spotlight</h3>
                                        <div class="product-model"><span>Model:</span> SLMX-4620</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=7" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/spot-light/spot3.png"
                                            alt="Premium Deep Recesses Cob Spot Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/spot-light/use4.jpg"
                                            alt="Premium Deep Recesses Cob Spot Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Deep Recessed Cob Led Spotlight</h3>
                                        <div class="product-model"><span>Model:</span> SLMX-4621</div>
                                    </div>
                                </div>
                            </a>

                          

                           

                        </div>
                    </div>

                    <!-- product group 7 Premium Deep Recesses Cob Spot Lights-->
                    <div class="product-group" id="Deep-Recessed-Anti-Glare-Cob-Led-Spotlights">
                        <h3 id="" class="product-group-title">Deep Recessed Anti Glare Cob Led Spotlights
                        </h3>
                        <div class="products-container">

                        

                         

                            <a href="indoor-product-detail-page.php?id=8" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/spot-light/spot1.png"
                                            alt="Premium Deep Recesses Cob Spot Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/spot-light/use6.jpg"
                                            alt="Premium Deep Recesses Cob Spot Light use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Deep Recessed Anti Glare Cob Led Spotlight</h3>
                                        <div class="product-model"><span>Model:</span> SLMX-2091</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=9" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/spot-light/spot1.png"
                                            alt="Premium Deep Recesses Cob Spot Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/spot-light/use7.jpg"
                                            alt="Premium Deep Recesses Cob Spot Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Deep Recessed Anti Glare Cob Led Spotlight</h3>
                                        <div class="product-model"><span>Model:</span> SLMX-2092</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>


                    <!-- Product Group 8 Laser Blade Linear Spot Lights-->
                    <div class="product-group" id="Laser-Blade-Linear-Spot-Lights">
                        <h3 id="" class="product-group-title">Laser Blade Linear Spot Lights</h3>
                        <div class="products-container">

                            
                            
                              <a href="indoor-product-detail-page.php?id=122" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/SLMX3101-1.png"
                                            alt="Laser Blade Linear Spot Light" class="default-image">
                                        <img src="assets/img/smd/SLMX3101-7.jpg"
                                            alt="Laser Blade Linear Spot Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Laser Blade Linear Spot Light</h3>
                                        <div class="product-model"><span>Model:</span> SL MX 3101</div>
                                    </div>
                                </div>
                            </a>

                              <a href="indoor-product-detail-page.php?id=123" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/SLMX3101-3.png"
                                            alt="Laser Blade Linear Spot Light" class="default-image">
                                        <img src="assets/img/smd/SLMX3101-7.jpg"
                                            alt="Laser Blade Linear Spot Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Laser Blade Linear Spot Light</h3>
                                        <div class="product-model"><span>Model:</span> SL MX 3103</div>
                                    </div>
                                </div>
                            </a>

                              <a href="indoor-product-detail-page.php?id=124" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd-16.jpg"
                                            alt="Laser Blade Linear Spot Light" class="default-image">
                                        <img src="assets/img/smd/SLMX3101-7.jpg"
                                            alt="Laser Blade Linear Spot Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Laser Blade Linear Spot Light</h3>
                                        <div class="product-model"><span>Model:</span> SL MX 3104</div>
                                    </div>
                                </div>
                            </a>

                              <a href="indoor-product-detail-page.php?id=125" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/SLMX3101-5.png"
                                            alt="Laser Blade Linear Spot Light" class="default-image">
                                        <img src="assets/img/smd/SLMX3101-7.jpg"
                                            alt="Laser Blade Linear Spot Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Laser Blade Linear Spot Light</h3>
                                        <div class="product-model"><span>Model:</span> SL MX 3105</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=10" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/spot-light/SLMX3106-2.png"
                                            alt="Laser Blade Linear Spot Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/spot-light/SLMX3106-3.png"
                                            alt="Laser Blade Linear Spot Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Laser Blade Linear Spot Light</h3>
                                        <div class="product-model"><span>Model:</span> SL MX 3106</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

                    <!-- Product Group 9 Tiltable LED COB Spotlights-->
                    <div class="product-group" id="Tiltable-LED-COB-Spotlight">
                        <h3 id="#" class="product-group-title">Economic Recessed Tiltable LED COB Spotlights</h3>
                        <div class="products-container">

                            <a href="indoor-product-detail-page.php?id=11" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/img1.png"
                                            alt="Economic Recessed Tiltable Cob Spot Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/use16.jpg"
                                            alt="Economic Recessed Tiltable Cob Spot Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Economic Recessed Tiltable Cob Spot Light</h3>
                                        <div class="product-model"><span>Model:</span> SL2120-7</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=12" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/img2.png"
                                            alt="Economic Recessed Tiltable Cob Spot Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/use14.jpg"
                                            alt="Economic Recessed Tiltable Cob Spot Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Economic Recessed Tiltable Cob Spot Light</h3>
                                        <div class="product-model"><span>Model:</span> SL2120-12</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=13" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/img3.png"
                                            alt="Economic Recessed Tiltable Cob Spot Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/use12.jpg"
                                            alt="Economic Recessed Tiltable Cob Spot Light use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Economic Recessed Tiltable Cob Spot Light</h3>
                                        <div class="product-model"><span>Model:</span> SL2120-18</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=14" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/img4.png"
                                            alt="Economic Recessed Tiltable/Zoom Cob Spot Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/use15.jpg"
                                            alt="Economic Recessed Tiltable/Zoom Cob Spot Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Economic Recessed Tiltable Cob Spot Light</h3>
                                        <div class="product-model"><span>Model:</span> SL2120-24</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=15" class="product-card-link">
                                <div class="product-card" data-price="1200">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/img5.png"
                                            alt="Economic Recessed Tiltable/Zoom Cob Spot Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/use13.jpg"
                                            alt="Economic Recessed Tiltable/Zoom Cob Spot Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Economic Recessed Tiltable Cob Spot Light</h3>
                                        <div class="product-model"><span>Model:</span> SL2120-30</div>
                                    </div>
                                </div>
                            </a>

                       

                        </div>
                    </div>

                     <!-- Product Group 10 COB 360 Adjustable Recessed Ceiling Downlights-->
                    <div class="product-group" id="COB-360-Adjustable-Recessed-Ceiling-Downlight">
                        <h3 id="#" class="product-group-title">COB 360 Adjustable Recessed Ceiling Downlights</h3>
                        <div class="products-container">                       

                             <a href="indoor-product-detail-page.php?id=16" class="product-card-link">
                                <div class="product-card" data-price="1200">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/360.jpg"
                                            alt="Economic Recessed Tiltable/Zoom Cob Spot Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/use11.jpg"
                                            alt="Economic Recessed Tiltable/Zoom Cob Spot Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Cob 360 Adjustable Recessed Ceiling Downlight</h3>
                                        <div class="product-model"><span>Model:</span> SLZ-3911-12W</div>
                                    </div>
                                </div>
                            </a>
                             <a href="indoor-product-detail-page.php?id=17" class="product-card-link">
                                <div class="product-card" data-price="1200">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/360-2.jpg"
                                            alt="Economic Recessed Tiltable/Zoom Cob Spot Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/360-2use.png"
                                            alt="Economic Recessed Tiltable/Zoom Cob Spot Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Cob 360 Adjustable Recessed Ceiling Downlight</h3>
                                        <div class="product-model"><span>Model:</span> SLZ-3912-20W</div>
                                    </div>
                                </div>
                            </a>
                             <a href="indoor-product-detail-page.php?id=18" class="product-card-link">
                                <div class="product-card" data-price="1200">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/360-3.jpg"
                                            alt="Economic Recessed Tiltable/Zoom Cob Spot Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/360-3use.png"
                                            alt="Economic Recessed Tiltable/Zoom Cob Spot Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Cob 360 Adjustable Recessed Ceiling Downlight</h3>
                                        <div class="product-model"><span>Model:</span> SLZ-3913-18W</div>
                                    </div>
                                </div>
                            </a>




                        </div>
                    </div>

                    <!-- Product Group 11 Deep Recessed Adjustable Led Wall Washer -->
                    <div class="product-group" id="Deep-Recessed-Adjustable-Led-Wall-Washer">
                        <h3 id="#" class="product-group-title">Deep Recessed Adjustable Led Wall Washer</h3>
                        <div class="products-container">

                            <a href="indoor-product-detail-page.php?id=19" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/ajustable1.jpg"
                                            alt="Deep Recessed Adjustable Led Wall Washer" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/ad-use1.jpg"
                                            alt="Deep Recessed Adjustable Led Wall Washer USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Deep Recessed Adjustable Led Wall Washer</h3>
                                        <div class="product-model"><span>Model:</span> SLMX-3326-12W</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=20" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/adjustable2.jpg"
                                            alt="Deep Recessed Adjustable Led Wall Washer" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/aad-use2.jpg"
                                            alt="Deep Recessed Adjustable Led Wall Washer USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Deep Recessed Adjustable Led Wall Washer</h3>
                                        <div class="product-model"><span>Model:</span> SLMX-3327-18W</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

                 <!-- Product Group 12 Adjustable High Neck LED Spot Light -->
                    <div class="product-group" id="Adjustable-High-Neck-LED-Spot-Light">
                        <h3 id="#" class="product-group-title">Adjustable High Neck LED Spot Lights</h3>
                        <div class="products-container">

                            <a href="indoor-product-detail-page.php?id=73" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/high-1.jpg"
                                            alt="Deep Recessed Adjustable Led Wall Washer" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/hn-6.jpg"
                                            alt="Deep Recessed Adjustable Led Wall Washer USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Adjustable High Neck LED Spot Light</h3>
                                        <div class="product-model"><span>Model:</span> SLMX-3710S-7V</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=74" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/high-2.jpg"
                                            alt="Deep Recessed Adjustable Led Wall Washer" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/hn-5.jpg"
                                            alt="Deep Recessed Adjustable Led Wall Washer USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Adjustable High Neck LED Spot Light</h3>
                                        <div class="product-model"><span>Model:</span> SLMX-3710L-7W</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

                    <!-- Product Group 13 Mini Series Niche Spot Lights-->
                    <div class="product-group" id="Mini-Series-Niche-Spot-Lights">
                        <h3 id="Surface Step/Wall Light" class="product-group-title">Mini Series Niche Spot Lights
                        </h3>
                        <div class="products-container">

                            <a href="indoor-product-detail-page.php?id=21" class="product-card-link">
                                <div class="product-card" data-price="900">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/mini-series/img-81.png"
                                            alt="Mini Series Niche Spot Lights" class="default-image">
                                        <img src="assets/img/Indoor-light-img/mini-series/img-85.png"
                                            alt="Mini Series Niche Spot Lights" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Mini Series Niche Spot Light</h3>
                                        <div class="product-model"><span>Model:</span> SL-2054</div>
                                        <!-- <p class="product-price">₹ 900</p> -->
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=22" class="product-card-link">
                                <div class="product-card" data-price="1800">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/mini-series/img-83.png"
                                            alt="Mini Series Niche Spot Lights" class="default-image">
                                        <img src="assets/img/Indoor-light-img/mini-series/niche-spotlight-img.png"
                                            alt="Mini Series Niche Spot Lights-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Mini Series Niche Spot Light</h3>
                                        <div class="product-model"><span>Model:</span> SL-2920B</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=23" class="product-card-link">
                                <div class="product-card" data-price="900">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/mini-series/img-79.png"
                                            alt="Mini Series Niche Spot Lights" class="default-image">
                                        <img src="assets/img/Indoor-light-img/mini-series/mini-series-use-img.jpg"
                                            alt="Mini Series Niche Spot Lights-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Mini Series Niche Spot Light</h3>
                                        <div class="product-model"><span>Model:</span> SL-2051</div>
                                        <!-- <p class="product-price">₹ 900</p> -->
                                    </div>
                                </div>

                            </a>

                            <a href="indoor-product-detail-page.php?id=24" class="product-card-link">
                                <div class="product-card" data-price="900">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/mini-series/mini-3.png"
                                            alt="Mini Series Niche Spot Lights" class="default-image">
                                        <img src="assets/img/Indoor-light-img/mini-series/mini-series-use3.png"
                                            alt="Mini Series Niche Spot Lights-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Mini Series Niche Spot Light</h3>
                                        <div class="product-model"><span>Model:</span> SL-2052</div>
                                        <!-- <p class="product-price">₹ 900</p> -->
                                    </div>
                                </div>

                            </a>
                        </div>
                    </div>

                    <!-- Product Group 14 Zoom 15 To 60 Degree Adjustable Spot Ligh-->
                    <div class="product-group" id="Zoom-15-To-60-Degree">
                        <h3 class="product-group-title">Zoom 15 To 60 Degree Adjustable Spot Light</h3>
                        <div class="products-container">

                            <a href="indoor-product-detail-page.php?id=25" class="product-card-link">
                                <div class="product-card" data-price="550">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/zoom-spot-light/ZOOM-ADJUSTABLE-SPOTLIGHT.png"
                                            alt="Zoom 15 To 60 Degree Adjustable Spot Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/zoom-spot-light/ZOOM-SPOTLIGHT-use.jpg"
                                            alt="Zoom 15 To 60 Degree Adjustable Spot Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Zoom 15 To 60 Degree Adjustable Spot Light</h3>
                                        <div class="product-model"><span>Model:</span> SLMX-Z-590 5W</div>
                                        <!-- <p class="product-price">₹ 550</p> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Product Group 15 Laser Blade Tiltable/Trimless Linear Light-->
                    <div class="product-group" id="Laser-Blade-Tiltable-Trimless-Linear-Lights">
                        <h3 id="#" class="product-group-title">Laser Blade Tiltable/Trimless Linear Lights</h3>
                        <div class="products-container">

                            <a href="indoor-product-detail-page.php?id=26" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/linear-spotlight/img-116-.jpg"
                                            alt="Laser Blade Tiltable/Trimless Linear Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/tiltableuse.jpg"
                                            alt="Laser Blade Tiltable/Trimless Linear Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Tiltable Laser Blade Tiltable Linear Light</h3>
                                        <div class="product-model"><span>Model:</span> SLCY-12ADJ-12W</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=27" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/trimlesss.png"
                                            alt="Laser Blade Linear Spot Lights" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/trimlessuse.jpg"
                                            alt="Laser Blade Linear Spot Lights USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Trimless Laser Blade Linear Spot Light</h3>
                                        <div class="product-model"><span>Model:</span>  SLCY-11-TRIM</div>
                                        <!-- <p class="product-price">₹ 700</p> -->
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                    <!-- Product Group 16 Laser Blade High Power COB Spot Light-->
                    <div class="product-group" id="Premium-High-Power-Laser-Blade-Lights">
                        <h3 id="#" class="product-group-title">Laser Blade High Power COB Spot Lights</h3>
                        <div class="products-container">

                            <a href="indoor-product-detail-page.php?id=28" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/light-7.png"
                                            alt="Premium High Power Laser Blade Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/light2use.jpg"
                                            alt="Premium High Power Laser Blade Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Laser Blade High Power COB Spot Light</h3>
                                        <div class="product-model"><span>Model:</span> SL-CY07095</div>
                                        <!-- <p class="product-price">₹ 1500</p> -->
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=29" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/light2.png"
                                            alt="Premium High Power Laser Blade Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/light3use.jpg"
                                            alt="Premium High Power Laser Blade Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Laser Blade High Power COB Spot Light</h3>
                                        <div class="product-model"><span>Model:</span> SL-CY1409</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=30" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/light1.png"
                                            alt="Premium High Power Laser Blade Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/light1use.jpg"
                                            alt="Premium High Power Laser Blade Light use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Laser Blade High Power COB Spot Light</h3>
                                        <div class="product-model"><span>Model:</span> SL-CY2809</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=31" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/light4.png"
                                            alt="Tiltable High Power Laser Blade Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/light-use.jpg"
                                            alt="Tiltable High Power Laser Blade Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Tiltable Laser Blade High Power COB Spot Light</h3>
                                        <div class="product-model"><span>Model:</span> SL-CY1410M</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=32" class="product-card-link">
                                <div class="product-card" data-price="1200">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/light-4.png"
                                            alt="Tiltable High Power Laser Blade Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/light-use1.jpg"
                                            alt="Tiltable High Power Laser Blade Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Tiltable Laser Blade High Power COB Spot Light</h3>
                                        <div class="product-model"><span>Model:</span> SL-CY2810M</div>
                                    </div>
                                </div>
                            </a>




                        </div>
                    </div>
                    <!-- Product Group 17 Laser Blade Linear Spot Light-->
                    <div class="product-group" id="Economic-Laser-Blade-Linear-Spot-Lights">
                        <h3 id="#" class="product-group-title">Laser Blade Linear Spot Lights</h3>
                        <div class="products-container">

                            <a href="indoor-product-detail-page.php?id=33" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/linear-spotlight/linear-spotlight1.png"
                                            alt="Laser Blade Linear Spot Lights" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/use19.jpg"
                                            alt="Laser Blade Linear Spot Lights USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Laser Blade Linear Spot Light</h3>
                                        <div class="product-model"><span>Model:</span> SL MX 6620-2</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=34" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/linear-spotlight/linear-spotlight2.png"
                                            alt="Laser Blade Linear Spot Lights" class="default-image">
                                        <img src="assets/img/Indoor-light-img/linear-spotlight/light-2use.jpg"
                                            alt="Laser Blade Linear Spot Lights USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Laser Blade Linear Spot Light</h3>
                                        <div class="product-model"><span>Model:</span> SI MX 6620-4</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=35" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/linear-spotlight/linear-spotlight3.png"
                                            alt="Laser Blade Linear Spot Lights" class="default-image">
                                        <img src="assets/img/Indoor-light-img/linear-spotlight/light-3use.jpg"
                                            alt="Laser Blade Linear Spot Lights" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Laser Blade Linear Spot Light</h3>
                                        <div class="product-model"><span>Model:</span> SI MX 6620-6</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=36" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/linear-spotlight/linear-spotlight4.png"
                                            alt="Laser Blade Linear Spot Lights" class="default-image">
                                        <img src="assets/img/Indoor-light-img/linear-spotlight/light-4use.jpg"
                                            alt="Laser Blade Linear Spot Lights USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Laser Blade Linear Spot Light</h3>
                                        <div class="product-model"><span>Model:</span> SI MX 6620-10</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=37" class="product-card-link">
                                <div class="product-card" data-price="1200">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/linear-spotlight/linerar-light.png"
                                            alt="Laser Blade Linear Spot Lights" class="default-image">
                                        <img src="assets/img/Indoor-light-img/linear-spotlight/light-5use.jpg"
                                            alt="Laser Blade Linear Spot Lights USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Laser Blade Linear Spot Light</h3>
                                        <div class="product-model"><span>Model:</span> SI MX 6620-20</div>
                                    </div>
                                </div>
                            </a>




                        </div>
                    </div>

                        <!-- Product Group 18 IP54 Rating Surface Cylinder Light-->
                    <div class="product-group" id="Surface-Pendant-Cylindrical-Lights">
                        <h3 id="#" class="product-group-title">Surface/Pendant Cylindrical Lights</h3>
                        <div class="products-container">

                            <a href="indoor-product-detail-page.php?id=38" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/cy-light.jpg"
                                            alt="Surface Cylinder Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/light-6use.jpg"
                                            alt="Surface Cylinder Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Surface/Pendant Cylindrical Light</h3>
                                        <div class="product-model"><span>Model:</span> SL-6420SF 14W</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=39" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/cy-2.png"
                                            alt="Surface Cylinder Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/light-use6.jpg"
                                            alt="Surface Cylinder Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Surface/Pendant Cylindrical Light</h3>
                                        <div class="product-model"><span>Model:</span> SL-6420SF 24W</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

                        <!-- Product Group 18 IP54 Rating Surface Cylinder Light-->
                    <div class="product-group" id="IP54-Rating-Surface-Cylinder-Lights">
                        <h3 id="#" class="product-group-title">Outdoor Surface Cylinder Lights - IP54 Rating</h3>
                        <div class="products-container">

                             <a href="indoor-product-detail-page.php?id=41" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/undefined-1.jpg"
                                            alt="Surface Cylinder Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/img-195.jpg"
                                            alt="Surface Cylinder Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Surface Cylinder Light - IP54 Rating</h3>
                                        <div class="product-model"><span>Model:</span> SL-SF0725</div>
                                    </div>
                                </div>
                            </a>

                             <a href="indoor-product-detail-page.php?id=42" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/undefined-1.jpg"
                                            alt="Surface Cylinder Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/img-196.jpg"
                                            alt="Surface Cylinder Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Surface Cylinder Light - IP54 Rating</h3>
                                        <div class="product-model"><span>Model:</span> SL-SF1225</div>
                                    </div>
                                </div>
                            </a>

                             <a href="indoor-product-detail-page.php?id=43" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/undefined-1.jpg"
                                            alt="Surface Cylinder Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/img-192.jpg"
                                            alt="Surface Cylinder Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Surface Cylinder Light - IP54 Rating</h3>
                                        <div class="product-model"><span>Model:</span> SL-SF1825</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=60" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/d-c-light/cy-4.png"
                                            alt="Surface Cylinder Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/d-c-light/img-300.jpg"
                                            alt="Surface Cylinder Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Surface Cylinder Light - IP54 Rating</h3>
                                        <div class="product-model"><span>Model:</span> SLBYSF-2184</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=61" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/d-c-light/Untitled-10.jpg"
                                            alt="Surface Cylinder Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/d-c-light/img-205.jpg"
                                            alt="Surface Cylinder Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Surface Cylinder Light - IP54 Rating</h3>
                                        <div class="product-model"><span>Model:</span> SLBYSF-2185</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=62" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/d-c-light/cy-5.jpg"
                                            alt="Surface Cylinder Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/d-c-light/img-204.jpg"
                                            alt="Surface Cylinder Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Surface Cylinder Light - IP54 Rating</h3>
                                        <div class="product-model"><span>Model:</span> SLBYSF-2186</div>
                                    </div>
                                </div>
                            </a>
                            <a href="indoor-product-detail-page.php?id=63" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/d-c-light/Untitled-11.jpg"
                                            alt="Surface Cylinder Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/d-c-light/img-208.jpg"
                                            alt="Surface Cylinder Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Surface Cylinder Light - IP54 Rating</h3>
                                        <div class="product-model"><span>Model:</span> SLBYSF-2187</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                    <!-- Product Group 19 Surface/Track/Recessed Led Spot Light-->
                    <div class="product-group" id="Surface-Track-Recessed-Led-Spot-Lights">
                        <h3 class="product-group-title">Surface/Track/Recessed Led Spot Lights</h3>
                        <div class="products-container">
                               <a href="indoor-product-detail-page.php?id=59" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/img-199.png"
                                            alt="Surface/Track/Recessed Led Spot Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/img-200.jpg"
                                            alt="Surface/Track/Recessed Led Spot Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Surface/Track/Recessed Led Spot Light</h3>
                                        <div class="product-model"><span>Model:</span> SL1440</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=40" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/light5.jpg"
                                            alt="Surface/Track/Recessed Led Spot Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/light-use5.jpg"
                                            alt="Surface/Track/Recessed Led Spot Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Surface/Track/Recessed Led Spot Light</h3>
                                        <div class="product-model"><span>Model:</span> SL1440</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

                     <!-- Product Group 20 Commercial Tiltable Premium LED Spotlight-->
                    <div class="product-group" id="Commercial-Tiltable-Premium-LED-Spotlight">
                        <h3 class="product-group-title">Commercial Tiltable Premium LED Spotlights</h3>
                        <div class="products-container">
                               <a href="indoor-product-detail-page.php?id=75" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/srl-3.jpg"
                                            alt="Commercial Tiltable Premium LED Spotlight" class="default-image">
                                        <img src="assets/img/Indoor-light-img/srl-8.jpg"
                                            alt="Commercial Tiltable Premium LED Spotlight USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Commercial Tiltable Premium LED Spotlight</h3>
                                        <div class="product-model"><span>Model:</span> SLMX-2115</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                
                    <!-- Product Group 21 Attachable Linear Led Profile Light-->
                    <div class="product-group" id="Attachable-Linear-Led-Profile-Lights">
                        <h3 id="#" class="product-group-title">Attachable Linear Led Profile Lights</h3>
                        <div class="products-container">

                            <a href="indoor-product-detail-page.php?id=44" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/joiner/untitled2.jpg"
                                            alt="Attachable Linear Led Profile Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/joiner/img-175.jpg"
                                            alt="Attachable Linear Led Profile Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Attachable Linear Led Profile Light</h3>
                                        <div class="product-model"><span>Model:</span> SL-5055-20W</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=45" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/joiner/untitled2.jpg"
                                            alt="Attachable Linear Led Profile Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/joiner/img-176.jpg"
                                            alt="Attachable Linear Led Profile Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Attachable Linear Led Profile Light</h3>
                                        <div class="product-model"><span>Model:</span> SL-5055-40W</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=46" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/joiner/img-163.png"
                                            alt="Attachable Linear Led Profile Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/joiner/untitled6.jpg"
                                            alt="Attachable Linear Led Profile Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Attachable Linear Led Profile Light</h3>
                                        <div class="product-model"><span>Model:</span> 5055-L JOINTER</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=47" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/joiner/img-165.png"
                                            alt="Attachable Linear Led Profile Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/joiner/untitled7.jpg"
                                            alt="Attachable Linear Led Profile Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Attachable Linear Led Profile Light</h3>
                                        <div class="product-model"><span>Model:</span> 5055-T JOINTER</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=48" class="product-card-link">
                                <div class="product-card" data-price="1200">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/joiner/img-168.png"
                                            alt="Attachable Linear Led Profile Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/joiner/img-177.jpg"
                                            alt="Attachable Linear Led Profile Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Attachable Linear Led Profile Light</h3>
                                        <div class="product-model"><span>Model:</span> 5055-X JOINTER</div>
                                    </div>
                                </div>
                            </a>




                        </div>
                    </div>

   <!-- Product Group 15 Customized Gym & Office Lighting-->
                    <!-- <div class="product-group" id="Customized-Gym-Office-Lighting">
                        <h3 id="#" class="product-group-title">Customized Gym & Office Lighting</h3>
                        <div class="products-container">

                            <a href="#" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/linear-spotlight/linear-spotlight1.png"
                                            alt="Laser Blade Linear Spot Lights" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/main-pdt-uses-area/M-27-use.png"
                                            alt="Laser Blade Linear Spot Lights USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Laser Blade Linear Spot Lights</h3>
                                        <div class="product-model"><span>Model:</span> SL MX 6620-2</div>
                                    </div>
                                </div>
                            </a>

                            


                        </div>
                    </div> -->

                    <!-- Product Group 22 Office/Gym Lighting Powered By Osram-->
                    <div class="product-group" id="Office-Gym-Lighting-Powered-By-Osram">
                        <h3 id="#" class="product-group-title">Office/Gym Lighting Powered By Osram</h3>
                        <div class="products-container">

                            <a href="indoor-product-detail-page.php?id=78" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/gym-2.jpg"
                                            alt="Laser Blade Linear Spot Lights" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/g-1.png"
                                            alt="Laser Blade Linear Spot Lights USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Office/Gym Lighting Powered By Osram</h3>
                                        <div class="product-model"><span>Model:</span> SL 6600-450</div>
                                        <!-- <p class="product-price">₹ 1500</p> -->
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=79" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/gym-2.jpg"
                                            alt="Laser Blade Linear Spot Lights" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/g-3.jpg"
                                            alt="Laser Blade Linear Spot Lights USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Office/Gym Lighting Powered By Osram</h3>
                                        <div class="product-model"><span>Model:</span> SL 6600-600</div>
                                        <!-- <p class="product-price">₹ 700</p> -->
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=80" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/gym-3.webp"
                                            alt="Laser Blade Linear Spot Lights" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/gym-4.webp"
                                            alt="Laser Blade Linear Spot Lights" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Office/Gym Lighting Powered By Osram</h3>
                                        <div class="product-model"><span>Model:</span> SL 6601-450</div>
                                        <!-- <p class="product-price">₹ 1500</p> -->
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=81" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/gym-3.webp"
                                            alt="Laser Blade Linear Spot Lights" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/gym-5.webp"
                                            alt="Laser Blade Linear Spot Lights USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Office/Gym Lighting Powered By Osram</h3>
                                        <div class="product-model"><span>Model:</span> SL 6601-600</div>
                                        <!-- <p class="product-price">₹ 700</p> -->
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=82" class="product-card-link">
                                <div class="product-card" data-price="1200">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/gym-3.webp"
                                            alt="Laser Blade Linear Spot Lights" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/gym-7.jpg"
                                            alt="Laser Blade Linear Spot Lights USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Office/Gym Lighting Powered By Osram</h3>
                                        <div class="product-model"><span>Model:</span> SL 6601-900</div>
                                        <!-- <p class="product-price">₹ 1200</p> -->
                                    </div>
                                </div>
                            </a>

                             <a href="indoor-product-detail-page.php?id=83" class="product-card-link">
                                <div class="product-card" data-price="1200">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/hg-3.png"
                                            alt="Laser Blade Linear Spot Lights" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/hg-8.jpg"
                                            alt="Laser Blade Linear Spot Lights USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Office/Gym Lighting Powered By Osram</h3>
                                        <div class="product-model"><span>Model:</span> SL 6603-600</div>
                                        <!-- <p class="product-price">₹ 1200</p> -->
                                    </div>
                                </div>
                            </a>

                             <a href="indoor-product-detail-page.php?id=84" class="product-card-link">
                                <div class="product-card" data-price="1200">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/hg-l-1.png"
                                            alt="Laser Blade Linear Spot Lights" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/hg-l-4.png"
                                            alt="Laser Blade Linear Spot Lights USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Office/Gym Lighting Powered By Osram</h3>
                                        <div class="product-model"><span>Model:</span> SL 6666</div>
                                        <!-- <p class="product-price">₹ 1200</p> -->
                                    </div>
                                </div>
                            </a>

                             <a href="indoor-product-detail-page.php?id=85" class="product-card-link">
                                <div class="product-card" data-price="1200">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/hg-l-6.png"
                                            alt="Laser Blade Linear Spot Lights" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/hg-l-10.webp"
                                            alt="Laser Blade Linear Spot Lights USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Office/Gym Lighting Powered By Osram</h3>
                                        <div class="product-model"><span>Model:</span> SL 6606-600</div>
                                        <!-- <p class="product-price">₹ 1200</p> -->
                                    </div>
                                </div>
                            </a>



                        </div>
                    </div>

                

                          <!-- Product Group 23 Customized Gym & Office Lighting-->
                    <div class="product-group" id="Commercial-Lighting-For-Multiple-Uses">
                        <h3 id="#" class="product-group-title">Commercial Lighting For Multiple Uses</h3>
                        <div class="products-container">

                            <a href="indoor-product-detail-page.php?id=76" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/l-1.webp"
                                            alt="Laser Blade Linear Spot Lights" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/lig-use-5.jpg"
                                            alt="Laser Blade Linear Spot Lights USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Commercial Lighting For Multiple Use</h3>
                                        <div class="product-model"><span>Model:</span> SL 4248</div>
                                        <!-- <p class="product-price">₹ 1500</p> -->
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=77" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/all/lig-4.webp"
                                            alt="Laser Blade Linear Spot Lights" class="default-image">
                                        <img src="assets/img/Indoor-light-img/all/lig-use-7.jpg"
                                            alt="Laser Blade Linear Spot Lights USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Commercial Lighting For Multiple Use</h3>
                                        <div class="product-model"><span>Model:</span> SL 4248 (1 by 4)</div>
                                        <!-- <p class="product-price">₹ 700</p> -->
                                    </div>
                                </div>
                            </a>


                        </div>
                    </div>

                    <!-- Product Group 24 Indoor Step Light-->
                    <div class="product-group" id="Indoor-Step-Lights">
                        <h3 id="" class="product-group-title">Indoor Step Lights</h3>
                        <div class="products-container">

                            <a href="indoor-product-detail-page.php?id=55" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/step-light/step-light-1.png"
                                            alt="Indoor Step Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/step-light/step-light-1-use.jpg"
                                            alt="Indoor Step Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Indoor Step Light</h3>
                                        <div class="product-model"><span>Model:</span> SL03-11C</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=56" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/step-light/step-light-2.png"
                                            alt="Indoor Step Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/step-light/in-step-light-2-use.png"
                                            alt="Indoor Step Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Indoor Step Light</h3>
                                        <div class="product-model"><span>Model:</span> SL03-11E</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=57" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/step-light/srep-light-3.png"
                                            alt="Indoor Step Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/step-light/step-light-3-use.png"
                                            alt="Indoor Step Light use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Indoor Step Light</h3>
                                        <div class="product-model"><span>Model:</span> SL03-11F</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=58" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/step-light/step-light-4.png"
                                            alt="Indoor Step Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/step-light/step-light4-use.png"
                                            alt="Indoor Step Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Indoor Step Light</h3>
                                        <div class="product-model"><span>Model:</span> SL03-11H</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                    <!-- Product Group 25 Display Counter Light -->
                    <div class="product-group" id="Display-Counter-Lights">
                        <h3 id="" class="product-group-title">Exclusively Jewellery / Watches Display Counter Lights</h3>
                        <div class="products-container">

                            <a href="indoor-product-detail-page.php?id=52" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/d-c-light/D-C-light1.png"
                                            alt="Display Counter Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/d-c-light/d-c-1use.png"
                                            alt="Display Counter Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Exclusively Jewellery/ Watches Display Counter Light - Compact Model</h3>
                                        <div class="product-model"><span>Model:</span> SL-JW-001</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=53" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/d-c-light/D-C-light2.png"
                                            alt="Display Counter Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/d-c-light/d-c-2use.jpg"
                                            alt="Display Counter Light USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Exclusively Jewellery/ Watches Display Counter Light - Tall Model</h3>
                                        <div class="product-model"><span>Model:</span> SL-JW-002</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=54" class="product-card-link">
                                <div class="product-card" data-price="150">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/d-c-light/D-C-light3.png"
                                            alt="Display Counter Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/d-c-light/d-c3use.jpg"
                                            alt="Display Counter Light use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Exclusively Jewellery/ Watches Display Counter Light - High Power Model</h3>
                                        <div class="product-model"><span>Model:</span> SL-JW-003</div>
                                    </div>
                                </div>
                            </a>


                        </div>
                    </div>
                    
                    <!-- Product Group 26 Indoor & Outdoor Logo Projector Light-->
                    <!-- <div class="product-group" id="Indoor-Outdoor-Logo-Projector-Light">
                        <h3  class="product-group-title">Indoor & Outdoor Logo Projector Light</h3>
                        <div class="products-container">

                            <a href="indoor-product-detail-page.php?id=50" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/logo-projector/logo-projector-use.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/logo-projector/projector-use.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Indoor Single Logo Movable Projector Light</h3>
                                        <div class="product-model"><span>Model:</span> 20W Logo Projector</div>
                                    </div>
                                </div>
                            </a>

                            
                            <a href="indoor-product-detail-page.php?id=51" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/Indoor-light-img/joiner/projector2.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/Indoor-light-img/logo-projector/projector-light-img.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor 4 Logo Projector Movable Projector Light</h3>
                                        <div class="product-model"><span>Model: </span>SL-LA10D-IP67</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div> -->

                     <!-- Product Group 27 Smd Deep Recessed Down Lights-->
                    <div class="product-group" id="Smd-Deep-Recessed-Down-Lights">
                        <h3  class="product-group-title">Smd Deep Recessed Down Lights</h3>
                        <div class="products-container">

                            <a href="indoor-product-detail-page.php?id=86" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd-1.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-use1.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Smd Deep Recessed Down Light</h3>
                                        <div class="product-model"><span>Model:</span> SL DL ED 12</div>
                                    </div>
                                </div>
                            </a>
                            
                            <a href="indoor-product-detail-page.php?id=87" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd-2.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-use2.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Smd Deep Recessed Down Light</h3>
                                        <div class="product-model"><span>Model: </span> SL DL ED 18</div>
                                    </div>
                                </div>
                            </a>

                              <a href="indoor-product-detail-page.php?id=88" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd-3.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-use3.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Smd Deep Recessed Down Light</h3>
                                        <div class="product-model"><span>Model: </span> SL DL ED 24</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

                      <!-- Product Group 28 Deep Recessed Curve Anti Glare Cob Downlights-->
                    <div class="product-group" id="Deep-Recessed-Curve-Anti-Glare-Cob-Downlights">
                        <h3  class="product-group-title">Deep Recessed Curve Anti Glare Cob Downlights</h3>
                        <div class="products-container">

                            <a href="indoor-product-detail-page.php?id=89" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd-4.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-use5.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Deep Recessed Curve Anti Glare Cob Downlight</h3>
                                        <div class="product-model"><span>Model:</span> SL MX 390</div>
                                    </div>
                                </div>
                            </a>
                            
                            <a href="indoor-product-detail-page.php?id=90" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd-5.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-use5-1.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Deep Recessed Curve Anti Glare Cob Downlight</h3>
                                        <div class="product-model"><span>Model: </span> SL MX 791</div>
                                    </div>
                                </div>
                            </a>

                              <a href="indoor-product-detail-page.php?id=91" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd-6.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-use6.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Deep Recessed Curve Anti Glare Cob Downlight</h3>
                                        <div class="product-model"><span>Model: </span> SL MX 792</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                  
                 <!-- Product Group 28 Deep Recessed Antiglare Cob Down Lights-->
                    <div class="product-group" id="Deep-Recessed-Antiglare-Cob-Down-Lights">
                        <h3  class="product-group-title">Deep Recessed Antiglare Cob Down Lights</h3>
                        <div class="products-container">

                            <a href="indoor-product-detail-page.php?id=92" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/sdm-9-2.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-use8.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Deep Recessed Antiglare Cob Down Light</h3>
                                        <div class="product-model"><span>Model:</span> SL MX 1091</div>
                                    </div>
                                </div>
                            </a>
                            
                            <a href="indoor-product-detail-page.php?id=93" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd--9-1.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-use8.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Deep Recessed Antiglare Cob Down Light</h3>
                                        <div class="product-model"><span>Model: </span> SL MX 1092</div>
                                    </div>
                                </div>
                            </a>

                             <a href="indoor-product-detail-page.php?id=94" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd-7.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-use8.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Deep Recessed Antiglare Cob Down Light</h3>
                                        <div class="product-model"><span>Model: </span> SL MX 1093</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

                    
                <!-- Product Group 28 Premium Deep Recessed Antiglare Cob Down Lights-->
                    <div class="product-group" id="Premium-Deep-Recessed-Antiglare-Cob-Down-Lights">
                        <h3  class="product-group-title">Premium Deep Recessed Antiglare Cob Down Lights</h3>
                        <div class="products-container">

                            <a href="indoor-product-detail-page.php?id=95" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd-8.webp"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-use9.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Premium Deep Recessed Antiglare Cob Down Light</h3>
                                        <div class="product-model"><span>Model:</span> SL MX 1191</div>
                                    </div>
                                </div>
                            </a>
                            
                            <a href="indoor-product-detail-page.php?id=96" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd-8.webp"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-use9.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Premium Deep Recessed Antiglare Cob Down Light</h3>
                                        <div class="product-model"><span>Model: </span> SL MX 1192</div>
                                    </div>
                                </div>
                            </a>

                             <a href="indoor-product-detail-page.php?id=97" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd-8.webp"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-use9.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Premium Deep Recessed Antiglare Cob Down Light</h3>
                                        <div class="product-model"><span>Model: </span> SL MX 1193</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

                <!-- Product Group 28 Deeep Recessed Cob Down Lights-->
                    <div class="product-group" id="Deeep-Recessed-Cob-Down-Lights">
                        <h3  class="product-group-title">Deeep Recessed Cob Down Lights</h3>
                        <div class="products-container">

                            <a href="indoor-product-detail-page.php?id=119" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd-11.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-use11.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Deeep Recessed Cob Down Light</h3>
                                        <div class="product-model"><span>Model:</span> SL MX 1291</div>
                                    </div>
                                </div>
                            </a>
                            
                            <a href="indoor-product-detail-page.php?id=120" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd-11.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-use11-1.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Deeep Recessed Cob Down Light</h3>
                                        <div class="product-model"><span>Model: </span> SL MX 1292</div>
                                    </div>
                                </div>
                            </a>

                             <a href="indoor-product-detail-page.php?id=121" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd-11.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-use11.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Deeep Recessed Cob Down Light</h3>
                                        <div class="product-model"><span>Model: </span> SL MX 1293</div>
                                    </div>
                                </div>
                            </a>

                             <a href="indoor-product-detail-page.php?id=98" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd--9-1.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-usee9.jpeg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Deeep Recessed Cob Down Light</h3>
                                        <div class="product-model"><span>Model:</span> SL MX 1391</div>
                                    </div>
                                </div>
                            </a>
                            
                            <a href="indoor-product-detail-page.php?id=99" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd-12.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-usee12.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Deeep Recessed Cob Down Light</h3>
                                        <div class="product-model"><span>Model: </span> SL MX 1392</div>
                                    </div>
                                </div>
                            </a>

                             <a href="indoor-product-detail-page.php?id=100" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd--9-1.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-usee9.jpeg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Deeep Recessed Cob Down Light</h3>
                                        <div class="product-model"><span>Model: </span> SL MX 1393</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                

                <!-- Product Group 27 Wall Washers  Recessed Downlights-->
                    <div class="product-group" id="Wall-Washers-Recessed-Downlight">
                        <h3  class="product-group-title">Wall Washers Recessed Downlights</h3>
                        <div class="products-container">

                            <a href="indoor-product-detail-page.php?id=101" class="product-card-link">
                                <div class="product-card" data-price="150">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd-14.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-use14.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Wall Washers Recessed Downlight</h3>
                                        <div class="product-model"><span>Model:</span> SL MX 2023</div>
                                    </div>
                                </div>
                            </a>
                            
                            <a href="indoor-product-detail-page.php?id=102" class="product-card-link">
                                <div class="product-card" data-price="">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd-15.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-use15.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Wall Washers Recessed Downlight</h3>
                                        <div class="product-model"><span>Model: </span> SL MX 2022</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>


                <!-- Product Group 28 Adoptable COB Down Light-->
                    <div class="product-group" id="Adoptable-COB-Down-Light">
                        <h3  class="product-group-title">Adoptable COB Down Lights</h3>
                        <div class="products-container">

                            <a href="indoor-product-detail-page.php?id=103" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd-18.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-use25.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Adoptable COB Down Light</h3>
                                        <div class="product-model"><span>Model:</span> SL MX 119-1</div>
                                    </div>
                                </div>
                            </a>
                            
                            <a href="indoor-product-detail-page.php?id=104" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd-19.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-use20.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Adoptable COB Down Light</h3>
                                        <div class="product-model"><span>Model: </span> SL MX 119-2</div>
                                    </div>
                                </div>
                            </a>

                              <a href="indoor-product-detail-page.php?id=105" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd-20.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-use21.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Adoptable COB Down Light</h3>
                                        <div class="product-model"><span>Model: </span> SL MX 119-3</div>
                                    </div>
                                </div>
                            </a>

                             <a href="indoor-product-detail-page.php?id=106" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd-21.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-21.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Adoptable COB Down Light</h3>
                                        <div class="product-model"><span>Model:</span> SL MX 391N</div>
                                    </div>
                                </div>
                            </a>
                            
                            <a href="indoor-product-detail-page.php?id=107" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd-23.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-21.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Adoptable COB Down Light</h3>
                                        <div class="product-model"><span>Model: SL MX 394</span> </div>
                                    </div>
                                </div>
                            </a>

                              <a href="indoor-product-detail-page.php?id=108" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd-22.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-21.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Adoptable COB Down Light</h3>
                                        <div class="product-model"><span>Model: </span> SL MX 395</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                

                 <!-- Product Group 28 Adoptable Ceiling Secure Cob Down Lightss-->
                    <div class="product-group" id="Adoptable-Ceiling-Secure-Cob-Down-Lights">
                        <h3  class="product-group-title">Adoptable Ceiling Secure Cob Down Lights</h3>
                        <div class="products-container">

                         <a href="indoor-product-detail-page.php?id=109" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd-24.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-use25.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Adoptable Ceiling Secure Cob Down Light</h3>
                                        <div class="product-model"><span>Model:</span> SL MX 121-1</div>
                                    </div>
                                </div>
                            </a>

                             <a href="indoor-product-detail-page.php?id=110" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd-25.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-use25.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Adoptable Ceiling Secure Cob Down Light</h3>
                                        <div class="product-model"><span>Model:</span> SL MX 121-2</div>
                                    </div>
                                </div>
                            </a>

                             <a href="indoor-product-detail-page.php?id=111" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd-26.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-use25.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Adoptable Ceiling Secure Cob Down Light</h3>
                                        <div class="product-model"><span>Model:</span> SL MX 121-3</div>
                                    </div>
                                </div>
                            </a>

                             <a href="indoor-product-detail-page.php?id=112" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd-27.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-27.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Adoptable Ceiling Secure Cob Down Light</h3>
                                        <div class="product-model"><span>Model:</span> SL MX 396</div>
                                    </div>
                                </div>
                            </a>

                             <a href="indoor-product-detail-page.php?id=113" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd-28.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-28.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Adoptable Ceiling Secure Cob Down Light</h3>
                                        <div class="product-model"><span>Model:</span> SL MX 397</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=114" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd-29.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-29.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Adoptable Ceiling Secure Cob Down Light</h3>
                                        <div class="product-model"><span>Model:</span> SL MX 122-1</div>
                                    </div>
                                </div>
                            </a>
                            
                            <a href="indoor-product-detail-page.php?id=115" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd-30.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-30.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Adoptable Ceiling Secure Cob Down Light</h3>
                                        <div class="product-model"><span>Model: </span> SL MX 122-2</div>
                                    </div>
                                </div>
                            </a>

                              <a href="indoor-product-detail-page.php?id=116" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd-31.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-31.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Adoptable Ceiling Secure Cob Down Light</h3>
                                        <div class="product-model"><span>Model: </span> SL MX 391N</div>
                                    </div>
                                </div>
                            </a>

                             <a href="indoor-product-detail-page.php?id=117" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd-32.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-32.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Adoptable Ceiling Secure Cob Down Light</h3>
                                        <div class="product-model"><span>Model: </span> SL MX 394</div>
                                    </div>
                                </div>
                            </a>

                             <a href="indoor-product-detail-page.php?id=118" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/smd/smd-33.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/smd/smd-33.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Adoptable Ceiling Secure Cob Down Light</h3>
                                        <div class="product-model"><span>Model: </span> SL MX 395</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                 <!-- Product Group 28 360° Recessed Light Telescope-->
                    <div class="product-group" id="Recessed-Light-Telescope">
                        <h3  class="product-group-title">360° Recessed Light Telescope</h3>
                        <div class="products-container">

                         <a href="indoor-product-detail-page.php?id=126" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/indoor/indoor-1.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/indoor/indoor-1.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">360° Recessed Light Telescope</h3>
                                        <div class="product-model"><span>Model:</span> SL CR 201</div>
                                    </div>
                                </div>
                            </a>

                             <a href="indoor-product-detail-page.php?id=127" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/indoor/indoor-2.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/indoor/indoor-2use.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">360° Recessed Light Telescope</h3>
                                        <div class="product-model"><span>Model:</span> SL CR 202</div>
                                    </div>
                                </div>
                            </a>

                             <a href="indoor-product-detail-page.php?id=128" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/indoor/indoor-3.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/indoor/indoor-3.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">360° Recessed Light Telescope</h3>
                                        <div class="product-model"><span>Model:</span> SL CR 203</div>
                                    </div>
                                </div>
                            </a>

                             <a href="indoor-product-detail-page.php?id=129" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/indoor/indoor-4.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/indoor/indoor-4.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">360° Recessed Light Telescope</h3>
                                        <div class="product-model"><span>Model:</span> SL CR 204</div>
                                    </div>
                                </div>
                            </a>

                             <a href="indoor-product-detail-page.php?id=130" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/indoor/indoor-6.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/indoor/indoor-6.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">360° Recessed Light Telescope</h3>
                                        <div class="product-model"><span>Model:</span> SL CR 203-2</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=131" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/indoor/indoor-7.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/indoor/indoor-7.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">360° Recessed Light Telescope</h3>
                                        <div class="product-model"><span>Model:</span> SL CR 203-3</div>
                                    </div>
                                </div>
                            </a>
                            
                        </div>
                    </div>


                     <!-- Product Group 19 Led Profile/Flexible Neon Profile-->
                    <div class="product-group" id="Led-Profile-Flexible-Neon-Profile">
                        <h3 id="" class="product-group-title">Led Profile/Flexible Neon Profiles</h3>
                        <div class="products-container">

                        <a href="indoor-product-detail-page.php?id=141" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/indoor/pin-1.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/indoor/pin-1use.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Led Profile/Flexible Neon Profile</h3>
                                        <div class="product-model"><span>Model:</span> SL Curtain Grazer Profile</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=142" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/indoor/pin-2.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/indoor/pin-2use.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Led Profile/Flexible Neon Profile</h3>
                                        <div class="product-model"><span>Model:</span> SL 883 Bendable Profile</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=143" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/indoor/pin-3.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/indoor/pin-3use.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Led Profile/Flexible Neon Profile</h3>
                                        <div class="product-model"><span>Model:</span> SL 1409</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=144" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/indoor/pin-4.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/indoor/pin-4use.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Led Profile/Flexible Neon Profile</h3>
                                        <div class="product-model"><span>Model:</span> SL Y30 / SL Y60</div>
                                    </div>
                                </div>
                            </a>


                        </div>
                    </div>


 <!-- Product Group 29 Mr 16/Gu 10 Fixture-->
                    <div class="product-group" id="Mr-16-Gu-10-Fixture">
                        <h3  class="product-group-title">MR 16/Gu 10 Fixtures</h3>
                        <div class="products-container">

                         <a href="indoor-product-detail-page.php?id=135" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/indoor/indoor-8.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/indoor/indoor-8.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Mr 16/Gu 10 Fixture</h3>
                                        <div class="product-model"><span>Model:</span> SL MX 1889</div>
                                    </div>
                                </div>
                            </a>

                             <a href="indoor-product-detail-page.php?id=136" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/indoor/ind-9.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/indoor/ind-9.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Mr 16/Gu 10 Fixture</h3>
                                        <div class="product-model"><span>Model:</span> SL MX 1891</div>
                                    </div>
                                </div>
                            </a>

                             <a href="indoor-product-detail-page.php?id=137" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/indoor/ind-10.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/indoor/ind-10.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Mr 16/Gu 10 Fixture</h3>
                                        <div class="product-model"><span>Model:</span> SL MX 1991</div>
                                    </div>
                                </div>
                            </a>

                             <a href="indoor-product-detail-page.php?id=138" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/indoor/ind-11.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/indoor/ind-11.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Mr 16/Gu 10 Fixture</h3>
                                        <div class="product-model"><span>Model:</span> SL MX 1990</div>
                                    </div>
                                </div>
                            </a>

                             <a href="indoor-product-detail-page.php?id=139" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/indoor/ind-12.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/indoor/ind-12.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Mr 16/Gu 10 Fixture</h3>
                                        <div class="product-model"><span>Model:</span> SL MX 1892</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=140" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/indoor/ind-13.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/indoor/ind-13.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Mr 16/Gu 10 Fixture</h3>
                                        <div class="product-model"><span>Model:</span> SL MX 1890</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=132" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/indoor/ind-14.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/indoor/ind-14.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Mr 16/Gu 10 Fixture</h3>
                                        <div class="product-model"><span>Model:</span> SL PC 118-1</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=133" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/indoor/ind-15.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/indoor/ind-15.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Mr 16/Gu 10 Fixture</h3>
                                        <div class="product-model"><span>Model:</span> SL PC 118-2</div>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-product-detail-page.php?id=134" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/indoor/ind-16.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/indoor/ind-16.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Mr 16/Gu 10 Fixture</h3>
                                        <div class="product-model"><span>Model:</span> SL PC 118-3</div>
                                    </div>
                                </div>
                            </a>
                            
                        </div>
                    </div>


                  <!-- Product Group 28 Sl Led Panel Edge Lit - Smart Series-->
                    <div class="product-group" id="Sl-Led-Panel-Edge-Lit-Smart-Series">
                        <h3  class="product-group-title">Sl Led Panel Edge Lit - Smart Series</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=1" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sl-1.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sl-1.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Sl Led Panel Edge Lit - Smart Series</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>


<!-- Product Group 28 Sl Led Panel Back Lit - Smart Series-->
                    <div class="product-group" id="Sl-Led-Panel-Back-Lit-Smart-Series">
                        <h3  class="product-group-title">Sl Led Panel Back Lit - Smart Series</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=2" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sl-2.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sl-2.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Sl Led Panel Back Lit - Smart Series</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>
                       

<!-- Product Group 28 SL LED Panels Full Series-->
                    <div class="product-group" id="SL-LED-Panels-Full-Series">
                        <h3  class="product-group-title">SL LED Panels Full Series</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=3" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sl-3.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sl-3.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL LED Panels Full Series</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>

<!-- Product Group 28 Sl Led Panel Backlit-->
                    <div class="product-group" id="Sl-Led-Panel-Backlit">
                        <h3  class="product-group-title">Sl Led Panel Backlit</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=4" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sl-5.webp"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sl-5.webp"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Sl Led Panel Backlit</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>


<!-- Product Group 28 SL LED Slim Panel - Trimmy Series-->
                    <div class="product-group" id="SL-LED-Slim-Panel-Trimmy-Series">
                        <h3  class="product-group-title">SL LED Slim Panel - Trimmy Series</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=5" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sl-6.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sl-6.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL LED Slim Panel - Trimmy Series</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>

                    <!-- Product Group 28 SL LED Remote Panel Edge Lit-->
                    <div class="product-group" id="SL-LED-Remote-Panel-Edge-Lit">
                        <h3  class="product-group-title">SL LED Remote Panel Edge Lit</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=6" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sl-7.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sl-7.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL LED Remote Panel Edge Lit</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>

             <!-- Product Group 28 SL SL LED Panel with Built-in Driver - Prime Series-->
                    <div class="product-group" id="SL-LED-Panel-With-Built-In-Driver-Prime-Series">
                        <h3  class="product-group-title">SL LED Panel With Built-In Driver - Prime Series</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=7" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sl-9.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sl-9.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL LED Panel With Built-In Driver - Prime Series</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>

               
             <!-- Product Group 28 SL LED Down Lights - Galaxy Series-->
                    <div class="product-group" id="SL-LED-Down-Lights-Galaxy-Series">
                        <h3  class="product-group-title">SL LED Down Lights - Galaxy Series</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=8" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sl-10.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sl-10.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL LED Down Lights - Galaxy Series</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>       


                    <!-- Product Group 28 SL Down Lights - Crystal Series-->
                    <div class="product-group" id="SL-Down-Lights-Crystal-Series">
                        <h3  class="product-group-title">SL Down Lights - Crystal Series</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=9" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sl-12.webp"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sl-12.webp"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Down Lights - Crystal Series</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>  


                    <!-- Product Group 10 SF Slim Surface Panel - Solitaire Series-->
                    <div class="product-group" id="SF-Slim-Surface-Panel-Solitaire-Series">
                        <h3  class="product-group-title">SF Slim Surface Panel - Solitaire Series</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=10" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sl-14.webp"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sl-14.webp"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SF Slim Surface Panel - Solitaire Series</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>  


                    <!-- Product Group 11 SL Surface Panel-->
                    <div class="product-group" id="SL-Surface-Panel">
                        <h3  class="product-group-title">SL Surface Panel</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=11" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sl-15.webp"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sl-15.webp"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Surface Panel</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>  


                    <!-- Product Group 12 SL COB Down Lights - Bloom Series-->
                    <div class="product-group" id="SL-COB-Down-Lights-Bloom-Series">
                        <h3  class="product-group-title">SL COB Down Lights - Bloom Series</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=12" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sl-16.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sl-16.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL COB Down Lights - Bloom Series</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div> 

                    
                    <!-- Product Group 13 SL COB Spotlight - Coral Series-->
                    <div class="product-group" id="SL-COB-Spotlight-Coral-Series">
                        <h3  class="product-group-title">SL COB Spotlight - Coral Series</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=13" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sl-17.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sl-17.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL COB Spotlight - Coral Series</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div> 

                    <!-- Product Group 14 SL COB Movable SF Spotlight - Coral Series-->
                    <div class="product-group" id="SL-COB-Movable-SF-Spotlight-Coral-Series">
                        <h3  class="product-group-title">SL COB Movable SF Spotlight - Coral Series</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=14" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sl-18.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sl-18.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL COB Movable SF Spotlight - Coral Series</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div> 

                    
                    <!-- Product Group 15 SL COB Laser Blade Spotlight - Matrix Series-->
                    <div class="product-group" id="SL-COB-Laser-Blade-Spotlight-Matrix-Series">
                        <h3  class="product-group-title">SL COB Laser Blade Spotlight - Matrix Series</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=15" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sl-19.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sl-19.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL COB Laser Blade Spotlight - Matrix Series</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div> 


                    <!-- Product Group 16 SL COB Spotlight - Matrix Series-->
                    <div class="product-group" id="SL-COB-Spotlight-Matrix-Series">
                        <h3  class="product-group-title">SL COB Spotlight - Matrix Series</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=16" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sl-20.jpeg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sl-20.jpeg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL COB Spotlight - Matrix Series</h3>
                                    </div>
                                </div>
                            </a>  
                            
                              <a href="indoor-p.php?id=18" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sl-22.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sl-22.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL COB Spotlight - Matrix Series</h3>
                                    </div>
                                </div>
                            </a> 

                            <a href="indoor-p.php?id=19" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sl-23-1.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sl-23-1.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL COB Spotlight - Matrix Series</h3>
                                    </div>
                                </div>
                            </a> 
                            
                        </div>
                    </div>

                    <!-- Product Group 17 SL COB Zoom Spotlight - Matrix Series-->
                    <div class="product-group" id="SL-COB-Zoom-Spotlight-Matrix-Series">
                        <h3  class="product-group-title">SL COB Zoom Spotlight - Matrix Series</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=17" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sl-21.webp"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sl-21.webp"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL COB Zoom Spotlight - Matrix Series</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>

                    <!-- Product Group 20 SL COB Zoom Spotlight - Matrix Series-->
                    <div class="product-group" id="SL-COB-Spotlight-Rings-Matrix-Series">
                        <h3  class="product-group-title">SL COB Spotlight Rings - Matrix Series</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=20" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sl-24.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sl-24.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL COB Spotlight Rings - Matrix Series</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>

                    <!-- Product Group 21 SL Trimless COB Spotlight - Matrix Series-->
                    <div class="product-group" id="SL-Trimless-COB-Spotlight-Matrix-Series">
                        <h3  class="product-group-title">SL Trimless COB Spotlight - Matrix Series</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=21" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sl-25.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sl-25.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Trimless COB Spotlight - Matrix Series</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>

                     <!-- Product Group 22 SL Narrow Trim COB Spotlight - Matrix Series-->
                    <div class="product-group" id="SL-Narrow-Trim-COB-Spotlight-Matrix-Series">
                        <h3  class="product-group-title">SL Narrow Trim COB Spotlight - Matrix Series</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=22" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sl-26.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sl-26.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Narrow Trim COB Spotlight - Matrix Series</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>

                     <!-- Product Group 23 SL COB Spotlight Module Rings - Beyond Series-->
                    <div class="product-group" id="SL-COB-Spotlight-Module-Rings-Beyond-Series">
                        <h3  class="product-group-title">SL COB Spotlight Module Rings - Beyond Series</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=23" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sl-27.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sl-27.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL COB Spotlight Module Rings - Beyond Series</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>

                     <!-- Product Group 24 SL COB Spotlight Modules - Beyond Series-->
                    <div class="product-group" id="SL-COB-Spotlight-Modules-Beyond-Series">
                        <h3  class="product-group-title">SL COB Spotlight Modules - Beyond Series</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=24" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sl-29.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sl-29.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL COB Spotlight Modules - Beyond Series</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>


                    <!-- Product Group 25 SL Anti-Glare Surface Downlight - Beyond Series-->
                    <div class="product-group" id="SL-Anti-Glare-Surface-Downlight-Beyond-Series">
                        <h3  class="product-group-title">SL Anti-Glare Surface Downlight - Beyond Series</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=25" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sl-30.webp"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sl-30.webp"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Anti-Glare Surface Downlight - Beyond Series</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>










                     <!-- Product Group 25 SL COB Directional Surface Light - Beyond Series-->
                    <div class="product-group" id="SL-COB-Directional-Surface-Light-Beyond-Series">
                        <h3  class="product-group-title">SL COB Pendent Light - Beyond Series</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=26" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-73.webp"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-73.webp"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL COB Directional Surface Light - Beyond Series</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>

                    <!-- Product Group 25 SL COB Pendent Light - Beyond Series-->
                    <div class="product-group" id="SL-COB-Pendent-Light-Beyond-Series">
                        <h3  class="product-group-title">SL COB Pendent Light - Beyond Series</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=27" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-72.webp"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-72.webp"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL COB Pendent Light - Beyond Series</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>

                     <!-- Product Group 25 SL COB Reading Lamp-->
                    <div class="product-group" id="SL-COB-Reading-Lamp">
                        <h3  class="product-group-title">SL COB Reading Lamp</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=28" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-71.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-71.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL COB Reading Lamp</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>

                    <!-- Product Group 25 SL COB Telescopic Spotlight - Beyond Series-->
                    <div class="product-group" id="SL-COB-Telescopic-Spotlight-Beyond-Series">
                        <h3  class="product-group-title">SL COB Telescopic Spotlight - Beyond Series</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=29" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-69.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-69.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL COB Telescopic Spotlight - Beyond Series</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>

                    <!-- Product Group 25 SL COB Spotlight Modules - Beyond Series-->
                    <div class="product-group" id="SL-COB-Spotlight-Modules-Beyond-Series">
                        <h3  class="product-group-title">SL COB Spotlight Modules - Beyond Series</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=30" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-68.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-68.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL COB Spotlight Modules - Beyond Series</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>

                     <!-- Product Group 25 SL COB Spotlight Module Rings - Beyond Series-->
                    <div class="product-group" id="SL-COB-Spotlight-Module-Rings-Beyon- Series">
                        <h3  class="product-group-title">SL COB Spotlight Module Rings - Beyond Series</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=31" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-67.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-67.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL COB Spotlight Module Rings - Beyond Series</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>

                    <!-- Product Group 25 SL-X Series COB-->
                    <div class="product-group" id="SL-X-Series-COB">
                        <h3  class="product-group-title">SL-X Series COB</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=32" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-66.webp"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-66.webp"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL-X Series COB</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>


                    <!-- Product Group 25 SL COB Spotlight Smart Series-->
                    <div class="product-group" id="SL-COB-Spotlight-Smart-Series">
                        <h3  class="product-group-title">SL COB Spotlight Smart Series</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=33" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-65.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-65.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL COB Spotlight Smart Series</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>

                    <!-- Product Group 25 SL Zoom COB Spotlight-->
                    <div class="product-group" id="SL-Zoom-COB-Spotlight">
                        <h3  class="product-group-title">SL Zoom COB Spotlight</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=34" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-63.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-63.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Zoom COB Spotlight</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>


                    <!-- Product Group 25 SL Degree Adjust Spotlight-->
                    <div class="product-group" id="SL-Degree-Adjust-Spotlight">
                        <h3  class="product-group-title">SL Degree Adjust Spotlight</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=35" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-64.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-64.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Degree Adjust Spotlight</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>


                    <!-- Product Group 25 SL LED Tube Light - Neon Series-->
                    <div class="product-group" id="SL-LED-Tube-Light-Neon-Series">
                        <h3  class="product-group-title">SL LED Tube Light - Neon Series</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=36" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-62.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-62.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL LED Tube Light - Neon Series</h3>
                                    </div>
                                </div>
                            </a>  
                            
                            <a href="indoor-p.php?id=106" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sl1616nbk.jpeg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sl1616nbk_2.jpeg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">LED NEON LIGHT</h3>
                                    </div>
                                </div>
                            </a> 
                            
                        </div>
                    </div>
                    
                   

                    <!-- Product Group 25 SL-X Series Wall Lights-->
                    <div class="product-group" id="SL-X-Series-Wall-Lights">
                        <h3  class="product-group-title">SL-X Series Wall Lights</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=37" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-60.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-60.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL-X Series Wall Lights</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>

                    <!-- Product Group 25 SL Kitchen & Cabinet Lights-->
                    <div class="product-group" id="SL-Kitchen-Cabinet-Lights">
                        <h3  class="product-group-title">SL Kitchen & Cabinet Lights</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=41" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-51.jpeg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-51.jpeg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Kitchen & Cabinet Lights</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>

                    <!-- Product Group 25 SL Basin Mirror Lights-->
                    <div class="product-group" id="Sl-Basin-Mirror-Lights">
                        <h3  class="product-group-title">SL Basin Mirror Lights</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=100" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-100.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-100.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Basin Mirror Lights</h3>
                                    </div>
                                </div>
                            </a>  
                            
                              <a href="indoor-p.php?id=101" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-101.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-101.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Basin Mirror Lights</h3>
                                    </div>
                                </div>
                            </a> 

                              <a href="indoor-p.php?id=102" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-102.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-102.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Basin Mirror Lights</h3>
                                    </div>
                                </div>
                            </a> 

                            <a href="indoor-p.php?id=103" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-103.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-103.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Basin Mirror Lights</h3>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-p.php?id=104" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-104.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-104.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Basin Mirror Lights</h3>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-p.php?id=105" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-105.png"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-105.png"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Basin Mirror Lights</h3>
                                    </div>
                                </div>
                            </a>
                            
                        </div>
                    </div>
                    
                    <div class="product-group" id="Linear-Led-Pendant-Light">
                        <h3  class="product-group-title">Linear Led Pendant Light</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=107" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/sl-3870lb.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/sl-3870lb_2.jpg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Linear Led Pendant Light</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>
                    
                    <div class="product-group" id="Commercial-Premium-Quality-Tiltable-COB-Down-Light">
                        <h3  class="product-group-title">Commercial Premium Quality Tiltable COB Down Light</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=108" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/slmx-4444.jpeg"
                                            alt="Indoor & Outdoor Logo Projector Light" class="default-image">
                                        <img src="assets/img/zz-indoor/slmx-4444_2.jpeg"
                                            alt="Indoor & Outdoor Logo Projector Light USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Commercial Premium Quality Tiltable COB Down Light</h3>
                                    </div>
                                </div>
                            </a>                             
                            
                        </div>
                    </div>
                    

                    <div class="product-group" id="pin-hole-cob-lights">
                        <h3 class="product-group-title">Pin Hole COB Lights</h3>
                    
                        <div class="products-container">
                    
                            <a href="indoor-p.php?id=109" class="product-card-link">
                                <div class="product-card" data-price="1250">
                    
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/SL-MX -1368.jpeg"
                                            alt="Pin Hole COB Light"
                                            class="default-image">
                    
                                        <img src="assets/img/zz-indoor/SL-MX -1368_2.jpeg"
                                            alt="Pin Hole COB Light - View"
                                            class="hover-image">
                                    </div>
                    
                                    <div class="product-info">
                                        <h3 class="product-name">
                                            Pin Hole COB Lights
                                        </h3>
                                    </div>
                    
                                </div>
                            </a>
                    
                        </div>
                    </div>

                    <div class="product-group" id="trimless-cob-anti-glare">
                        <h3 class="product-group-title">Trimless COB Deep Recessed Anti-Glare Light</h3>
                    
                        <div class="products-container">
                    
                            <a href="indoor-p.php?id=110" class="product-card-link">
                                <div class="product-card" data-price="2600">
                    
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/slmx-1320.jpeg"
                                            alt="Trimless COB Anti Glare Light"
                                            class="default-image">
                                            <img src="assets/img/zz-indoor/slmx-1320.jpeg"
                                            alt="Trimless COB Anti Glare Light"
                                            class="default-image">
                    
                                       
                                    </div>
                    
                                    <div class="product-info">
                                        <h3 class="product-name">
                                            Trimless COB Deep Recessed Anti-Glare Light
                                        </h3>
                                    </div>
                    
                                </div>
                            </a>
                    
                        </div>
                    </div>
                    
                    <div class="product-group" id="mini-series-small-dia-deep-recessed-cob">
                        <h3 class="product-group-title">Mini Series Small Dia Deep Recessed Celing Secure COB Down Lights</h3>
                    
                        <div class="products-container">
                    
                            <!-- Product 111 -->
                            <a href="indoor-p.php?id=111" class="product-card-link">
                                <div class="product-card" data-price="1300">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/slmx-1398m.jpeg"
                                            alt="SL MX 1398M COB Down Light" class="default-image">
                                        <img src="assets/img/zz-indoor/slmx-1398m.jpeg"
                                            alt="SL MX 1398M COB Down Light" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL MX 1398M</h3>
                                    </div>
                                </div>
                            </a>
                    
                            <!-- Product 112 -->
                            <a href="indoor-p.php?id=112" class="product-card-link">
                                <div class="product-card" data-price="1700">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/slmx-1399m.jpeg"
                                            alt="SL MX 1399M COB Down Light" class="default-image">
                                        <img src="assets/img/zz-indoor/slmx-1399m.jpeg"
                                            alt="SL MX 1399M COB Down Light" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL MX 1399M</h3>
                                    </div>
                                </div>
                            </a>
                    
                            <!-- Product 113 -->
                            <a href="indoor-p.php?id=113" class="product-card-link">
                                <div class="product-card" data-price="900">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/slmx-1366.jpeg"
                                            alt="SL MX 1366 COB Down Light" class="default-image">
                                        <img src="assets/img/zz-indoor/slmx-1366.jpeg"
                                            alt="SL MX 1366 COB Down Light" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL MX 1366</h3>
                                    </div>
                                </div>
                            </a>
                    
                            <!-- Product 114 -->
                            <a href="indoor-p.php?id=114" class="product-card-link">
                                <div class="product-card" data-price="1200">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/slmx-1367.jpeg"
                                            alt="SL MX 1367 COB Down Light" class="default-image">
                                        <img src="assets/img/zz-indoor/slmx-1367.jpeg"
                                            alt="SL MX 1367 COB Down Light" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL MX 1367</h3>
                                    </div>
                                </div>
                            </a>
                    
                            <!-- Product 115 -->
                            <a href="indoor-p.php?id=115" class="product-card-link">
                                <div class="product-card" data-price="1000">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/slmx-1370.jpeg"
                                            alt="SL MX 1370 COB Down Light" class="default-image">
                                        <img src="assets/img/zz-indoor/slmx-1370.jpeg"
                                            alt="SL MX 1370 COB Down Light" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL MX 1370</h3>
                                    </div>
                                </div>
                            </a>
                    
                            <!-- Product 116 -->
                            <a href="indoor-p.php?id=116" class="product-card-link">
                                <div class="product-card" data-price="1400">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/slmx-1371.jpeg"
                                            alt="SL MX 1371 COB Down Light" class="default-image">
                                        <img src="assets/img/zz-indoor/slmx-1371.jpeg"
                                            alt="SL MX 1371 COB Down Light" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL MX 1371</h3>
                                    </div>
                                </div>
                            </a>
                    
                        </div>
                    </div>
                    
                    <div class="product-group" id="adoptable-cob-frame">
                        <h3 class="product-group-title">
                            Adoptable Ceiling Secure COB Down Light Frame (MR-16 / GU-10 / COB Module)
                        </h3>
                    
                        <div class="products-container">
                    
                            <!-- Product 120 -->
                            <a href="indoor-p.php?id=120" class="product-card-link">
                                <div class="product-card" data-price="900">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/slmx-123-2white.jpeg"
                                            alt="SL MX 123-2 COB Frame" class="default-image">
                                        <img src="assets/img/zz-indoor/slmx-123-2black.jpeg"
                                            alt="SL MX 123-2 COB Frame" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL MX 123-2</h3>
                                    </div>
                                </div>
                            </a>
                    
                            <!-- Product 121 -->
                            <a href="indoor-p.php?id=121" class="product-card-link">
                                <div class="product-card" data-price="400">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/slmx-125-1black.jpeg"
                                            alt="SL MX 125-1 COB Frame" class="default-image">
                                        <img src="assets/img/zz-indoor/slmx-125-1white.jpeg"
                                            alt="SL MX 125-1 COB Frame" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL MX 125-1</h3>
                                    </div>
                                </div>
                            </a>
                    
                            <!-- Product 122 -->
                            <a href="indoor-p.php?id=122" class="product-card-link">
                                <div class="product-card" data-price="800">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/slmx-125-2white.jpeg"
                                            alt="SL MX 125-2 COB Frame" class="default-image">
                                        <img src="assets/img/zz-indoor/slmx-125-2black.jpeg"
                                            alt="SL MX 125-2 COB Frame" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL MX 125-2</h3>
                                    </div>
                                </div>
                            </a>
                    
                        </div>
                    </div>
                    
                    <div class="product-group" id="surface-cob-cylinder-light">
                        <h3 class="product-group-title">Surface COB Cylinder Light</h3>
                    
                        <div class="products-container">
                    
                            <!-- Product 130 -->
                            <a href="indoor-p.php?id=130" class="product-card-link">
                                <div class="product-card" data-price="1200">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/slbysf1312..jpeg"
                                            alt="SL BY SF 1370 Cylinder Light" class="default-image">
                                        <img src="assets/img/zz-indoor/slbysf1318.jpeg"
                                            alt="SL BY SF 1370 Cylinder Light" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL BY SF 1370</h3>
                                    </div>
                                </div>
                            </a>
                    
                            <!-- Product 131 -->
                            <a href="indoor-p.php?id=131" class="product-card-link">
                                <div class="product-card" data-price="1600">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/slbysf1312..jpeg"
                                            alt="SL BY SF 1312 Cylinder Light" class="default-image">
                                        <img src="assets/img/zz-indoor/slbysf1318.jpeg"
                                            alt="SL BY SF 1312 Cylinder Light" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL BY SF 1312</h3>
                                    </div>
                                </div>
                            </a>
                    
                            <!-- Product 132 -->
                            <a href="indoor-p.php?id=132" class="product-card-link">
                                <div class="product-card" data-price="2000">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/slbysf1318.jpeg"
                                            alt="SL BY SF 1318 Cylinder Light" class="default-image">
                                        <img src="assets/img/zz-indoor/slbysf1318.jpeg"
                                            alt="SL BY SF 1318 Cylinder Light" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL BY SF 1318</h3>
                                    </div>
                                </div>
                            </a>
                    
                        </div>
                    </div>



                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

     <script>
        // Filter functionality
        document.addEventListener('DOMContentLoaded', function() {
            const filterLinks = document.querySelectorAll('.filter-link');
            const allProductsLink = document.getElementById('all-products-link');
            const productGroups = document.querySelectorAll('.product-group');
            const backToAll = document.getElementById('backToAll');
            const backButton = document.getElementById('backButton');
            
            // Show all products initially
            function showAllProducts() {
                productGroups.forEach(group => {
                    group.classList.remove('hidden');
                });
                backToAll.style.display = 'none';
                
                // Remove active class from all filter links
                filterLinks.forEach(link => {
                    link.classList.remove('active');
                });
                
                // Add active class to All Products link
                allProductsLink.classList.add('active');
            }
            
            // Show only specific product group
            function showProductGroup(groupId) {
                productGroups.forEach(group => {
                    if (group.id === groupId) {
                        group.classList.remove('hidden');
                    } else {
                        group.classList.add('hidden');
                    }
                });
                backToAll.style.display = 'block';
                
                // Scroll to the top of the products grid
                document.querySelector('.products-grid').scrollIntoView({ behavior: 'smooth' });
            }
            
            // Add click event listeners to filter links
            filterLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Skip if this is the All Products link
                    if (this === allProductsLink) {
                        showAllProducts();
                        return;
                    }
                    
                    // Get the target product group ID from href
                    const targetId = this.getAttribute('href').substring(1);
                    
                    // Remove active class from all links
                    filterLinks.forEach(l => l.classList.remove('active'));
                    
                    // Add active class to clicked link
                    this.classList.add('active');
                    
                    // Show only the selected product group
                    showProductGroup(targetId);
                });
            });
            
            // Back button functionality
            backButton.addEventListener('click', function() {
                showAllProducts();
            });
            
            // Initialize Swiper
            var myswiper4 = new Swiper(".myswiper4", {
                spaceBetween: 30,
                effect: "fade",
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            });

            // Sort functionality (existing code)
            document.getElementById('sort').addEventListener('change', function () {
                const sortValue = this.value;

                document.querySelectorAll('.product-group').forEach(group => {
                    if (!group.classList.contains('hidden')) {
                        const products = Array.from(group.querySelectorAll('.product-card'));

                        products.sort((a, b) => {
                            const priceA = parseFloat(a.getAttribute('data-price'));
                            const priceB = parseFloat(b.getAttribute('data-price'));

                            if (sortValue === 'price-low') {
                                return priceA - priceB;
                            } else if (sortValue === 'price-high') {
                                return priceB - priceA;
                            } else {
                                return 0;
                            }
                        });

                        const container = group.querySelector('.products-container');
                        products.forEach(product => {
                            container.appendChild(product);
                        });
                    }
                });
            });
        });
    </script>

    <!-- Mobile view script -->
 <!-- ===== JS ===== -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const btn = document.getElementById("mobileDropdownBtn");
    const content = document.getElementById("mobileDropdownContent");

    btn.addEventListener("click", () => {
      content.classList.toggle("active");
      btn.querySelector("i").classList.toggle("fa-chevron-down");
      btn.querySelector("i").classList.toggle("fa-chevron-up");
    });
  });
</script>

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

    <script src="assets/JS/index.js"></script>
</body>

</html>


