<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LED SMPS | Reliable Power Supply Solutions by Sunny Light</title>
<meta name="description" content="High-performance SMPS power supplies for LED lighting applications. Durable, efficient, and designed for consistent output and long life.">
<meta name="keywords" content="LED SMPS, power supply, LED power supply, SMPS driver, constant voltage power supply, 12V SMPS, 24V SMPS, LED transformer, industrial SMPS, lighting power supply">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/CSS/main.css">
    <link rel="stylesheet" href="assets/CSS/outdoor-lights-productpage.css">
    <link rel="stylesheet" href="assets/CSS/smps.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Bootstrap JS -->
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

    <!-- production category section -->
    <section class="productpage-category mt-4">
        <div class="page-width main-productcategory">
            <!-- left part -->
            <div class="mysidebar">
                <div class="mysidebar-section">
                    <div class="mysidebar-header">
                        <h4>SMPS</h4>
                               <button class="dropdown-toggle" id="mobileDropdownBtn">
        <i class="fa fa-chevron-down" ></i>
      </button>
                    </div>
                    <div class="mysidebar-content" id="mobileDropdownContent">
                        <ul class="mysidebar-list">
                             <li><a href="#" class="filter-link all-products-link active" id="all-products-link">All Products</a></li>
                            <li><a href="#Super-Slim-SMPS" class="filter-link" data-category="step-light">Super Slim
                                    SMPS</a></li>
                            <li><a href="#SMPS-12V-DC-Mini-Series(Low Height)" class="filter-link"
                                    data-category="wall-light">SMPS 12V DC-Mini Series(Low Height)</a></li>
                            <li><a href="#SMPS-12V-DC" class="filter-link" data-category="mini-wall">SMPS 12V DC</a>
                            </li>
                            <li><a href="#SMPS-5V-DC" class="filter-link" data-category="adjustable-wall">SMPS 5V DC</a>
                            </li>
                            <li><a href="#SMPS-24V-DC" class="filter-link" data-category="garden-spike">SMPS 24V DC</a>
                            </li>
                            <li><a href="#SMPS-Waterproof-24V-DC" class="filter-link" data-category="pathway">SMPS
                                    Waterproof 24V DC</a></li>
                            <li><a href="#SMPS-Rainproof-12V-DC" class="filter-link" data-category="burial">SMPS
                                    Rainproof 12V DC</a></li>
                            <li><a href="#SMPS-Waterproof-12V-DC" class="filter-link" data-category="burial">SMPS
                                    Waterproof 12V DC</a></li>
                            <li><a href="#SMPS-Ultra-Slim-Phase-Cut-Analogue-Dimmer-12V-DC" class="filter-link"
                                    data-category="burial">SMPS Ultra Slim Phase Cut+Analogue Dimmer 12V DC</a></li>
                            <li><a href="#SMPS-Ultra-Slim-Phase-Cut-Analogue-Dimmer-24V-DC" class="filter-link"
                                    data-category="burial">SMPS Ultra Slim Phase Cut+Analogue Dimmer 24V DC</a></li>

                           <li><a href="#SL-Indoor-SMPS" class="filter-link"
                                    data-category="burial">SL Indoor SMPS</a></li>

                                     <li><a href="#SL-IP67-Outdoor-SMPS" class="filter-link"
                                    data-category="burial">SL IP67 Outdoor SMPS</a></li>
                                    
                                    
                        </ul>
                    </div>
                </div>
            </div>

            <!-- right product grid -->
            <div class="products-grid">

              <!-- Back to All Products Button -->
                <div class="back-to-all" id="backToAll">
                    <button id="backButton" onclick="resetFilter()">
                        <i class="fas fa-arrow-left"></i> Back to All Products
                    </button>
                </div>

                <div class="products-container">
                    <!-- Product Group 1 -->

                    <div class="product-group" id="Super-Slim-SMPS">
                        <h3 id="" class="product-group-title">Super Slim SMPS</h3>
                        <div class="smps-product-wrapper">
                            <!-- Left: Product Image -->
                            <div class="product-left">
                                <div class="smps-product-image">
                                    <img src="assets/img/smps-img/slim-smps.png" alt="super Slim SMPS">
                                </div>
                                <!-- <h3 class="product-title">Super Slim SMPS</h3> -->
                            </div>

                            <!-- Right: Specifications Table -->
                            <div class="product-right">
                                <table class="product-table">
                                    <thead>
                                        <tr>
                                            <th>Product Code</th>
                                            <th>Input Voltage</th>
                                            <th>Output Voltage</th>
                                            <th>Size</th>
                                            <th>Power</th>
                                            <th>IP Rating</th>
                                            <th>Guarantee</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>SL 12-24SS</td>
                                            <td>110-270V AC</td>
                                            <td>12V DC</td>
                                            <td>192x18x18 mm</td>
                                            <td>2A (24W)</td>
                                            <td>IP-20</td>
                                            <td>1 Year</td>
                                        </tr>
                                        <tr>
                                            <td>SL 12-36SS</td>
                                            <td>110-270V AC</td>
                                            <td>12V DC</td>
                                            <td>312x18x18 mm</td>
                                            <td>3A (36W)</td>
                                            <td>IP-20</td>
                                            <td>1 Year</td>
                                        </tr>
                                        <tr>
                                            <td>SL 12-60SS</td>
                                            <td>110-270V AC</td>
                                            <td>12V DC</td>
                                            <td>312x18x18 mm</td>
                                            <td>5A (60W)</td>
                                            <td>IP-20</td>
                                            <td>1 Year</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Product Group 2 -->

                    <div class="product-group" id="SMPS-12V-DC-Mini-Series(Low Height)">
                        <h3 id="" class="product-group-title">SMPS 12V DC-Mini Series(Low Height)</h3>
                        <div class="smps-product-wrapper">
                            <!-- Left: Product Image -->
                            <div class="product-left">
                                <div class="smps-product-image">
                                    <img src="assets/img/smps-img/smps-mini-series-low-light.jpg"
                                        alt="SMPS 12V DC-Mini Series(Low Height)">
                                </div>
                                <!-- <h3 class="product-title">SMPS 12V DC-Mini Series (Low Height)</h3> -->
                            </div>

                            <!-- Right: Specifications Table -->
                            <div class="product-right">
                                <table class="product-table">
                                    <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th>Input Voltage</th>
                                            <th>Output Voltage</th>
                                            <th>Size</th>
                                            <th>Power</th>
                                            <th>IP Rating</th>
                                            <th>Guarantee</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>SL-1201MN</td>
                                            <td>90-270V AC</td>
                                            <td>12V DC</td>
                                            <td>91x40x25 mm</td>
                                            <td>1.5 Amp (15W)</td>
                                            <td>IP-20</td>
                                            <td>2 Year PTP</td>
                                        </tr>
                                        <tr>
                                            <td>SL-1202MN</td>
                                            <td>90-270V AC</td>
                                            <td>12V DC</td>
                                            <td>109x40x25 mm</td>
                                            <td>2 Amp (25W)</td>
                                            <td>IP-20</td>
                                            <td>2 Year PTP</td>
                                        </tr>
                                        <tr>
                                            <td>SL-1203MN</td>
                                            <td>90-270V AC</td>
                                            <td>12V DC</td>
                                            <td>101x38x23 mm</td>
                                            <td>3 Amp (36W)</td>
                                            <td>IP-20</td>
                                            <td>2 Year PTP</td>
                                        </tr>
                                        <tr>
                                            <td>SL-1205MN</td>
                                            <td>90-270V AC</td>
                                            <td>12V DC</td>
                                            <td>142x36x23 mm</td>
                                            <td>5 Amp (60W)</td>
                                            <td>IP-20</td>
                                            <td>2 Year PTP</td>
                                        </tr>
                                        <tr>
                                            <td>SL-1208MN</td>
                                            <td>90-270V AC</td>
                                            <td>12V DC</td>
                                            <td>155x36x28 mm</td>
                                            <td>8 Amp (96W)</td>
                                            <td>IP-20</td>
                                            <td>2 Year PTP</td>
                                        </tr>
                                        <tr>
                                            <td>SL-1210MN</td>
                                            <td>90-270V AC</td>
                                            <td>12V DC</td>
                                            <td>155x36x28 mm</td>
                                            <td>10 Amp (120W)</td>
                                            <td>IP-20</td>
                                            <td>2 Year PTP</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>

                    <!-- Product Group 3 -->

                    <div class="product-group" id="SMPS-12V-DC">
                        <h3 class="product-group-title">SMPS 12V DC</h3>
                        <div class="smps-product-wrapper">
                            <div class="product-left">
                                <div class="smps-product-image">

                                    <img src="assets/img/smps-img/smps-12v-dc.jpg" alt="SMPS 12V DC">

                                </div>
                                <!-- <h3 class="product-title">SMPS 12V DC</h3> -->
                            </div>
                            <div class="product-right">
                               <table class="product-table">
  <thead>
    <tr>
      <th>Code</th>
      <th>Input Voltage</th>
      <th>Output Voltage</th>
      <th>Size</th>
      <th>Power</th>
      <th>IP Rating</th>
      <th>Guarantee</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>SL-1201</td>
      <td>90-270V AC</td>
      <td>12V DC</td>
      <td>92x52x30 mm</td>
      <td>1.5 Amp (18W)</td>
      <td>IP-20</td>
      <td>2 Year PTP</td>
    </tr>
    <tr>
      <td>SL-1202 Mini</td>
      <td>90-270V AC</td>
      <td>12V DC</td>
      <td>95x38x30 mm</td>
      <td>2 Amp (24W)</td>
      <td>IP-20</td>
      <td>2 Year PTP</td>
    </tr>
    <tr>
      <td>SL-1202M</td>
      <td>90-270V AC</td>
      <td>12V DC</td>
      <td>115x52x35 mm</td>
      <td>2 Amp (25W)</td>
      <td>IP-20</td>
      <td>2 Year PTP</td>
    </tr>
    <tr>
      <td>SL-1203US</td>
      <td>90-270V AC</td>
      <td>12V DC</td>
      <td>150x45x38 mm</td>
      <td>3 Amp (36W)</td>
      <td>IP-20</td>
      <td>2 Year PTP</td>
    </tr>
    <tr>
      <td>SL-1204M</td>
      <td>90-270V AC</td>
      <td>12V DC</td>
      <td>110x78x41 mm</td>
      <td>4 Amp (48W)</td>
      <td>IP-20</td>
      <td>2 Year PTP</td>
    </tr>
    <tr>
      <td>SL-1205M</td>
      <td>90-270V AC</td>
      <td>12V DC</td>
      <td>154x53x36 mm</td>
      <td>5 Amp (60W)</td>
      <td>IP-20</td>
      <td>2 Year PTP</td>
    </tr>
    <tr>
      <td>SL-1206US</td>
      <td>90-270V AC</td>
      <td>12V DC</td>
      <td>170x45x35 mm</td>
      <td>6 Amp (72W)</td>
      <td>IP-20</td>
      <td>2 Year PTP</td>
    </tr>
    <tr>
      <td>SL-1208M</td>
      <td>90-270V AC</td>
      <td>12V DC</td>
      <td>206x95x61 mm</td>
      <td>8 Amp (96W)</td>
      <td>IP-20</td>
      <td>2 Year PTP</td>
    </tr>
    <tr>
      <td>SL-1210 Mini</td>
      <td>90-270V AC</td>
      <td>12V DC</td>
      <td>140x60x45 mm</td>
      <td>10 Amp (120W)</td>
      <td>IP-20</td>
      <td>2 Year PTP</td>
    </tr>
    <tr>
      <td>SL-1210HD</td>
      <td>90-270V AC</td>
      <td>12V DC</td>
      <td>206x95x61 mm</td>
      <td>10 Amp (120W)</td>
      <td>IP-20</td>
      <td>2 Year PTP</td>
    </tr>
    <tr>
      <td>SL-1212M</td>
      <td>90-270V AC</td>
      <td>12V DC</td>
      <td>165x90x40 mm</td>
      <td>12 Amp (150W)</td>
      <td>IP-20</td>
      <td>2 Year PTP</td>
    </tr>
    <tr>
      <td>SL-1215M</td>
      <td>90-270V AC</td>
      <td>12V DC</td>
      <td>130x100x40 mm</td>
      <td>15 Amp (180W)</td>
      <td>IP-20</td>
      <td>2 Year PTP</td>
    </tr>
    <tr>
      <td>SL-1220M</td>
      <td>90-270V AC</td>
      <td>12V DC</td>
      <td>190x90x45 mm</td>
      <td>20 Amp (240W)</td>
      <td>IP-20</td>
      <td>2 Year PTP</td>
    </tr>
    <tr>
      <td>SL-1230M</td>
      <td>90-270V AC</td>
      <td>12V DC</td>
      <td>190x90x45 mm</td>
      <td>30 Amp (360W)</td>
      <td>IP-20</td>
      <td>2 Year PTP</td>
    </tr>
  </tbody>
