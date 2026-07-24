<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outdoor LED Lighting | Durable & Bright Solutions by Sunny Light</title>
<meta name="description" content="Discover weatherproof and durable outdoor LED lighting for gardens, facades, and architectural spaces — powerful, stylish, and efficient.">
<meta name="keywords" content="outdoor lighting, LED flood lights, garden lights, landscape lighting, architectural lighting, waterproof LED lights, outdoor fixtures, exterior lighting">


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
    <section class="productpage-category ">
        <div class="page-width main-productcategory">
            <!-- left part -->
            <div class="mysidebar">
                <div class="mysidebar-section">
                    <div class="mysidebar-header">
                        <h4>Outdoor Lights</h4>
                         <button class="dropdown-toggle" id="mobileDropdownBtn">
        <i class="fa fa-chevron-down"></i>
      </button>
                    </div>
                    <div class="mysidebar-content" id="mobileDropdownContent">
                         <ul class="mysidebar-list ">
                             <li><a href="#" class="filter-link all-products-link active" id="all-products-link">All Products</a></li>
                            <li><a href="#Recessed-Step-Light" class="filter-link " data-category="step-light">Outdoor Recessed Step Lights</a></li>
                            <li><a href="#Surface-Step-Wall-Light" class="filter-link" data-category="wall-light">Outdoor Surface Step/Wall Lights</a></li>
                            <li><a href="#mini-wall" class="filter-link" data-category="mini-wall">Outdoor Mini Series Wall Lights</a></li>
                            <li><a href="#adjustable-wall-lights" class="filter-link" data-category="adjustable-wall">Led Linear Adjustable Outdoor Wall Washer Lights</a></li>
                            <li><a href="#garden-spike-lights" class="filter-link" data-category="garden-spike">Outdoor Garden Tree Spike Lights</a></li>
                            <li><a href="#pathway-lights" class="filter-link" data-category="pathway">Inground Burial Pathway Lights</a></li>
                            <li><a href="#Tiltable-Garden-Bollard-Light" class="filter-link" data-category="bollard">Tiltable Garden Bollard Lights</a></li>
                            <li><a href="#Inground-led-burial" class="filter-link" data-category="burial">Outdoor Inground LED Burial Lights</a></li>
                            <li><a href="#Mini-Inground-Lights" class="filter-link" data-category="inground">Mini Inground Lights</a></li>
                            <li><a href="#narrow-beam-lights" class="filter-link" data-category="uplighters">Outdoor Narrow Beam Uplighters</a></li>
                            <li><a href="#solar-garden-lights" class="filter-link" data-category="solar-garden">Outdoor Solar Garden Lights</a></li>
                            <li><a href="#Automatic-Sensor-Based-Solar-Garden-Bollard-Lights" class="filter-link" data-category="solar">Automatic Sensor Based Solar Garden Bollard Lights</a></li>
                            <li><a href="#Outdoor-Garden-Lights" class="filter-link" data-category="solars">Outdoor Garden Lights</a></li>
                            <li><a href="#Outdoor-Surface-Wall-Foot-Lights" class="filter-link" data-category="solars">Outdoor Surface/Wall Foot Lights</a></li>
                            <li><a href="#Outdoor-Recessed-Foot-Lights" class="filter-link" data-category="solars">Outdoor Recessed Foot Lights</a></li>
                            <li><a href="#Outdoor-Wall-Lights" class="filter-link" data-category="solars">Outdoor Wall Lights</a></li>
                            <li><a href="#Outdoor-Bollard-Lights" class="filter-link" data-category="solars">Outdoor Bollard Lights</a></li>
                            <li><a href="#Outdoor-Gate-Lights" class="filter-link" data-category="solars">Outdoor Gate Lights</a></li>
                            <li><a href="#Outdoor-Recessed-Ground-Burial-Wall-Washers" class="filter-link" data-category="solars">Outdoor Recessed Ground Burial Wall Washer</a></li>
                            <li><a href="#Outdoor-IP68-Underwater-Outdoor-Flexible-Wall-Washer" class="filter-link" data-category="solars">Outdoor IP68 Underwater/Outdoor Flexible Wall Washers</a></li>
                            <li><a href="#Outdoor-Wall-Washers" class="filter-link" data-category="solars">Outdoor Wall Washers</a></li>


                            <li><a href="#SL-Outdoor-Lights-Cloudy-Series" class="filter-link" data-category="solars">SL Outdoor Lights - Cloudy Series</a></li>
                            <li><a href="#SL-Foot-Lights" class="filter-link" data-category="solars">SL Foot Lights</a></li>
                            <li><a href="#SL-Outdoor-Wall-Ground-Burial-Lights" class="filter-link" data-category="solars">SL Outdoor Wall / Ground Burial Lights</a></li>
                            <li><a href="#SL-Parking-Lights" class="filter-link" data-category="solars">SL Parking Lights</a></li>
                            <li><a href="#SL-Outdoor-Surface-COB-Downlights" class="filter-link" data-category="solars">SL Outdoor Surface COB Downlights</a></li>
                            <li><a href="#SL-Garden-Lights" class="filter-link" data-category="solars">SL Garden Lights</a></li>
                            <li><a href="#SL-Bollard-Lights" class="filter-link" data-category="solars">SL Bollard Lights</a></li>
                            <li><a href="#SL-360°-Trick-Light" class="filter-link" data-category="solars">SL 360° Trick Light</a></li>
                            <li><a href="#SL-Wall-Washer" class="filter-link" data-category="solars">SL Wall Washer</a></li>
                            <li><a href="#SL-Underwater-Lights" class="filter-link" data-category="solars">SL-Underwater-Lights</a></li>
                            <li><a href="#SL-Drivers-for-Underwater-Lights" class="filter-link" data-category="solars">SL Drivers for Underwater Lights</a></li>
                            <li><a href="#SL-High-Bay-Lights" class="filter-link" data-category="solars">SL High Bay Lights</a></li>
                            <li><a href="#SL-COB-LED-Flood-Lights" class="filter-link" data-category="solars">SL COB LED Flood Lights</a></li>
                            <li><a href="#SL-SMD-LED-Flood-Lights-Nano-Series" class="filter-link" data-category="solars">SL SMD LED Flood Lights - Nano Series</a></li>
                            <li><a href="#SL-SMD-LED-Flood-Lights-Blush-Series" class="filter-link" data-category="solars">SL SMD LED Flood Lights - Blush Series</a></li>
                            <li><a href="#SL-Colored-LED-Flood-Lights-Splash-Series" class="filter-link" data-category="solars">SL Colored LED Flood Lights - Splash Series</a></li>
                            <li><a href="#SL-Edison-LED-Street-Lights" class="filter-link" data-category="solars">SL Edison LED Street Lights</a></li>
                            <li><a href="#SL-OSRAM-LED-Street-Lights" class="filter-link" data-category="solars">SL OSRAM LED Street Lights</a></li>


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
                    <!-- Product Group 1 -->

                    <div class="product-group" id="Recessed-Step-Light">
                        <h3 id="Recessed Step Light" class="product-group-title">Outdoor Recessed Step Lights</h3>
                        <div class="products-container">

                         <a href="outdoor-product-detail-page.php?id=3" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/outdoor-main-page-products/img-o-11.jpg"
                                            alt="OUTDOOR RECESSED STEP LIGHT" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/outdoor-main-page-products/img-o-8.jpg"
                                            alt="OUTDOOR RECESSED STEP LIGHT USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Recessed Step Light</h3>
                                        <div class="product-model"><span>Model:</span> SL FL 9625</div>
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=2" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/outdoor-main-page-products/OUTDOOR-RECESSED-STEP-LIGHT2-z.png"
                                            alt="OUTDOOR RECESSED STEP LIGHT" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/outdoor-main-page-products/img-o-3.jpg"
                                            alt="OUTDOOR RECESSED STEP LIGHT USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Recessed Step Light</h3>
                                        <div class="product-model"><span>Model:</span> SL FL 9626</div>
                                    </div>
                                </div>
                            </a>

                            
                            <a href="outdoor-product-detail-page.php?id=1" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/outdoor-main-page-products/OUTDOOR-RECESSED-STEP-LIGHT-m.jpg"
                                            alt="OUTDOOR RECESSED STEP LIGHT" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/outdoor-recessed-step-light-imgs/model-9627/9627-1.jpg"
                                            alt="OUTDOOR RECESSED STEP LIGHT USE" class="hover-image">

                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Recessed Step Light</h3>
                                        <div class="product-model"><span>Model:</span> SL FL 9627</div>
                                    </div>
                                </div>
                            </a>

                            

                            <a href="outdoor-product-detail-page.php?id=4" class="product-card-link">
                                <div class="product-card" data-price="1500">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/outdoor-main-page-products/outdoor-step-light-3.jpg"
                                            alt="OUTDOOR RECESSED STEP LIGHT" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/main-pdt-uses-area/9628-use.jpg"
                                            alt="OUTDOOR RECESSED STEP LIGHT USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Recessed Step Light</h3>
                                        <div class="product-model"><span>Model:</span> SL FL 9628</div>
                                    </div>
                                </div>
                            </a>

                           

                            <a href="outdoor-product-detail-page.php?id=5" class="product-card-link">
                                <div class="product-card" data-price="1200">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/outdoor-main-page-products/outdoor-step-light-5-z.png"
                                            alt="OUTDOOR RECESSED STEP LIGHT" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/outdoor-recessed-step-light-imgs/model-9627/img-o-19.jpg"
                                            alt="OUTDOOR RECESSED STEP LIGHT USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Recessed Step Light</h3>
                                        <div class="product-model"><span>Model:</span> SL-K-0324</div>
                                        <!-- <p class="product-price">₹ 1200</p> -->
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=6" class="product-card-link">
                                <div class="product-card" data-price="900">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/outdoor-recessed-step-light-imgs/model-9627/img-o-20.jpg"
                                            alt="OUTDOOR RECESSED STEP LIGHT" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/outdoor-recessed-step-light-imgs/model-9627/img-o-22.jpg"
                                            alt="OUTDOOR RECESSED STEP LIGHT USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Recessed Step Light</h3>
                                        <div class="product-model"><span>Model:</span> SL-K-0524V</div>
                                        <!-- <p class="product-price">₹ 900</p> -->
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=7" class="product-card-link">
                                <div class="product-card" data-price="1250">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/outdoor-main-page-products/outdoor-step-light-4.png"
                                            alt="OUTDOOR RECESSED STEP LIGHT" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/M-25-imgs/9625-3.jpg"
                                            alt="OUTDOOR RECESSED STEP LIGHT USE" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Recessed Step Light</h3>
                                        <div class="product-model"><span>Model:</span> SL-9624</div>
                                        <!-- <p class="product-price">₹ 1250</p> -->
                                    </div>
                                </div>

                            </a>
                        </div>
                    </div>

                    <!-- Product Group 2 Outdoor Surface Step/Wall Light -->

                    <div class="product-group" id="Surface-Step-Wall-Light">
                        <h3 id="Surface Step/Wall Light" class="product-group-title">Outdoor Surface Step/Wall Lights
                        </h3>
                        <div class="products-container">

                            <a href="outdoor-product-detail-page.php?id=8" class="product-card-link">
                                <div class="product-card" data-price="900">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/outdoor-recessed-step-light-imgs/model-9627/img-o-25.jpg"
                                            alt="Outdoor Surface Step/Wall Light" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/outdoor-recessed-step-light-imgs/model-9627/img-o-27.jpg"
                                            alt="Outdoor Surface Step/Wall Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Surface Step/Wall Light</h3>
                                        <div class="product-model"><span>Model:</span> SLCY-330 RD</div>
                                    </div>
                                </div>
                            </a>
                            <a href="outdoor-product-detail-page.php?id=9" class="product-card-link">
                                <div class="product-card" data-price="900">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/outdoor-main-page-products/img-o-32.jpg"
                                            alt="Outdoor Surface Step/Wall Light" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/outdoor-recessed-step-light-imgs/model-9627/img-o-36.jpg"
                                            alt="Outdoor Surface Step/Wall Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Surface Step/Wall Light</h3>
                                        <div class="product-model"><span>Model:</span> SLCY-330 SQ</div>
                                    </div>
                                </div>

                            </a>

                            <a href="outdoor-product-detail-page.php?id=10" class="product-card-link">
                                <div class="product-card" data-price="1800">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/outdoor-main-page-products/img-o-38.jpg"
                                            alt="Outdoor Surface Step/Wall Light" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/outdoor-recessed-step-light-imgs/model-9627/img-o-40.jpg"
                                            alt="Outdoor Surface Step/Wall Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Surface Step/Wall Light</h3>
                                        <div class="product-model"><span>Model:</span> SL-CY4003</div>
                                    </div>
                                </div>
                            </a>


                        </div>
                    </div>


                    <!-- product group Mini Series Wall Lights-->
                    <div class="product-group" id="mini-wall">
                        <h3 class="product-group-title">Mini Series Outdoor Wall Lights</h3>
                        <div class="products-container">



                            <a href="outdoor-product-detail-page.php?id=11" class="product-card-link">
                                <div class="product-card" data-price="550">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/outdoor-recessed-step-light-imgs/model-9627/mini-1-1.jpg"
                                            alt="Smart Watch" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/outdoor-recessed-step-light-imgs/model-9627/img-o-48.png"
                                            alt="Outdoor Surface Step/Wall Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Mini Series Outdoor Wall Light</h3>
                                        <div class="product-model"><span>Model:</span> SLCY9101</div>
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=12" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/outdoor-recessed-step-light-imgs/model-9627/img-o-50.jpg"
                                            alt="Wireless Headphones" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/m-s-o-l/mini-use-7.png"
                                            alt="Outdoor Surface Step/Wall Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Mini Series Outdoor Wall Light</h3>
                                        <div class="product-model"><span>Model:</span> SLCY9102</div>
                                        <!-- <p class="product-price">₹ 700</p> -->
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=13" class="product-card-link">
                                <div class="product-card" data-price="650">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/outdoor-recessed-step-light-imgs/model-9627/mini-1-1.jpg"
                                            alt="Portable Speaker" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/m-s-o-l/mini-use-8.png"
                                            alt="Outdoor Surface Step/Wall Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Mini Series Outdoor Wall Light</h3>
                                        <div class="product-model"><span>Model:</span> SLCY9101N</div>
                                        <!-- <p class="product-price">₹ 650</p> -->
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=14" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/m-s-o-l/Mini-Series-Outdoor-Wall-Lights4-1.jpg"
                                            alt="DSLR Camera" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/m-s-o-l/mini-9.png"
                                            alt="Outdoor Surface Step/Wall Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Mini Series Outdoor Wall Light</h3>
                                        <div class="product-model"><span>Model:</span> SLCY9104</div>
                                        <!-- <p class="product-price">₹ 950</p> -->
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=15" class="product-card-link">
                                <div class="product-card" data-price="550">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/m-s-o-l/m-s1-1.png"
                                            alt="Mini Series Outdoor Wall Light" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/m-s-o-l/M-S-1USE.png"
                                            alt="Mini Series Outdoor Wall Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Mini Series Outdoor Wall Light</h3>
                                        <div class="product-model"><span>Model:</span> SLCY9105</div>
                                        <!-- <p class="product-price">₹ 550</p> -->
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=16" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/m-s-o-l/m-s2-1.png"
                                            alt="Mini Series Outdoor Wall Light" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/m-s-o-l/m-s-2use.png"
                                            alt="Mini Series Outdoor Wall Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Mini Series Outdoor Wall Light</h3>
                                        <div class="product-model"><span>Model:</span> SLCY9106</div>
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=17" class="product-card-link">
                                <div class="product-card" data-price="650">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/m-s-o-l/img-o-60.jpg"
                                            alt="Mini Series Outdoor Wall Light" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/m-s-o-l/m-s-3use.png"
                                            alt="Mini Series Outdoor Wall Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Mini Series Outdoor Wall Light</h3>
                                        <div class="product-model"><span>Model:</span> SLCY9107</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- ptoduct group 4 Led Linear Adjustable Outdoor Wall Washer -->
                    <div class="product-group" id="adjustable-wall-lights">
                        <h3 class="product-group-title">Led Linear Adjustable Outdoor Wall Washer Lights</h3>
                        <div class="products-container">

                            <a href="outdoor-product-detail-page.php?id=18" class="product-card-link">
                                <div class="product-card" data-price="550">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/linear-l-2.jpg"
                                            alt="Smart Watch" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/img-o-66.png"
                                            alt="Outdoor Surface Step/Wall Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Led Linear Adjustable Outdoor Wall Washer Light</h3>
                                        <div class="product-model"><span>Model:</span> SL-0603</div>
                                        <!-- <p class="product-price">₹ 550</p> -->
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=19" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/linear-l-3.jpg"
                                            alt="Wireless Headphones" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/img-o-66.png"
                                            alt="Outdoor Surface Step/Wall Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Led Linear Adjustable Outdoor Wall Washer Light</h3>
                                        <div class="product-model"><span>Model:</span> SL-0603-2</div>
                                        <!-- <p class="product-price">₹ 700</p> -->
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=20" class="product-card-link">
                                <div class="product-card" data-price="650">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/linear-l-7.jpg"
                                            alt="Portable Speaker" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/linear-l-10.png"
                                            alt="Outdoor Surface Step/Wall Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Led Linear Adjustable Outdoor Wall Washer Light</h3>
                                        <div class="product-model"><span>Model:</span> SL-K-30723</div>
                                        <!-- <p class="product-price">₹ 650</p> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Product group 6 Garden spike lights -->
                    <div class="product-group" id="garden-spike-lights">
                        <h3 class="product-group-title">Outdoor Garden Tree Spike Lights</h3>
                        <div class="products-container">

                            <a href="outdoor-product-detail-page.php?id=21" class="product-card-link">
                                <div class="product-card" data-price="550">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/spike-light/spike-l-3-2.png"
                                            alt="Outdoor Garden Spike Light" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/spike-light/spike-l-1use.png"
                                            alt="Outdoor Garden Spike Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Garden Tree Spike Light</h3>
                                        <div class="product-model"><span>Model:</span> TREE 2999 SPIKE</div>

                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=22" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/spike-light/img-o-80.jpg"
                                            alt="Outdoor Garden Spike Light" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/spike-light/spike-l-2use.png"
                                            alt="Outdoor Garden Spike Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Garden Tree Spike Light</h3>
                                        <div class="product-model"><span>Model:</span> SL3225-7</div>
                                    </div>
                                </div>
                            </a>
                            <a href="outdoor-product-detail-page.php?id=23" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/spike-light/img-o-79.jpg"
                                            alt="Outdoor Garden Spike Light" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/spike-light/spike-l-2use.png"
                                            alt="Outdoor Garden Spike Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Garden Tree Spike Light</h3>
                                        <div class="product-model"><span>Model:</span> SL3225-9</div>
                                    </div>
                                </div>
                            </a>
                            <a href="outdoor-product-detail-page.php?id=24" class="product-card-link">
                                <div class="product-card" data-price="650">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/spike-light/img-o-81.jpg"
                                            alt="Outdoor Garden Spike Light" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/spike-light/spike-l-3use.jpg"
                                            alt="Outdoor Garden Spike Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Garden Tree Spike Light</h3>
                                        <div class="product-model"><span>Model:</span> SL0325</div>
                                        <!-- <p class="product-price">₹ 650</p> -->
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=25" class="product-card-link">
                                <div class="product-card" data-price="650">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/spike-light/ad-light.jpg"
                                            alt="Outdoor Garden Spike Light" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/spike-light/ad-light-2.png"
                                            alt="Outdoor Garden Spike Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Adjustable Spike/ Wall Light</h3>
                                        <div class="product-model"><span>Model:</span> SL-1222</div>
                                        <!-- <p class="product-price">₹ 650</p> -->
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=26" class="product-card-link">
                                <div class="product-card" data-price="650">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/spike-light/ad-light.jpg"
                                            alt="Outdoor Garden Spike Light" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/spike-light/ad-light-3.png"
                                            alt="Outdoor Garden Spike Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Adjustable Spike/ Wall Light</h3>
                                        <div class="product-model"><span>Model:</span> SL-1822</div>
                                        <!-- <p class="product-price">₹ 650</p> -->
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

                    <!-- product group 7 pathway lights -->
                    <div class="product-group" id="pathway-lights">
                        <h3 class="product-group-title">Inground Burial Pathway Lights</h3>
                        <div class="products-container">

                            <a href="outdoor-product-detail-page.php?id=27" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/spike-light/img-o-100.jpg"
                                            alt="Wireless Headphones" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/img-o-91.jpg"
                                            alt="Outdoor Surface Step/Wall Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Inground Burial Pathway Light</h3>
                                        <div class="product-model"><span>Model:</span> SL GB 501</div>
                                        <!-- <p class="product-price">₹ 700</p> -->
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=28" class="product-card-link">
                                <div class="product-card" data-price="550">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/spike-light/imh-o-90.png"
                                            alt="Smart Watch" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/img-o-93.jpg"
                                            alt="Outdoor Surface Step/Wall Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Inground Burial Pathway Light</h3>
                                        <div class="product-model"><span>Model:</span> SL GB 1001</div>
                                        <!-- <p class="product-price">₹ 550</p> -->
                                    </div>
                                </div>
                            </a>


                        </div>
                    </div>

                    <!-- product group 8 Tiltable-Garden-Bollard-Light -->
                    <div class="product-group" id="Tiltable-Garden-Bollard-Light">
                        <h3 class="product-group-title">Tiltable Garden Bollard Lights</h3>
                        <div class="products-container">

                            <a href="outdoor-product-detail-page.php?id=29" class="product-card-link">
                                <div class="product-card" data-price="550">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/img-o-106.jpg"
                                            alt="Smart Watch" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/img-o-105.jpg"
                                            alt="Outdoor Surface Step/Wall Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Tiltable Garden Bollard Light</h3>
                                        <div class="product-model"><span>Model:</span> SL-K-1129-600MM</div>
                                        <!-- <p class="product-price">₹ 550</p> -->
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=30" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/img-o-109.jpg"
                                            alt="Wireless Headphones" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/img-o-105.jpg"
                                            alt="Outdoor Surface Step/Wall Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Tiltable Garden Bollard Light</h3>
                                        <div class="product-model"><span>Model:</span> SL-K-1129-900MM</div>
                                        <!-- <p class="product-price">₹ 700</p> -->
                                    </div>
                                </div>
                            </a>


                        </div>
                    </div>
                    <!-- product gorup 9 inground led burial light -->
                    <div class="product-group" id="Inground-led-burial">
                        <h3 class="product-group-title">Inground LED Burial Lights</h3>
                        <div class="products-container">

                            <a href="outdoor-product-detail-page.php?id=31" class="product-card-link">
                                <div class="product-card" data-price="550">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/imh-o-116.png"
                                            alt="Smart Watch" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/img-o-118.jpg"
                                            alt="Outdoor Surface Step/Wall Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Inground LED Burial Light</h3>
                                        <div class="product-model"><span>Model:</span> SLGB0328-3</div>
                                        <!-- <p class="product-price">₹ 550</p> -->
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=32" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/img-o-115.jpg"
                                            alt="Wireless Headphones" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/img-o-126.jpg"
                                            alt="Outdoor Surface Step/Wall Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Inground LED Burial Light</h3>
                                        <div class="product-model"><span>Model:</span> SLGB0328-7</div>
                                        <!-- <p class="product-price">₹ 700</p> -->
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=33" class="product-card-link">
                                <div class="product-card" data-price="650">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/img-o-113.png"
                                            alt="Portable Speaker" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/img-o-123.jpg"
                                            alt="Outdoor Surface Step/Wall Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Inground LED Burial Light</h3>
                                        <div class="product-model"><span>Model:</span> SLGB0328-12</div>
                                        <!-- <p class="product-price">₹ 650</p> -->
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=34" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/img-o-114.jpg"
                                            alt="DSLR Camera" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/img-o-121.jpg"
                                            alt="Outdoor Surface Step/Wall Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Inground LED Burial Light</h3>
                                        <div class="product-model"><span>Model:</span> SLGB0328-18</div>
                                        <!-- <p class="product-price">₹ 950</p> -->
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=35" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/img-o-107.jpg"
                                            alt="DSLR Camera" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/img-o-120.jpg"
                                            alt="Outdoor Surface Step/Wall Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Inground LED Burial Light</h3>
                                        <div class="product-model"><span>Model:</span> SLGB0328-24</div>
                                        <!-- <p class="product-price">₹ 950</p> -->
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=36" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/img-o-111.jpg"
                                            alt="DSLR Camera" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/img-o-122.jpg"
                                            alt="Outdoor Surface Step/Wall Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Inground LED Burial Light</h3>
                                        <div class="product-model"><span>Model:</span> SLGB0328-30</div>
                                        <!-- <p class="product-price">₹ 950</p> -->
                                    </div>
                                </div>
                            </a>


                            <a href="outdoor-product-detail-page.php?id=37" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/img-o-127.jpg"
                                            alt="DSLR Camera" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/img-o-135.jpg"
                                            alt="Outdoor Surface Step/Wall Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Symmetric Inground LED Burial Light</h3>
                                        <div class="product-model"><span>Model:</span> SLGB1228</div>
                                        <!-- <p class="product-price">₹ 950</p> -->
                                    </div>
                                </div>
                            </a>


                            <a href="outdoor-product-detail-page.php?id=38" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/img-o-146.jpg"
                                            alt="DSLR Camera" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/img-o-139.jpg"
                                            alt="Outdoor Surface Step/Wall Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Tiltable Inground LED Burial Light</h3>
                                        <div class="product-model"><span>Model:</span> SLGB1028</div>
                                        <!-- <p class="product-price">₹ 950</p> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- product group 10 Mini Inground Lights -->

                    <div class="product-group" id="Mini-Inground-Lights">
                        <h3 class="product-group-title">Mini Inground Lights</h3>
                        <div class="products-container">


                            <a href="outdoor-product-detail-page.php?id=39" class="product-card-link">
                                <div class="product-card" data-price="550">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/img-o-155.jpg"
                                            alt="Outdoor Narrow Beam Uplighter" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/img-o-158.jpg"
                                            alt="Outdoor Narrow Beam Uplighter-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Mini Inground Light</h3>
                                        <div class="product-model"><span>Model:</span> SLGB-350</div>
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=40" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/img-o-151.jpg"
                                            alt="Outdoor Narrow Beam Uplighter" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/img-o-161.jpg"
                                            alt="Outdoor Narrow Beam Uplighter-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Mini Inground Light</h3>
                                        <div class="product-model"><span>Model:</span> SLGB-351</div>
                                        <!-- <p class="product-price">₹ 700</p> -->
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=41" class="product-card-link">
                                <div class="product-card" data-price="650">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/img-o-153.jpg"
                                            alt="Outdoor Narrow Beam Uplighter" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/img-o-164.jpg"
                                            alt="Outdoor Narrow Beam Uplighter-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Mini Inground Light</h3>
                                        <div class="product-model"><span>Model:</span> SLGB-352</div>
                                        <!-- <p class="product-price">₹ 650</p> -->
                                    </div>
                                </div>
                            </a>


                             <a href="outdoor-product-detail-page.php?id=42" class="product-card-link">
                                <div class="product-card" data-price="550">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/img-o-157.jpg"
                                            alt="Outdoor Narrow Beam Uplighter" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/img-o-161.jpg"
                                            alt="Outdoor Narrow Beam Uplighter-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Mini Inground Light</h3>
                                        <div class="product-model"><span>Model:</span> SLGB-361</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

                    <!-- product group 11 narrow Beam uplighters -->

                    <div class="product-group" id="narrow-beam-lights">
                        <h3 class="product-group-title">Outdoor Narrow Beam Uplighters</h3>
                        <div class="products-container">

        <a href="outdoor-product-detail-page.php?id=43" class="product-card-link">
                                <div class="product-card" data-price="650">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/nbu-3.png"
                                            alt="Outdoor Narrow Beam Uplighter" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/nbu-2use.png"
                                            alt="Outdoor Narrow Beam Uplighter-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Narrow Beam Uplighter</h3>
                                        <div class="product-model"><span>Model:</span> SL-668-20W</div>
                                        <!-- <p class="product-price">₹ 650</p> -->
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=44" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/n-b-u-2.png"
                                            alt="Outdoor Narrow Beam Uplighter" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/img-o-172.jpg"
                                            alt="Outdoor Narrow Beam Uplighter-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Narrow Beam Uplighter</h3>
                                        <div class="product-model"><span>Model:</span> SL-766</div>
                                        <!-- <p class="product-price">₹ 700</p> -->
                                    </div>
                                </div>
                            </a>

                    

                            <a href="outdoor-product-detail-page.php?id=45" class="product-card-link">
                                <div class="product-card" data-price="550">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/n-b-u-2.png"
                                            alt="Outdoor Narrow Beam Uplighter" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/N-B-U/nbu-1use.png"
                                            alt="Outdoor Narrow Beam Uplighter-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Narrow Beam Uplighter</h3>
                                        <div class="product-model"><span>Model:</span> SL-767</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

                    <!-- product group 12 solar garden lights -->

                    <div class="product-group" id="solar-garden-lights">
                        <h3 class="product-group-title">Outdoor Solar Garden Lights</h3>
                        <div class="products-container">

                            <a href="outdoor-product-detail-page.php?id=46" class="product-card-link">
                                <div class="product-card" data-price="550">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/s-l-2.jpg"
                                            alt="Outdoor Solar Garden Light" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/sgl-iuse.png"
                                            alt="Outdoor Solar Garden Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Solar Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SLSUN-9900</div>
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=47" class="product-card-link">
                                <div class="product-card" data-price="700">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/s-l-3.jpg"
                                            alt="Outdoor Solar Garden Light" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/sgl-2use.png"
                                            alt="Outdoor Solar Garden Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Solar Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SLR 9901</div>
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=48" class="product-card-link">
                                <div class="product-card" data-price="650">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/s-l-4.jpg"
                                            alt="Outdoor Solar Garden Light" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/sgl-3use.png"
                                            alt="Outdoor Solar Garden Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Solar Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SLR 9903</div>
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=49" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/s-l-7.jpg"
                                            alt="Outdoor Solar Garden Light" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/sgl-4use.png"
                                            alt="Outdoor Solar Garden Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Solar Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SLSUN-9902</div>
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=50" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/s-l-9.jpg"
                                            alt="Outdoor Solar Garden Light" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/sgl-5use.png"
                                            alt="Outdoor Solar Garden Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Solar Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SL SUN-9905GT-3IN1</div>
                                    </div>
                                </div>
                            </a>
                            <a href="outdoor-product-detail-page.php?id=51" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/s-l-6.png"
                                            alt="Outdoor Solar Garden Light" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/sgl-6use.png"
                                            alt="Outdoor Solar Garden Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Solar Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SL SUN-9906PL-6000K</div>
                                    </div>
                                </div>
                            </a>
                            <a href="outdoor-product-detail-page.php?id=52" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/s-l-11.jpg"
                                            alt="Outdoor Solar Garden Light" class="default-image">
                                        <img src="assets/img/outdoor-light-products-img/solar-garden-light/sgl-7use.png"
                                            alt="Outdoor Solar Garden Light-use" class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Solar Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SL SUN-9907-SPIKE-RGB</div>
                                    </div>
                                </div>
                            </a>
                           
                        </div>
                    </div>
 <!-- product group 13 Automatic-Sensor-Based-Solar-Garden-Bollard-Lights -->

                    <div class="product-group" id="Automatic-Sensor-Based-Solar-Garden-Bollard-Lights">
                        <h3 class="product-group-title">Automatic Sensor Based Solar Garden Bollard Lights</h3>
                        <div class="products-container">



                             <a href="outdoor-product-detail-page.php?id=53" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/sensor/s-l-20.jpg"
                                            alt="Automatic Sensor Based Outdoor Solar Garden Light"
                                            class="default-image">
                                        <img src="assets/img/sensor/s-l-17.webp"
                                            alt="Automatic Sensor Based Outdoor Solar Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Automatic Sensor Based Solar Garden Bollard Light</h3>
                                        <div class="product-model"><span>Model:</span> SLR BL 9999</div>
                                        <!-- <p class="product-price">₹ 950</p> -->
                                    </div>
                                </div>
                            </a>

                         

                        </div>
                    </div>

                    <!-- product group 14 Outdoor Garden Lights -->

                    <div class="product-group" id="Outdoor-Garden-Lights">
                        <h3 class="product-group-title">Outdoor Garden Lights</h3>
                        <div class="products-container">



                             <a href="outdoor-product-detail-page.php?id=54" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-1-1.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-1use.png"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SL CY 2007</div>
                                        
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=55" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-1-1.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-1use.png"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SL CY 2012</div>
                                    </div>
                                </div>
                            </a>

                             <a href="outdoor-product-detail-page.php?id=56" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-2.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out2use.png"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SL CYWL 2007</div>
                                    </div>
                                </div>
                            </a>
                             <a href="outdoor-product-detail-page.php?id=57" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-3.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out2use.png"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SL CYWL 2012</div>
                                    </div>
                                </div>
                            </a>
                         
                              <a href="outdoor-product-detail-page.php?id=58" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-4.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-4.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SL CY 2003C</div>
                                    </div>
                                </div>
                            </a>

                              <a href="outdoor-product-detail-page.php?id=59" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-5.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-5.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SL CY 2007C</div>
                                    </div>
                                </div>
                            </a>

                              <a href="outdoor-product-detail-page.php?id=60" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-6.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-6use.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SL CY 2012C</div>
                                    </div>
                                </div>
                            </a>

                              <a href="outdoor-product-detail-page.php?id=61" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-7.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-10.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SL CY 3002</div>
                                    </div>
                                </div>
                            </a>

                              <a href="outdoor-product-detail-page.php?id=62" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-8.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-10.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SL CY 3003</div>
                                    </div>
                                </div>
                            </a>

                              <a href="outdoor-product-detail-page.php?id=63" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-9.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-7use.png"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SL CY 3004</div>
                                    </div>
                                </div>
                            </a>

                             <a href="outdoor-product-detail-page.php?id=64" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-12.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-12.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SL CY 2003</div>
                                    </div>
                                </div>
                            </a>

                             <a href="outdoor-product-detail-page.php?id=65" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-11.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-11.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SL CY 2005</div>
                                    </div>
                                </div>
                            </a>

                             <a href="outdoor-product-detail-page.php?id=66" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-13.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-11use.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SL CY 2009</div>
                                    </div>
                                </div>
                            </a>

                             <a href="outdoor-product-detail-page.php?id=67" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-14.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-11use.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SL CY 2010</div>
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=68" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-15.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-15.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SL CY-251</div>
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=69" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-16.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-16.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SL CY-252</div>
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=70" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-17.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-17.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> L CY-253</div>
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=71" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-18.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-18.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SL CY-254</div>
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=72" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-19.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-19use.png"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SL CY-255</div>
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=73" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-20.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-20use.png"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SL CY-236</div>
                                    </div>
                                </div>
                            </a>

                            <!-- <a href="outdoor-product-detail-page.php?id=74" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-21.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-21use.png"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SL CY-236</div>
                                    </div>
                                </div>
                            </a> -->

                             <a href="outdoor-product-detail-page.php?id=75" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-22.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-22.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SL CY 663</div>
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=76" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-23.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-23use.png"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SL 665K</div>
                                    </div>
                                </div>
                            </a>

                             <a href="outdoor-product-detail-page.php?id=77" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-24.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-23use.png"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SL 666K</div>
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=78" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-25.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-25.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Garden Light</h3>
                                        <div class="product-model"><span>Model:</span> SL 667</div>
                                    </div>
                                </div>
                            </a>

                      


                        </div>
                    </div>



                    <!-- product group 15 Outdoor Surface/Wall Foot Lights -->

                    <div class="product-group" id="Outdoor-Surface-Wall-Foot-Lights">
                        <h3 class="product-group-title">Outdoor Surface/Wall Foot Lights</h3>
                        <div class="products-container">

       <a href="outdoor-product-detail-page.php?id=79" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-26.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-26.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Surface/Wall Foot Light</h3>
                                        <div class="product-model"><span>Model:</span> SL CY SF 2809</div>
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=80" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-27.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-27.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Surface/Wall Foot Light</h3>
                                        <div class="product-model"><span>Model:</span> SL FL SF120</div>
                                    </div>
                                </div>
                            </a>

                             <a href="outdoor-product-detail-page.php?id=81" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-29.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-30.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Surface/Wall Foot Light</h3>
                                        <div class="product-model"><span>Model:</span> SL FL SF121</div>
                                    </div>
                                </div>
                            </a>

                         

                        </div>
                    </div>

                    <!-- product group 16 Outdoor Recessed Foot Lights -->

                    <div class="product-group" id="Outdoor-Recessed-Foot-Lights">
                        <h3 class="product-group-title">Outdoor Recessed Foot Lights</h3>
                        <div class="products-container">



                            <a href="outdoor-product-detail-page.php?id=82" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-31.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-31.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Recessed Foot Light</h3>
                                        <div class="product-model"><span>Model:</span> SL FL 801S</div>
                                    </div>
                                </div>
                            </a>

                             <a href="outdoor-product-detail-page.php?id=83" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-32.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-32.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Recessed Foot Light</h3>
                                        <div class="product-model"><span>Model:</span> SL FL RD 801</div>
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=84" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-33.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-33.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Recessed Foot Light</h3>
                                        <div class="product-model"><span>Model:</span> SL FL 801L</div>
                                    </div>
                                </div>
                            </a>

                             <a href="outdoor-product-detail-page.php?id=85" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-34.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-34use.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Recessed Foot Light</h3>
                                        <div class="product-model"><span>Model:</span> SL F10403</div>
                                    </div>
                                </div>
                            </a>


                         

                        </div>
                    </div>

                     <!-- product group 17 Outdoor Wall Lights -->

                    <div class="product-group" id="Outdoor-Wall-Lights">
                        <h3 class="product-group-title">Outdoor Wall Lights</h3>
                        <div class="products-container">



                            <a href="outdoor-product-detail-page.php?id=86" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-36.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-36.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Wall Light</h3>
                                        <div class="product-model"><span>Model:</span> SL CY 310</div>
                                    </div>
                                </div>
                            </a>

                             <a href="outdoor-product-detail-page.php?id=87" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-37.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-37.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Wall Light</h3>
                                        <div class="product-model"><span>Model:</span> SL CY 234</div>
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=88" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-38.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-38.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Wall Light</h3>
                                        <div class="product-model"><span>Model:</span> SL CY 321</div>
                                    </div>
                                </div>
                            </a>

                             <a href="outdoor-product-detail-page.php?id=89" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-39.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-39.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Wall Light</h3>
                                        <div class="product-model"><span>Model:</span> SL CY 319</div>
                                    </div>
                                </div>
                            </a>

                               <a href="outdoor-product-detail-page.php?id=90" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-40.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-40use.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Wall Light</h3>
                                        <div class="product-model"><span>Model:</span> SL CY 360</div>
                                    </div>
                                </div>
                            </a>

                               <a href="outdoor-product-detail-page.php?id=91" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-41.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-41.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Wall Light</h3>
                                        <div class="product-model"><span>Model:</span> SLD 306</div>
                                    </div>
                                </div>
                            </a>

                               <a href="outdoor-product-detail-page.php?id=92" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-42.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-42.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Wall Light</h3>
                                        <div class="product-model"><span>Model:</span> SLD 306-2</div>
                                    </div>
                                </div>
                            </a>
                            
                               <a href="outdoor-product-detail-page.php?id=93" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-43.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-43.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Wall Light</h3>
                                        <div class="product-model"><span>Model:</span> SL WL 883</div>
                                    </div>
                                </div>
                            </a>

                               <a href="outdoor-product-detail-page.php?id=94" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-44.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-44.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Wall Light</h3>
                                        <div class="product-model"><span>Model:</span> SLD 307</div>
                                    </div>
                                </div>
                            </a>

                             <a href="outdoor-product-detail-page.php?id=95" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-45.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-45.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Wall Light</h3>
                                        <div class="product-model"><span>Model:</span> SLD 307-2</div>
                                    </div>
                                </div>
                            </a>

                         

                        </div>
                    </div>

                   <!-- product group 18 Outdoor Bollard Lights -->

                    <div class="product-group" id="Outdoor-Bollard-Lights">
                        <h3 class="product-group-title">Outdoor Bollard Lights</h3>
                        <div class="products-container">



                            <a href="outdoor-product-detail-page.php?id=96" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-46.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-46use.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Bollard Light</h3>
                                        <div class="product-model"><span>Model:</span> SL BL 883</div>
                                    </div>
                                </div>
                            </a>

                             <a href="outdoor-product-detail-page.php?id=97" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-48.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-48.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Bollard Light</h3>
                                        <div class="product-model"><span>Model:</span> SL BL 1122-6</div>
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=98" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-47.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-48use.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Bollard Light</h3>
                                        <div class="product-model"><span>Model:</span> SL BL 1123-8</div>
                                    </div>
                                </div>
                            </a>

                             <a href="outdoor-product-detail-page.php?id=99" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-49.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-49.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Bollard Light</h3>
                                        <div class="product-model"><span>Model:</span> SL BL 1124-6</div>
                                    </div>
                                </div>
                            </a>

                           <a href="outdoor-product-detail-page.php?id=100" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-50.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-50.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Bollard Light</h3>
                                        <div class="product-model"><span>Model:</span> SL BL 1125-8</div>
                                    </div>
                                </div>
                            </a>
                         

                        </div>
                    </div>


                    <!-- product group 19 Outdoor Gate Lights -->

                    <div class="product-group" id="Outdoor-Gate-Lights">
                        <h3 class="product-group-title">Outdoor Gate Lights</h3>
                        <div class="products-container">



                            <a href="outdoor-product-detail-page.php?id=101" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-51.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-51.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Gate Light</h3>
                                        <div class="product-model"><span>Model:</span> SL GT 882</div>
                                    </div>
                                </div>
                            </a>

                             <a href="outdoor-product-detail-page.php?id=102" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-52.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-52.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Gate Light</h3>
                                        <div class="product-model"><span>Model:</span> SL GT 883</div>
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=103" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-53.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-53.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Gate Light</h3>
                                        <div class="product-model"><span>Model:</span> SL GT 901S</div>
                                    </div>
                                </div>
                            </a>

                             <a href="outdoor-product-detail-page.php?id=104" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-55.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-55.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Gate Light</h3>
                                        <div class="product-model"><span>Model:</span> SL GT 901B</div>
                                    </div>
                                </div>
                            </a>

                           <a href="outdoor-product-detail-page.php?id=105" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-56.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-56.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Gate Light</h3>
                                        <div class="product-model"><span>Model:</span> SL GT 884</div>
                                    </div>
                                </div>
                            </a>

                             <a href="outdoor-product-detail-page.php?id=106" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-60.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-63use.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Gate Light</h3>
                                        <div class="product-model"><span>Model:</span> SL GT 885</div>
                                    </div>
                                </div>
                            </a>

                             <a href="outdoor-product-detail-page.php?id=107" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-61.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-61use.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Gate Light</h3>
                                        <div class="product-model"><span>Model:</span> SL GT 888</div>
                                    </div>
                                </div>
                            </a>
                         

                        </div>
                    </div>

                    <!-- product group 20 Outdoor Recessed Ground Burial Wall Washer -->

                    <div class="product-group" id="Outdoor-Recessed-Ground-Burial-Wall-Washers">
                        <h3 class="product-group-title">Outdoor Recessed Ground Burial Wall Washers</h3>
                        <div class="products-container">



                            <a href="outdoor-product-detail-page.php?id=108" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-62.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-62.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Recessed Ground Burial Wall Washer</h3>
                                        <div class="product-model"><span>Model:</span> SL GB-WWR 106</div>
                                    </div>
                                </div>
                            </a>

                             <a href="outdoor-product-detail-page.php?id=109" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                         <img src="assets/img/outdoor/out-62.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-62.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Recessed Ground Burial Wall Washer</h3>
                                        <div class="product-model"><span>Model:</span> SL GB-WWR 118</div>
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=110" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                         <img src="assets/img/outdoor/out-62.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-62.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Recessed Ground Burial Wall Washer</h3>
                                        <div class="product-model"><span>Model:</span> SL GB-WWR 124</div>
                                    </div>
                                </div>
                            </a>
                         
                            <a href="outdoor-product-detail-page.php?id=111" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                         <img src="assets/img/outdoor/out-65.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-65.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Recessed Ground Burial Wall Washer</h3>
                                        <div class="product-model"><span>Model:</span> SL GB 492</div>
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=112" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                         <img src="assets/img/outdoor/out-66.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-66.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Recessed Ground Burial Wall Washer</h3>
                                        <div class="product-model"><span>Model:</span> SL GB 462-6</div>
                                    </div>
                                </div>
                            </a>

                            <a href="outdoor-product-detail-page.php?id=113" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                         <img src="assets/img/outdoor/out-67.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-67.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Recessed Ground Burial Wall Washer</h3>
                                        <div class="product-model"><span>Model:</span> SL GB 462-12</div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

                    <!-- product group 21 Outdoor IP68 Underwater/Outdoor Flexible Wall Washer -->

                    <div class="product-group" id="Outdoor-IP68-Underwater-Outdoor-Flexible-Wall-Washer">
                        <h3 class="product-group-title">Outdoor IP68 Underwater/Outdoor Flexible Wall Washers</h3>
                        <div class="products-container">



                            <a href="outdoor-product-detail-page.php?id=114" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-f-1.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-f-1.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor IP68 Underwater/Outdoor Flexible Wall Washer</h3>
                                        <div class="product-model"><span>Model:</span> SL FX WWR-124-12</div>
                                    </div>
                                </div>
                            </a>

                             <a href="outdoor-product-detail-page.php?id=115" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                         <img src="assets/img/outdoor/out-f-2.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-f-2.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor IP68 Underwater/Outdoor Flexible Wall Washer</h3>
                                        <div class="product-model"><span>Model:</span> SL FX WWP-124-18</div>
                                    </div>
                                </div>
                            </a>

                         

                        </div>
                    </div>

                    <!-- product group 22 Outdoor Wall Washers -->

                    <div class="product-group" id="Outdoor-Wall-Washers">
                        <h3 class="product-group-title">Outdoor Wall Washers</h3>
                        <div class="products-container">



                            <a href="outdoor-product-detail-page.php?id=116" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/outdoor/out-69.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-69.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Wall Washer</h3>
                                        <div class="product-model"><span>Model:</span> SL 250 WWR</div>
                                    </div>
                                </div>
                            </a>

                             <a href="outdoor-product-detail-page.php?id=117" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                         <img src="assets/img/outdoor/out-70.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-70.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Wall Washer</h3>
                                        <div class="product-model"><span>Model:</span> SL 224 WWR with Wiser</div>
                                    </div>
                                </div>
                            </a>

                                      <a href="outdoor-product-detail-page.php?id=118" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                         <img src="assets/img/outdoor/out-71.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-71.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Wall Washer</h3>
                                        <div class="product-model"><span>Model:</span> SL 508 WWR</div>
                                    </div>
                                </div>
                            </a>

                                      <a href="outdoor-product-detail-page.php?id=119" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                         <img src="assets/img/outdoor/out-72.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-72.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Wall Washer</h3>
                                        <div class="product-model"><span>Model:</span> RGB 248</div>
                                    </div>
                                </div>
                            </a>

                                      <a href="outdoor-product-detail-page.php?id=120" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                         <img src="assets/img/outdoor/out-73.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-73.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Wall Washer</h3>
                                        <div class="product-model"><span>Model:</span> RGB 248R</div>
                                    </div>
                                </div>
                            </a>

                                      <a href="outdoor-product-detail-page.php?id=121" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                         <img src="assets/img/outdoor/out-72.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-72.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Wall Washer</h3>
                                        <div class="product-model"><span>Model:</span> SLDMX RGB WWR</div>
                                    </div>
                                </div>
                            </a>

                                      <a href="outdoor-product-detail-page.php?id=122" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                         <img src="assets/img/outdoor/out-75.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/outdoor/out-75.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">Outdoor Wall Washer</h3>
                                        <div class="product-model"><span>Model:</span> DECORDER</div>
                                    </div>
                                </div>
                            </a>

                            

                         

                        </div>
                    </div>







                     <!-- product group 18 SL Outdoor Lights - Cloudy Series -->
                    <div class="product-group" id="SL-Outdoor-Lights-Cloudy-Series">
                        <h3 class="product-group-title">SL Outdoor Lights - Cloudy Series</h3>
                        <div class="products-container">

                         <a href="indoor-p.php?id=70" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-49.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-49.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Outdoor Lights - Cloudy Series</h3>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-p.php?id=71" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-46.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-46.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Outdoor Lights - Cloudy Series</h3>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>


                     <!-- product group 17 SL Foot Lights -->
                    <div class="product-group" id="SL-Foot-Lights">
                        <h3 class="product-group-title">SL Foot Lights</h3>
                        <div class="products-container">

                            <a href="indoor-p.php?id=72" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-43.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-43.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Foot Lights</h3>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

 <!-- product group 16 SL Outdoor Wall / Ground Burial Lights -->
                    <div class="product-group" id="SL-Outdoor-Wall-Ground-Burial-Lights">
                        <h3 class="product-group-title">SL Outdoor Wall / Ground Burial Lights</h3>
                        <div class="products-container">

                        <a href="indoor-p.php?id=73" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-42.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-42.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Outdoor Wall / Ground Burial Lights</h3>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-p.php?id=75" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-41.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-41.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Outdoor Wall / Ground Burial Lights</h3>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>



                    <!-- product group 15 SL Parking Lights -->
                    <div class="product-group" id="SL-Parking-Lights">
                        <h3 class="product-group-title">SL Parking Lights</h3>
                        <div class="products-container">

                            <a href="indoor-p.php?id=76" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-35.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-35.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Parking Lights</h3>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>



                     <!-- product group 14 SL Outdoor Surface COB Downlights -->
                    <div class="product-group" id="SL-Outdoor-Surface-COB-Downlights">
                        <h3 class="product-group-title">SL Outdoor Surface COB Downlights</h3>
                        <div class="products-container">

                            <a href="indoor-p.php?id=77" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-34.webp"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-34.webp"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Outdoor Surface COB Downlights</h3>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>


                     <!-- product group 13 SL Garden Lights -->
                    <div class="product-group" id="SL-Garden-Lights">
                        <h3 class="product-group-title">SL Garden Lights</h3>
                        <div class="products-container">

                            <a href="indoor-p.php?id=78" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-33.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-33.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Garden Lights</h3>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>


                    <!-- product group 12 SL Bollard Lights -->
                    <div class="product-group" id="SL-Bollard-Lights">
                        <h3 class="product-group-title">SL Bollard Lights</h3>
                        <div class="products-container">

                            <a href="indoor-p.php?id=67" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-32.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-32.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Bollard Lights</h3>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