</table>

                            </div>
                        </div>
                    </div>
                    <!-- Product Group 4 -->

                    <div class="product-group" id="SMPS-5V-DC">
                        <h3 class="product-group-title">SMPS 5V DC</h3>
                        <div class="smps-product-wrapper">
                            <div class="product-left">
                                <div class="smps-product-image">
                                    <img src="assets/img/smps-img/smps-5v-dc.jpg" alt="SMPS 5V DC">
                                </div>
                                <!-- <h3 class="product-title">SMPS 5V DC</h3> -->
                            </div>
                            <div class="product-right">
                               <table class="product-table">
  <thead>
    <tr>
      <th>Code</th>
      <th>Input Voltage</th>
      <th>Output Voltage</th>
      <th>Size</th>
      <th>Power</th>
      <th>IP Rating</th>
      <th>Guarantee</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>SL-0505</td>
      <td>90-270V AC</td>
      <td>5V DC</td>
      <td>115x52x35 mm</td>
      <td>5 Amp (50W)</td>
      <td>IP-20</td>
      <td>1 Year PTP</td>
    </tr>
    <tr>
      <td>SL-0510</td>
      <td>90-270V AC</td>
      <td>5V DC</td>
      <td>110x78x41 mm</td>
      <td>10 Amp (50W)</td>
      <td>IP-20</td>
      <td>1 Year PTP</td>
    </tr>
    <tr>
      <td>SL-0520</td>
      <td>90-270V AC</td>
      <td>5V DC</td>
      <td>140x60x35 mm</td>
      <td>20 Amp (100W)</td>
      <td>IP-20</td>
      <td>1 Year PTP</td>
    </tr>
    <tr>
      <td>SL-0540M</td>
      <td>90-270V AC</td>
      <td>5V DC</td>
      <td>190x85x30 mm</td>
      <td>40 Amp (200W)</td>
      <td>IP-20</td>
      <td>1 Year PTP</td>
    </tr>
    <tr>
      <td>SL-0560M</td>
      <td>90-270V AC</td>
      <td>5V DC</td>
      <td>190x85x30 mm</td>
      <td>60 Amp (300W)</td>
      <td>IP-20</td>
      <td>1 Year PTP</td>
    </tr>
  </tbody>
</table>

                            </div>
                        </div>
                    </div>


                    <!-- Product Group 5 -->

                    <div class="product-group" id="SMPS-24V-DC">
                        <h3 class="product-group-title">SMPS 24V DC</h3>
                        <div class="smps-product-wrapper">
                            <div class="product-left">
                                <div class="smps-product-image">
                                    <img src="assets/img/smps-img/smps-12v-dc.jpg" alt="SMPS 24V DC">
                                </div>
                                <!-- <h3 class="product-title">SMPS 24V DC</h3> -->
                            </div>
                            <div class="product-right">
<table class="product-table">
  <thead>
    <tr>
      <th>Code</th>
      <th>Input Voltage</th>
      <th>Output Voltage</th>
      <th>Size</th>
      <th>Power</th>
      <th>IP Rating</th>
      <th>Guarantee</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>SL-2402</td>
      <td>90-270V AC</td>
      <td>24V DC</td>
      <td>110x80x40 mm</td>
      <td>2.5 Amp (60W)</td>
      <td>IP-20</td>
      <td>2 Year PTP</td>
    </tr>
    <tr>
      <td>SL-2402 M</td>
      <td>90-270V AC</td>
      <td>24V DC</td>
      <td>100x55x32 mm</td>
      <td>2.5 Amp (60W)</td>
      <td>IP-20</td>
      <td>2 Year PTP</td>
    </tr>
    <tr>
      <td>SL-2405 M</td>
      <td>90-270V AC</td>
      <td>24V DC</td>
      <td>140x60x45 mm</td>
      <td>5 Amp (120W)</td>
      <td>IP-20</td>
      <td>2 Year PTP</td>
    </tr>
    <tr>
      <td>SL-2410 M</td>
      <td>90-270V AC</td>
      <td>24V DC</td>
      <td>190x90x45 mm</td>
      <td>10 Amp (240W)</td>
      <td>IP-20</td>
      <td>2 Year PTP</td>
    </tr>
    <tr>
      <td>SL-2415 M</td>
      <td>90-270V AC</td>
      <td>24V DC</td>
      <td>190x90x45 mm</td>
      <td>15 Amp (360W)</td>
      <td>IP-20</td>
      <td>2 Year PTP</td>
    </tr>
  </tbody>