<!-- product group 11 SL 360° Trick Light -->
                    <div class="product-group" id="SL-360°-Trick-Light">
                        <h3 class="product-group-title">SL 360° Trick Light</h3>
                        <div class="products-container">

                            <a href="indoor-p.php?id=68" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-30.webp"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-30.webp"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL 360° Trick Light</h3>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>


<!-- product group 10 SL Wall Washer -->
                    <div class="product-group" id="SL-Wall-Washer">
                        <h3 class="product-group-title">SL Wall Washer</h3>
                        <div class="products-container">

                            <a href="indoor-p.php?id=69" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-50.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-50.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Wall Washer</h3>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>


                    <!-- product group 9 SL Underwater Lights -->
                    <div class="product-group" id="SL-Underwater-Lights">
                        <h3 class="product-group-title">SL Underwater Lights</h3>
                        <div class="products-container">

                            <a href="indoor-p.php?id=79" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-20.png"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-20.png"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Underwater Lights</h3>
                                    </div>
                                </div>
                            </a>

                             <a href="indoor-p.php?id=80" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-17.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-17.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Underwater Lights</h3>
                                    </div>
                                </div>
                            </a>


                        </div>
                    </div>



                    <!-- product group 8 SL Drivers for Underwater Lights -->
                    <div class="product-group" id="SL-Drivers-for-Underwater-Lights">
                        <h3 class="product-group-title">SL Drivers for Underwater Lights</h3>
                        <div class="products-container">

                            <a href="indoor-p.php?id=81" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-16.png"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-16.png"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Drivers for Underwater Lights</h3>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>


                    <!-- product group 7 SL High Bay Lights -->
                    <div class="product-group" id="SL-High-Bay-Lights">
                        <h3 class="product-group-title">SL High Bay Lights</h3>
                        <div class="products-container">

                            <a href="indoor-p.php?id=82" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-13.webp"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-13.webp"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SSL High Bay Lights</h3>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>