</table>

                            </div>
                        </div>
                    </div>

                    <!-- Product Group 6 -->

                    <div class="product-group" id="SMPS-Waterproof-24V-DC">
                        <h3 class="product-group-title">SMPS Waterproof 24V DC</h3>
                        <div class="smps-product-wrapper">
                            <div class="product-left">
                                <div class="smps-product-image">
                                    <img src="assets/img/smps-img/smps-waterproof.jpg" alt="SMPS Waterproof 24V DC">
                                </div>
                                <!-- <h3 class="product-title">SMPS Waterproof 24V DC</h3> -->
                            </div>
                            <div class="product-right">
                             <table class="product-table">
  <thead>
    <tr>
      <th>Product Code</th>
      <th>Input Voltage</th>
      <th>Output Voltage</th>
      <th>Size</th>
      <th>Power</th>
      <th>IP Rating</th>
      <th>Guarantee</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>SL-24-60w</td>
      <td>90-270V AC</td>
      <td>24V DC</td>
      <td>130x45x35</td>
      <td>2.5 Amp (60W)</td>
      <td>IP-67</td>
      <td>2 Year PTP</td>
    </tr>
    <tr>
      <td>SL-24-100w</td>
      <td>90-270V AC</td>
      <td>24V DC</td>
      <td>125x101x50</td>
      <td>5 Amp (100W)</td>
      <td>IP-67</td>
      <td>2 Year PTP</td>
    </tr>
    <tr>
      <td>SL-24-200w</td>
      <td>90-270V AC</td>
      <td>24V DC</td>
      <td>185x101x50</td>
      <td>8.3 Amp (200W)</td>
      <td>IP-67</td>
      <td>2 Year PTP</td>
    </tr>
  </tbody>
</table>

                            </div>
                        </div>
                    </div>


                    <!-- Product Group 7 -->

                    <div class="product-group" id="SMPS-Rainproof-12V-DC">
                        <h3 class="product-group-title">SMPS Rainproof 12V DC</h3>
                        <div class="smps-product-wrapper">
                            <div class="product-left">
                                <div class="smps-product-image">
                                    <img src="assets/img/smps-img/smps-rainproof-12v-dc (1).jpg"
                                        alt="SMPS Rainproof 12V DC">
                                </div>
                                <!-- <h3 class="product-title">SMPS Rainproof 12V DC</h3> -->
                            </div>
                            <div class="product-right">
                                <table class="product-table">
  <thead>
    <tr>
      <th>Code</th>
      <th>Input Voltage</th>
      <th>Output Voltage</th>
      <th>Size</th>
      <th>Power</th>
      <th>IP Rating</th>
      <th>Guarantee</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>SL-1210-RP</td>
      <td>90-270V AC</td>
      <td>12V DC</td>
      <td>170x98x50 mm</td>
      <td>10 Amp (120W)</td>
      <td>IP-54</td>
      <td>2 Year PTP</td>
    </tr>
    <tr>
      <td>SL-1212-RP</td>
      <td>90-270V AC</td>
      <td>12V DC</td>
      <td>170x98x50 mm</td>
      <td>12.5 Amp (150W)</td>
      <td>IP-54</td>
      <td>2 Year PTP</td>
    </tr>
    <tr>
      <td>SL-1215-RPN</td>
      <td>90-270V AC</td>
      <td>12V DC</td>
      <td>130x101x50 mm</td>
      <td>15 Amp (180W)</td>
      <td>IP-54</td>
      <td>2 Year PTP</td>
    </tr>
    <tr>
      <td>SL-1220-RPN</td>
      <td>90-270V AC</td>
      <td>12V DC</td>
      <td>195x101x50 mm</td>
      <td>20 Amp (240W)</td>
      <td>IP-54</td>
      <td>2 Year PTP</td>
    </tr>
    <tr>
      <td>SL-1225-RPN</td>
      <td>90-270V AC</td>
      <td>12V DC</td>
      <td>195x101x50 mm</td>
      <td>25 Amp (300W)</td>
      <td>IP-54</td>
      <td>2 Year PTP</td>
    </tr>
    <tr>
      <td>SL-1230-RP</td>
      <td>90-270V AC</td>
      <td>12V DC</td>
      <td>235x155x70 mm</td>
      <td>30 Amp (360W)</td>
      <td>IP-54</td>
      <td>Non-Warranty</td>
    </tr>
    <tr>
      <td>SL-1241-RP</td>
      <td>90-270V AC</td>
      <td>12V DC</td>
      <td>235x155x70 mm</td>
      <td>41 Amp (500W)</td>
      <td>IP-54</td>
      <td>Non-Warranty</td>
    </tr>
  </tbody>