<!-- product group 6 SL COB LED Flood Lights -->
                    <div class="product-group" id="SL-COB-LED-Flood-Lights">
                        <h3 class="product-group-title">SL COB LED Flood Lights</h3>
                        <div class="products-container">

                            <a href="indoor-p.php?id=83" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-12.webp"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-12.webp"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL COB LED Flood Lights</h3>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

  <!-- product group 5 SL SMD LED Flood Lights - Nano Series -->
                    <div class="product-group" id="SL-SMD-LED-Flood-Lights-Nano-Series">
                        <h3 class="product-group-title">SL SMD LED Flood Lights - Nano Series</h3>
                        <div class="products-container">

                            <a href="indoor-p.php?id=84" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-10.png"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-10.png"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL SMD LED Flood Lights - Nano Series</h3>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

                    <!-- product group 4 SL SMD LED Flood Lights - Blush Series -->
                    <div class="product-group" id="SL-SMD-LED-Flood-Lights-Blush-Series">
                        <h3 class="product-group-title">SL SMD LED Flood Lights - Blush Series</h3>
                        <div class="products-container">

                            <a href="indoor-p.php?id=85" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-8.png"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-8.png"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL SMD LED Flood Lights - Blush Series</h3>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>


                    <!-- product group 3 SL Colored LED Flood Lights - Splash Series -->
                    <div class="product-group" id="SL-Colored-LED-Flood-Lights-Splash-Series">
                        <h3 class="product-group-title">SL Colored LED Flood Lights - Splash Series</h3>
                        <div class="products-container">

                            <a href="indoor-p.php?id=86" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-7.png"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-7.png"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Colored LED Flood Lights - Splash Series</h3>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>


                    <!-- product group 2 SL Edison LED Street Lights -->
                    <div class="product-group" id="SL-Edison-LED-Street-Lights">
                        <h3 class="product-group-title">SL Edison LED Street Lights</h3>
                        <div class="products-container">

                            <a href="indoor-p.php?id=87" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-6.webp"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-6.webp"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Edison LED Street Lights</h3>
                                    </div>
                                </div>
                            </a>

                            <a href="indoor-p.php?id=88" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/oou-sl-5.jpg"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/zz-indoor/oou-sl-5.jpg"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL Edison LED Street Lights</h3>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

                    <!-- product group 1 SL OSRAM LED Street Lights -->
                    <div class="product-group" id="SL-OSRAM-LED-Street-Lights">
                        <h3 class="product-group-title">SL OSRAM LED Street Lights</h3>
                        <div class="products-container">

                            <a href="indoor-p.php?id=89" class="product-card-link">
                                <div class="product-card" data-price="950">
                                    <div class="product-image">
                                        <img src="assets/img/zz-indoor/ou-sl-1.png"
                                            alt="Outdoor Garden Light"
                                            class="default-image">
                                        <img src="assets/img/zz-indoor/ou-sl-1.png"
                                            alt="Outdoor Garden Light-use"
                                            class="hover-image">
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">SL OSRAM LED Street Lights</h3>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>




                    <!-- Additional product groups would go here -->
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