</table>

                            </div>
                        </div>
                    </div>

                    <!-- Product Group 8 -->

                    <div class="product-group" id="SMPS-Waterproof-12V-DC">
                        <h3 class="product-group-title">SMPS Waterproof 12V DC</h3>
                        <div class="smps-product-wrapper">
                            <div class="product-left">
                                <div class="smps-product-image">
                                    <img src="assets/img/smps-img/smps-waterproof.jpg" alt="SMPS Waterproof 12V DC">
                                </div>
                                <!-- <h3 class="product-title">SMPS Waterproof 12V DC</h3> -->
                            </div>
                            <div class="product-right">
                                <table class="product-table">
                                    <thead>
                                        <tr>
                                            <th>Product Code</th>
                                            <th>Input Voltage</th>
                                            <th>Output Voltage</th>
                                            <th>Size</th>
                                            <th>Power</th>
                                            <th>IP Rating</th>
                                            <th>Guarantee</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>SL-12-24w</td>
                                            <td>90-270V AC</td>
                                            <td>12V DC</td>
                                            <td>130x48x30 mm</td>
                                            <td>24W</td>
                                            <td>IP-67</td>
                                            <td>2 Year PTP</td>
                                        </tr>
                                         <tr>
                                            <td>SL-12-36w</td>
                                            <td>90-270V AC</td>
                                            <td>12V DC</td>
                                            <td>117x35x35 mm</td>
                                            <td>36W</td>
                                            <td>IP-67</td>
                                            <td>2 Year PTP</td>
                                        </tr>
                                         <tr>
                                            <td>SL-12-60w</td>
                                            <td>90-270V AC</td>
                                            <td>12V DC</td>
                                            <td>130x45x35 mm</td>
                                            <td>60W</td>
                                            <td>IP-67</td>
                                            <td>2 Year PTP</td>
                                        </tr>
                                         <tr>
                                            <td>SL-12-100w</td>
                                            <td>90-270V AC</td>
                                            <td>12V DC</td>
                                            <td>125x101x50 mm</td>
                                            <td>100W</td>
                                            <td>IP-67</td>
                                            <td>2 Year PTP</td>
                                        </tr>
                                         <tr>
                                            <td>SL-12-150w</td>
                                            <td>90-270V AC</td>
                                            <td>12V DC</td>
                                            <td>130x101x50 mm</td>
                                            <td>150W</td>
                                            <td>IP-67</td>
                                            <td>2 Year PTP</td>
                                        </tr>
                                         <tr>
                                            <td>SL-12-200w</td>
                                            <td>90-270V AC</td>
                                            <td>12V DC</td>
                                            <td>185x101x50 mm</td>
                                            <td>200W</td>
                                            <td>IP-67</td>
                                            <td>2 Year PTP</td>
                                        </tr>
                                         <tr>
                                            <td>SL-12-300w</td>
                                            <td>90-270V AC</td>
                                            <td>12V DC</td>
                                            <td>195x101x50 mm</td>
                                            <td>300W</td>
                                            <td>IP-67</td>
                                            <td>2 Year PTP</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Product Group 9 -->

                    <div class="product-group" id="SMPS-Ultra-Slim-Phase-Cut-Analogue-Dimmer-12V-DC">
                        <h3 class="product-group-title">SMPS Ultra Slim Phase Cut+Analogue Dimmer 12V DC</h3>
                        <div class="smps-product-wrapper">
                            <div class="product-left">
                                <div class="smps-product-image">
                                    <img src="assets/img/smps-img/smps-ultra-slim-phase-cut-analogue-dimmer-12v-dc.png"
                                        alt="SMPS Ultra Slim Phase Cut+Analogue Dimmer 12V DC">
                                </div>
                                <!-- <h3 class="product-title">Ultra Slim Phase Cut + Analogue Dimmer 12V DC</h3> -->
                            </div>
                            <div class="product-right">
                                <table class="product-table">
                                  <thead>
                                        <tr>
                                            <th>Product Code</th>
                                            <th>Input Voltage</th>
                                            <th>Output Voltage</th>
                                            <th>Size</th>
                                            <th>Power</th>
                                            <th>IP Rating</th>
                                            <th>Guarantee</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>SLOD12-60</td>
                                            <td>200-240V AC</td>
                                            <td>12V DC</td>
                                            <td>195x42x30 mm</td>
                                            <td>5A(60W)</td>
                                            <td>IP-20</td>
                                            <td>1 Year</td>
                                        </tr>
                                         <tr>
                                            <td>SLOD12-100</td>
                                            <td>200-240V AC</td>
                                            <td>12V DC</td>
                                            <td>332x42x30 mm</td>
                                            <td>8.3A(100W)</td>
                                            <td>IP-20</td>
                                            <td>1 Year</td>
                                        </tr>
                                         <tr>
                                            <td>SLOD12-150</td>
                                            <td>200-240V AC</td>
                                            <td>12V DC</td>
                                            <td>286x49x30 mm</td>
                                            <td>12.5A(150W)</td>
                                            <td>IP-20</td>
                                            <td>1 Year</td>
                                        </tr>
                                         <tr>
                                            <td>SLOD12-200</td>
                                            <td>200-240V AC</td>
                                            <td>12V DC</td>
                                            <td>232x49x30 mm</td>
                                            <td>16.6A(200W)</td>
                                            <td>IP-20</td>
                                            <td>1 Year</td>
                                        </tr>
                                         <tr>
                                            <td>SLOD12-200</td>
                                            <td>200-240V AC</td>
                                            <td>12V DC</td>
                                            <td>232x49x30 mm</td>
                                            <td>16.6A(200W)</td>
                                            <td>IP-20</td>
                                            <td>1 Year</td>
                                        </tr>
                                         <tr>
                                            <td>SLOD12-200</td>
                                            <td>200-240V AC</td>
                                            <td>12V DC</td>
                                            <td>232x49x30 mm</td>
                                            <td>16.6A(200W)</td>
                                            <td>IP-20</td>
                                            <td>1 Year</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <!-- Product Group 10 -->

                    <div class="product-group" id="SMPS-Ultra-Slim-Phase-Cut-Analogue-Dimmer-24V-DC">
                        <h3 class="product-group-title">SMPS Ultra Slim Phase Cut+Analogue Dimmer 24V DC</h3>
                        <div class="smps-product-wrapper">
                            <div class="product-left">
                                <div class="smps-product-image">
                                    <img src="assets/img/smps-img/smps-ultra-slim-phase-cut-analogue-dimmer-12v-dc.png"
                                        alt="SMPS Ultra Slim Phase Cut+Analogue Dimmer 24V DC">
                                </div>
                                <!-- <h3 class="product-title">Ultra Slim Phase Cut + Analogue Dimmer 24V DC</h3> -->
                            </div>
                            <div class="product-right">
                                <table class="product-table">
                                    <thead>
                                        <tr>
                                            <th>Product Code</th>
                                            <th>Input Voltage</th>
                                            <th>Output Voltage</th>
                                            <th>Size</th>
                                            <th>Power</th>
                                            <th>IP Rating</th>
                                            <th>Guarantee</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>SLOD24-60</td>
                                            <td>200-240V AC</td>
                                            <td>24V DC</td>
                                            <td>195x49x30 mm</td>
                                            <td>2.5A(60W)</td>
                                            <td>IP-20</td>
                                            <td>1 Year</td>
                                        </tr>
                                         <tr>
                                            <td>SLOD24-100</td>
                                            <td>200-240V AC</td>
                                            <td>24V DC</td>
                                            <td>332x42x30 mm</td>
                                            <td>4.1A(100W)</td>
                                            <td>IP-20</td>
                                            <td>1 Year</td>
                                        </tr>
                                         <tr>
                                            <td>SLOD24-150</td>
                                            <td>200-240V AC</td>
                                            <td>24V DC</td>
                                            <td>286x49x30 mm</td>
                                            <td>6.25A(150W)</td>
                                            <td>IP-20</td>
                                            <td>1 Year</td>
                                        </tr>
                                         <tr>
                                            <td>SLOD24-200</td>
                                            <td>200-240V AC</td>
                                            <td>24V DC</td>
                                            <td>232x49x30 mm</td>
                                            <td>8.3A(200W)</td>
                                            <td>IP-20</td>
                                            <td>1 Year</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

<!-- Product Group 11 -->
                    <div class="product-group" id="SL-Indoor-SMPS">
  <h3 class="product-group-title">SL Indoor SMPS</h3>
  <div class="smps-product-wrapper">
    <div class="product-left">
      <div class="smps-product-image">
        <img src="assets/img/smps-img/in-s-1.png" alt="SL Indoor SMPS">
      </div>
      <!-- <h3 class="product-title">SL Indoor SMPS</h3> -->
    </div>

    <div class="product-right">
      <table class="product-table">
        <thead>
          <tr>
            <th>Product Code</th>
            <th>Input Voltage</th>
            <th>Output Voltage</th>
            <th>Size</th>
            <th>Power</th>
            <th>IP Rating</th>
            <th>Guarantee</th>
          </tr>
        </thead>
        <tbody>
          <!-- 12V Models -->
          <tr>
            <td>BB 12-60 Q</td>
            <td>AC 86V-265V</td>
            <td>DC 12V</td>
            <td>146×53×21 mm</td>
            <td>60W</td>
            <td>IP-20</td>
            <td>1 Year</td>
          </tr>
          <tr>
            <td>BB 12-100 Q</td>
            <td>AC 86V-265V</td>
            <td>DC 12V</td>
            <td>175×53×21 mm</td>
            <td>100W</td>
            <td>IP-20</td>
            <td>1 Year</td>
          </tr>
          <tr>
            <td>BB 12-150 Q</td>
            <td>AC 86V-265V</td>
            <td>DC 12V</td>
            <td>226×53×18 mm</td>
            <td>150W</td>
            <td>IP-20</td>
            <td>1 Year</td>
          </tr>
          <tr>
            <td>BB 12-200 Q</td>
            <td>AC 86V-265V</td>
            <td>DC 12V</td>
            <td>307×53×22 mm</td>
            <td>200W</td>
            <td>IP-20</td>
            <td>1 Year</td>
          </tr>
          <tr>
            <td>BB 12-300 Q</td>
            <td>AC 86V-265V</td>
            <td>DC 12V</td>
            <td>307×53×22 mm</td>
            <td>300W</td>
            <td>IP-20</td>
            <td>1 Year</td>
          </tr>
          <tr>
            <td>BB 12-400 Q</td>
            <td>AC 86V-265V</td>
            <td>DC 12V</td>
            <td>340×53×22 mm</td>
            <td>400W</td>
            <td>IP-20</td>
            <td>1 Year</td>
          </tr>

          <!-- 24V Models -->
          <tr>
            <td>BB 24-60 Q</td>
            <td>AC 86V-265V</td>
            <td>DC 24V</td>
            <td>146×53×21 mm</td>
            <td>60W</td>
            <td>IP-20</td>
            <td>1 Year</td>
          </tr>
          <tr>
            <td>BB 24-100 Q</td>
            <td>AC 86V-265V</td>
            <td>DC 24V</td>
            <td>175×53×21 mm</td>
            <td>100W</td>
            <td>IP-20</td>
            <td>1 Year</td>
          </tr>
          <tr>
            <td>BB 24-150 Q</td>
            <td>AC 86V-265V</td>
            <td>DC 24V</td>
            <td>226×53×18 mm</td>
            <td>150W</td>
            <td>IP-20</td>
            <td>1 Year</td>
          </tr>
          <tr>
            <td>BB 24-200 Q</td>
            <td>AC 86V-265V</td>
            <td>DC 24V</td>
            <td>307×53×22 mm</td>
            <td>200W</td>
            <td>IP-20</td>
            <td>1 Year</td>
          </tr>
          <tr>
            <td>BB 24-300 Q</td>
            <td>AC 86V-265V</td>
            <td>DC 24V</td>
            <td>307×53×22 mm</td>
            <td>300W</td>
            <td>IP-20</td>
            <td>1 Year</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  </div>

 <!--<div class="smps-product-wrapper">-->
 <!--   <div class="product-left">-->
 <!--     <div class="smps-product-image">-->
 <!--       <img src="assets/img/smps-img/in-s-3.png" alt="SL Indoor SMPS 60W">-->
 <!--     </div>-->
      <!-- <h3 class="product-title">SL Indoor SMPS</h3> -->
<!--    </div>-->
<!--    <div class="product-right mt-2">-->
<!--      <table class="product-table">-->
<!--        <thead>-->
<!--          <tr>-->
<!--            <th>Product Code</th>-->
<!--            <th>Input Voltage</th>-->
<!--            <th>Output Voltage</th>-->
<!--            <th>Size</th>-->
<!--            <th>Power</th>-->
<!--            <th>IP Rating</th>-->
<!--            <th>Guarantee</th>-->
<!--          </tr>-->
<!--        </thead>-->
<!--        <tbody>-->
<!--          <tr>-->
<!--            <td>BB 12-60 Q</td>-->
<!--            <td>AC 86V-265V</td>-->
<!--            <td>DC 12V</td>-->
<!--            <td>146×53×21 mm</td>-->
<!--            <td>60W</td>-->
<!--            <td>IP-20</td>-->
<!--            <td>1 Year</td>-->
<!--          </tr>-->
<!--          <tr>-->
<!--            <td>BB 24-60 Q</td>-->
<!--            <td>AC 86V-265V</td>-->
<!--            <td>DC 24V</td>-->
<!--            <td>146×53×21 mm</td>-->
<!--            <td>60W</td>-->
<!--            <td>IP-20</td>-->
<!--            <td>1 Year</td>-->
<!--          </tr>-->
<!--        </tbody>-->
<!--      </table>-->
<!--    </div>-->
<!--</div>-->
<!--</div>-->

<div class="product-group" id="SL-IP67-Outdoor-SMPS">
  <h3 class="product-group-title">SL IP67 Outdoor SMPS</h3>
  <div class="smps-product-wrapper">
    <div class="product-left">
      <div class="smps-product-image">
        <img src="assets/img/smps-img/in-s-2.png" alt="SL IP67 Outdoor SMPS">
      </div>
      <!-- <h3 class="product-title">SL IP67 Outdoor SMPS</h3> -->
    </div>
    <div class="product-right">
      <table class="product-table">
        <thead>
          <tr>
            <th>Product Code</th>
            <th>Input Voltage</th>
            <th>Output Voltage</th>
            <th>Size</th>
            <th>Power</th>
            <th>IP Rating</th>
            <th>Guarantee</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>SL 12-200 SS</td>
            <td>AC 170V-250V</td>
            <td>DC 12V</td>
            <td>215×65×27 mm</td>
            <td>200W</td>
            <td>IP67</td>
            <td>1 Year</td>
          </tr>
          <tr>
            <td>SL 12-300 SS</td>
            <td>AC 170V-250V</td>
            <td>DC 12V</td>
            <td>240×65×27 mm</td>
            <td>300W</td>
            <td>IP67</td>
            <td>1 Year</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>


                    <!-- Additional product groups would go here -->
                </div>
            </div>
        </div>
    </section>

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