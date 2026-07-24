<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LED Aluminium Profiles | Precision & Style by Sunny Light</title>
<meta name="description" content="High-quality LED aluminium profiles for flexible, recessed, and surface applications — combining design precision and functional lighting performance.">
<meta name="keywords" content="LED aluminium profiles, LED linear profiles, recessed profile, surface profile, flexible LED profile, LED channel, architectural lighting profiles">


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
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <link rel="shortcut icon" href="assets\img\logoH__1_-removebg-preview.png" type="image/x-icon">

    <style>
        .product-card {
            border-radius: 12px;
            background: #fff;
            padding: 16px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            display: flex;
            flex-direction: row;
            gap: 20px;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .product-card img {
            border-radius: 8px;
        }

        .product-details table {
            font-size: 14px;
        }

        .dimension-image {
            height: 180px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .dimension-image img {
            max-height: 100%;
            max-width: 100%;
            object-fit: contain;
            border: 1px solid #ddd;
            border-radius: 6px;
        }

        .profile-btn {
            background-color: #2457AA !important;
            color: #fff !important;
        }

        @media (max-width: 768px) {
            /* ===== MOBILE VIEW ===== */
    @media (max-width: 768px) {
        .product-card {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        /* both images stacked on top */
        .product-images {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            gap: 10px;
        }

        .product-images img {
            width: 100%;
            max-width: 350px;
            height: auto;
            object-fit: contain;
            border-radius: 10px;
        }

        /* table in middle below both images */
        .product-details {
            width: 95%;
            background: #fff;
            border-radius: 10px;
            padding: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            margin-top: 10px;
        }

        .product-details table {
            width: 100%;
            font-size: 13px;
            margin: 0 auto;
            border-collapse: collapse;
        }

        .product-details table th,
        .product-details table td {
            padding: 6px 8px;
            text-align: left;
        }

        .product-details table th {
            width: 45%;
            font-weight: 600;
            color: #333;
        }

        .product-details table td {
            color: #555;
        }

        .product-details table tr {
            border-bottom: 1px solid #eee;
        }

        .product-details table tr:last-child {
            border-bottom: none;
        }
    }
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

    <!-- Production Category Section -->
    <section class="productpage-category mt-4">
        <div class="page-width main-productcategory">
            <!-- Sidebar -->
            <div class="mysidebar">
                <div class="mysidebar-section">
                    <div class="mysidebar-header">
                        <h4>Profile Lights</h4>
                        <button class="dropdown-toggle" id="mobileDropdownBtn">
        <i class="fa fa-chevron-down" ></i>
      </button>
                    </div>
                    <div class="mysidebar-content" id="mobileDropdownContent">
                        <ul class="mysidebar-list">
                            <li><a href="#Led-Aluminium-Profiles" class="filter-link" data-category="step-light">Led
                                    Aluminium Profiles</a></li>
                            <li><a href="#Sl-Profiles" class="filter-link" data-category="step-light">SL Profiles</a>
                            <li><a href="#Ip67-Flexible-Neon-Profiles" class="filter-link" data-category="step-light">Ip67 Flexible Neon Profiles</a>
                            <li><a href="#Ip67-Flexible-Neon-Profile-Accessories" class="filter-link" data-category="step-light">IP67 Flexible Neon Profile Accessories</a>
                            <li><a href="#C-Series-Recessed-Flexible-Neon-Profile-Without-Thread" class="filter-link" data-category="step-light">C Series Recessed Flexible Neon Profile Without Thread</a>
                            <li><a href="#D-Series-Led-Flexible-Neon-Profile" class="filter-link" data-category="step-light">D Series LED Flexible Neon Profile</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Product Grid -->
            <div class="products-grid">
                <div class="products-container">
                    <!-- Product Group -->
                    <div class="product-group" id="Led-Aluminium-Profiles">
                        <h3 class="product-group-title">Led Aluminium Profiles</h3>

                        <div class="row">
                            <!-- Product Cards Start -->
                            <!-- Column 1 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-1.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL869</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx9x9 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>5.3 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/p-2.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn  mt-2 request-btn profile-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 2 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-3.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL870</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx9x9 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>5.3 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-2.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 3 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-4.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL624</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx10x13 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>8 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-3.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 4 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-5.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL624-839</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx10x12.9 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>8.6 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-4.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 5 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-6.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL624A</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx10x13 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>8 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-6.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 6 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-7.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL624A-839A</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx10x12.9 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>8.6 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-7.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 7 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/pp-7.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL508</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx17x7 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>12.4 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/ppi-7.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 8 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-8.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL508-102C</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx17x7 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>12.4 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-8.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 9 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-9.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL509</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx17.4x7 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>12 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-9.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 10 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-10.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL509-103</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx17x6.85 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>12 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-10.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 11 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-11.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL617A</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx23.5x9.8 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>21.5 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-11.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 12 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-12.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL617-801A</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx23.3x9.7 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>20.7 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-12.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 13 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-13.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL617</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx23.5x9.8 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>21.5 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-13.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 14 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-14.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL617-802A</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx23.5x9.7 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>21.5 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-14.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 15 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-15.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL630</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx12.3x8.6 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>15.3 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-15.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 16 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-16.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL630-885</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx12.3x8.6 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>15.3 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-16.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 17 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-17.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SLV111</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx11x11 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>12 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-17.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 18 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-18.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code"> SL1616</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx16x16 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>12 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-18.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 19 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-19.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL525</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx13.3x6.9 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>12 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-19.jpg" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>

                                    </div>

                                </div>

                            </div>

                            <!-- Column 20 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-20.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL502</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx15x7 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>13 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>



                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-20.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 21 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-21.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL507ZX</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx17.4x12.1 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>12 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>



                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-21.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 22 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-21.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL505</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx17.4x12.1 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>13 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>



                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-21.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 23 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-23.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL605</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx17.5x12.2 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>12 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                                <tr>
                                                    <th>Height</th>
                                                    <td>24.5 mm</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-23.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 24 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-24.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL613</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx19x14.2 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>12 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                                <tr>
                                                    <th>Height</th>
                                                    <td>19 mm</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-24.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 25 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-25.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL613B</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx17x14.2 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>12 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                                <tr>
                                                    <th>Extra</th>
                                                    <td>24 mm</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-25.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>


                            <!-- Column 26 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-27.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL712</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx23.5x27.6mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>19.57 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P(Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                                <tr>
                                                    <th>Extra</th>
                                                    <td>36 mm</td>
                                                </tr>
                                            </tbody>
                                        </table>



                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-27.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 27 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-26.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL712A</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx24x24 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>22.2 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-26.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 28 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-28.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL717</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>50 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>30 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-28.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 29 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-29.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL809</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx35x35 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>33.2 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>





                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-29.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 30 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-30.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL808</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx33.6x34.8mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>33.2 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P(Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>




                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-31.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 31 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-31.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL706</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx49x32 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>45 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>




                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-31.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 32 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-32.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">

                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SLA62</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx35x35 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>33.2 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-32.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 33 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-33.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL810</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx46.58x35 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>33.2 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>



                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-33.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Column 34 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-36.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL820</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx76x76 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>33.2 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-36.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 35 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-34.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL710</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx35.6x66.8 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>32.4 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-34.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 36 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-35.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL707A</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx49.18x75 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>29 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>



                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-35.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>



                            <!-- Column 37 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-37.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">

                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL811a</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx75.2x35 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>50 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-37.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 38 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-38.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">

                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL9032</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx75x32 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>75 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-38.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 39 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-39.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">

                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL818</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx100x55 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>80 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-39.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 40 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-40.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL9099</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx102x35 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>81 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-40.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 41 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-40.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">

                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL6262-560</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx62x62 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>60 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-40.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 42 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-41.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL777</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx102x35 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>33.2 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-41.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 43 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-42.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL211</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx105x40 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>33.2 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-42.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 44 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-43.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL2126GB</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx21.6x25.8 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>12.6 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-43.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 45 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-44.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL3020</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx30x20 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>12.5 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-44.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 46 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-46.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL802</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx53.2x26.6 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>12 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-46.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 47 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-47.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL2109B</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx20.8x8.8 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>5 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                                <tr>
                                                    <th>Height</th>
                                                    <td>23.8 mm</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-47.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Cards End -->
                        </div> <!-- End Row -->




                    </div> <!-- End Product Group -->

                    <!-- Product Group -->
                    <div class="product-group" id="Sl-Profiles">
                        <h3 class="product-group-title">SL Profiles</h3>

                        <div class="row">

                            <!-- SL 1212 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/sl-p1.png" alt="SL 1212" class="img-fluid"
                                            style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL 1212</td>
                                                </tr>
                                                <tr>
                                                    <th>Body Color</th>
                                                    <td>Silver Anotise</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/sl-p1-1.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- SL 1515 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/sl-p2.png" alt="SL 1515" class="img-fluid"
                                            style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL 1515</td>
                                                </tr>
                                                <tr>
                                                    <th>Body Color</th>
                                                    <td>Silver Anotise</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/sl-p2-1.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- SL 1515T -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/sl-p3.png" alt="SL 1515T"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL 1515T</td>
                                                </tr>
                                                <tr>
                                                    <th>Body Color</th>
                                                    <td>Silver Anotise</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/sl-p3-1.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- SL 510 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/sl-p4.png" alt="SL 510" class="img-fluid"
                                            style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL 510</td>
                                                </tr>
                                                <tr>
                                                    <th>Body Color</th>
                                                    <td>Silver Anotise</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/sl-p4-1.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- SL 618 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/sl-p5.png" alt="SL 618" class="img-fluid"
                                            style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL 618</td>
                                                </tr>
                                                <tr>
                                                    <th>Body Color</th>
                                                    <td>Silver Anotise</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/sl-p6.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- SL 124 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/sl-p7.png" alt="SL 124" class="img-fluid"
                                            style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL 124</td>
                                                </tr>
                                                <tr>
                                                    <th>Body Color</th>
                                                    <td>Silver Anotise</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/sl-p8.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- SL 1206 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/sl-p9.png" alt="SL 1206" class="img-fluid"
                                            style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL 1206</td>
                                                </tr>
                                                <tr>
                                                    <th>Body Color</th>
                                                    <td>Silver Anotise</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/sl-p10.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- SL 1919 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/sl-p11.png" alt="SL 1919" class="img-fluid"
                                            style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL 1919</td>
                                                </tr>
                                                <tr>
                                                    <th>Body Color</th>
                                                    <td>Silver Anotise</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/sl-p12.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- SL 124T -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/sl-p13.png" alt="SL 124T" class="img-fluid"
                                            style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL 124T</td>
                                                </tr>
                                                <tr>
                                                    <th>Body Color</th>
                                                    <td>Silver Anotise</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/sl-p14.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- SL 2020 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/sl-p15.png" alt="SL 2020" class="img-fluid"
                                            style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL 2020</td>
                                                </tr>
                                                <tr>
                                                    <th>Body Color</th>
                                                    <td>Silver Anotise</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/sl-p16.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- SL 2020T -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/sl-p17.png" alt="SL 2020T"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL 2020T</td>
                                                </tr>
                                                <tr>
                                                    <th>Body Color</th>
                                                    <td>Silver Anotise</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/sl-p18.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- SL 2109B -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/sl-p19.png" alt="SL 2109B"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL 2109B</td>
                                                </tr>
                                                <tr>
                                                    <th>Body Color</th>
                                                    <td>Silver Anotise</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/sl-p20.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- End Row -->
                    </div>
                     <!-- End Product Group -->

              <!-- Product Group -->       
<div class="product-group" id="Ip67-Flexible-Neon-Profiles">
  <h3 class="product-group-title">Ip67 Flexible Neon Profiles</h3>

  <div class="row">
    <!-- Product 1 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-21.png" alt="SL 1010N" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 1010N</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 2 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-22.png" alt="SL 1212N" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 1212N</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 3 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-23.png" alt="SL 1616N" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 1616N</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 4 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-24.png" alt="SL 2020N" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 2020N</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 5 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-25.png" alt="SL 2520N" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 2520N</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 6 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-26.png" alt="SL 3020N" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 3020N</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 7 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-27.png" alt="SL 5025N" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 5025N</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 8 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-28.png" alt="SL 1616 (3 Side) N" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 1616 (3 Side) N</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

  </div> <!-- End Row -->
</div><!-- End Product Group -->
              
                     <!-- Product Group --> 
                      <div class="product-group" id="Ip67-Flexible-Neon-Profile-Accessories">
  <h3 class="product-group-title">IP67 Flexible Neon Profile Accessories</h3>

  <div class="row">
    <!-- Product 1 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-29.png" alt="SL 1010 Back Clamp" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 1010 Back Clamp</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 2 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-30.png" alt="SL 1010 Side Clamp Wire Part" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 1010 Side Clamp Wire Part</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 3 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-31.png" alt="SL 1010 Side Clamp" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 1010 Side Clamp</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 4 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-29.png" alt="SL 1212 Back Clamp" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 1212 Back Clamp</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 5 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-30.png" alt="SL 1212 Side Clamp Wire Part" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 1212 Side Clamp Wire Part</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 6 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-31.png" alt="SL 1212 Side Clamp" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 1212 Side Clamp</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 7 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-29.png" alt="SL 1616 Back Clamp" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 1616 Back Clamp</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 8 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-30.png" alt="SL 1616 Side Clamp Wire Part" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 1616 Side Clamp Wire Part</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 9 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-31.png" alt="SL 1616 Side Clamp" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 1616 Side Clamp</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 1: SL 1616 (3 Side) -->
<div class="col-md-6">
    <div class="product-card">
        <div class="product-image">
            <img src="assets/img/profile-light/sl-29.png" alt="SL 1616 (3 Side) " class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
            <table class="table table-sm table-bordered mb-3">
                <tbody>
                    <tr><th>Product Code</th><td class="product-code">SL 1616 (3 Side) Back Clamp</td></tr>
                    <tr><th>Body Color</th><td>White</td></tr>
                </tbody>
            </table>
            <button class="btn mt-2 request-btn profile-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
    </div>
</div>

<!-- Product 2: SL 1616 (3 Side) Side Clamp -->
<div class="col-md-6">
    <div class="product-card">
        <div class="product-image">
            <img src="assets/img/profile-light/sl-30.png" alt="SL 1616 (3 Side) Side Clamp Wire Part" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
            <table class="table table-sm table-bordered mb-3">
                <tbody>
                    <tr><th>Product Code</th><td class="product-code">SL 1616 (3 Side) Side Clamp Wire Part</td></tr>
                    <tr><th>Body Color</th><td>White</td></tr>
                </tbody>
            </table>
            <button class="btn mt-2 request-btn profile-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
    </div>
</div>

<!-- Product 3: SL 1616 (3 Side) Back Clamp Wire Part -->
<div class="col-md-6">
    <div class="product-card">
        <div class="product-image">
            <img src="assets/img/profile-light/sl-31.png" alt="SL 1616 (3 Side) Side Clamp" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
            <table class="table table-sm table-bordered mb-3">
                <tbody>
                    <tr><th>Product Code</th><td class="product-code">SL 1616 (3 Side) Side Clamp</td></tr>
                    <tr><th>Body Color</th><td>White</td></tr>
                </tbody>
            </table>
            <button class="btn mt-2 request-btn profile-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
    </div>
</div>

<!-- Product 4: SL 2520 Back Clamp -->
<div class="col-md-6">
    <div class="product-card">
        <div class="product-image">
            <img src="assets/img/profile-light/sl-32.png" alt="SL 2520 Back Clamp" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
            <table class="table table-sm table-bordered mb-3">
                <tbody>
                    <tr><th>Product Code</th><td class="product-code">SL 2520 Back Clamp</td></tr>
                    <tr><th>Body Color</th><td>White</td></tr>
                </tbody>
            </table>
            <button class="btn mt-2 request-btn profile-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
    </div>
</div>

<!-- Product 5: SL 2520 Side Clamp Wire Part -->
<div class="col-md-6">
    <div class="product-card">
        <div class="product-image">
            <img src="assets/img/profile-light/sl-30.png" alt="SL 2520 Side Clamp Wire Part" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
            <table class="table table-sm table-bordered mb-3">
                <tbody>
                    <tr><th>Product Code</th><td class="product-code">SL 2520 Side Clamp Wire Part</td></tr>
                    <tr><th>Body Color</th><td>White</td></tr>
                </tbody>
            </table>
            <button class="btn mt-2 request-btn profile-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
    </div>
</div>

<!-- Product 6: SL 2520 Side Clamp -->
<div class="col-md-6">
    <div class="product-card">
        <div class="product-image">
            <img src="assets/img/profile-light/sl-31.png" alt="SL 2520 Side Clamp" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
            <table class="table table-sm table-bordered mb-3">
                <tbody>
                    <tr><th>Product Code</th><td class="product-code">SL 2520 Side Clamp</td></tr>
                    <tr><th>Body Color</th><td>White</td></tr>
                </tbody>
            </table>
            <button class="btn mt-2 request-btn profile-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
    </div>
</div>

<!-- Product 7: SL 3020 Back Clamp -->
<div class="col-md-6">
    <div class="product-card">
        <div class="product-image">
            <img src="assets/img/profile-light/sl-33.png" alt="SL 3020 Back Clamp" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
            <table class="table table-sm table-bordered mb-3">
                <tbody>
                    <tr><th>Product Code</th><td class="product-code">SL 3020 Back Clamp</td></tr>
                    <tr><th>Body Color</th><td>White</td></tr>
                </tbody>
            </table>
            <button class="btn mt-2 request-btn profile-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
    </div>
</div>

<!-- Product 8: SL 3020 Side Clamp Wire Part -->
<div class="col-md-6">
    <div class="product-card">
        <div class="product-image">
            <img src="assets/img/profile-light/sl-34.png" alt="SL 3020 Side Clamp Wire Part" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
            <table class="table table-sm table-bordered mb-3">
                <tbody>
                    <tr><th>Product Code</th><td class="product-code">SL 3020 Side Clamp Wire Part</td></tr>
                    <tr><th>Body Color</th><td>White</td></tr>
                </tbody>
            </table>
            <button class="btn mt-2 request-btn profile-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
    </div>
</div>

<!-- Product 9: SL 3020 Side Clamp -->
<div class="col-md-6">
    <div class="product-card">
        <div class="product-image">
            <img src="assets/img/profile-light/sl-35.png" alt="SL 3020 Side Clamp" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
            <table class="table table-sm table-bordered mb-3">
                <tbody>
                    <tr><th>Product Code</th><td class="product-code">SL 3020 Side Clamp</td></tr>
                    <tr><th>Body Color</th><td>White</td></tr>
                </tbody>
            </table>
            <button class="btn mt-2 request-btn profile-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
    </div>
</div>

<!-- Product 10: SL 5025 Back Clamp -->
<div class="col-md-6">
    <div class="product-card">
        <div class="product-image">
            <img src="assets/img/profile-light/sl-36.png" alt="SL 5025 Back Clamp" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
            <table class="table table-sm table-bordered mb-3">
                <tbody>
                    <tr><th>Product Code</th><td class="product-code">SL 5025 Back Clamp</td></tr>
                    <tr><th>Body Color</th><td>White</td></tr>
                </tbody>
            </table>
            <button class="btn mt-2 request-btn profile-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
    </div>
</div>

<!-- Product 11: SL 5025 Side Clamp Wire Part -->
<div class="col-md-6">
    <div class="product-card">
        <div class="product-image">
            <img src="assets/img/profile-light/sl-37.png" alt="SL 5025 Side Clamp Wire Part" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
            <table class="table table-sm table-bordered mb-3">
                <tbody>
                    <tr><th>Product Code</th><td class="product-code">SL 5025 Side Clamp Wire Part</td></tr>
                    <tr><th>Body Color</th><td>White</td></tr>
                </tbody>
            </table>
            <button class="btn mt-2 request-btn profile-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
    </div>
</div>

<!-- Product 12: SL 5025 Side Clamp -->
<div class="col-md-6">
    <div class="product-card">
        <div class="product-image">
            <img src="assets/img/profile-light/sl-38.png" alt="SL 5025 Side Clamp" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
            <table class="table table-sm table-bordered mb-3">
                <tbody>
                    <tr><th>Product Code</th><td class="product-code">SL 5025 Side Clamp</td></tr>
                    <tr><th>Body Color</th><td>White</td></tr>
                </tbody>
            </table>
            <button class="btn mt-2 request-btn profile-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
    </div>
</div>


    
  </div> <!-- End Row -->
</div>

<!-- Product Group C seriese-->
<div class="product-group" id="C-Series-Recessed-Flexible-Neon-Profile-Without-Thread">
  <h3 class="product-group-title">C Series Recessed Flexible Neon Profile Without Thread</h3>

  <div class="row">
    <!-- Product 1 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/cs1.png" alt="SL-N1010C" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-N1010C</td></tr>
              <tr><th>Size</th><td>10×10MM</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 2 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/cs2.png" alt="SL-N1510C" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-N1510C</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 3 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/cs3.png" alt="SL-N1616C" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-N1616C</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 4 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/cs4.png" alt="SL-N2010C" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-N2010C</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 5 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/cs5.png" alt="SL-N2020C" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-N2020C</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 6 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/cs6.png" alt="SL-N3020C" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-N3020C</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 7 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/cs7.png" alt="SL-N4015C" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-N4015C</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

  </div> <!-- End Row -->
</div>

<!-- Product Group -->
<div class="product-group" id="D-Series-Led-Flexible-Neon-Profile">
  <h3 class="product-group-title">D Series LED Flexible Neon Profile</h3>

  <div class="row">

    <!-- Product 1 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/ds1.png" alt="SL-D1010N" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-D1010N</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 2 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/ds2.png" alt="SL-D1212N" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-D1212N</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 3 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/ds3.png" alt="SL-D1510N" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-D1510N</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 4 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/ds4.png" alt="SL-D1616N" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-D1616N</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 5 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/ds5.png" alt="SL-D2010N" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-D2010N</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 6 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/ds6.png" alt="SL-D2020N" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-D2020N</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 7 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/ds7.png" alt="SL-D2520N" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-D2520N</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 8 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/ds8.png" alt="SL-D3020N" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-D3020N</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 9 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/ds9.png" alt="SL-D16-360" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-D16-360</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 10 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/ds10.png" alt="SL-D26-360" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-D26-360</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

  </div> <!-- End Row -->
</div>


                </div>
            </div>
        </div>
    </section>


     <!-- Modal Form -->
    <div class="modal fade" id="queryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Request Query</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="queryForm" action="profilelgt-prdt-form.php" method="POST">
                        <div class="mb-3">
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control" id="productCode" name="productCode" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="customerName" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="customerName" name="customerName" required>
                        </div>
                        <div class="mb-3">
                            <label for="customerEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="customerEmail" name="customerEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="customerMessage" class="form-label">Message</label>
                            <textarea class="form-control" id="customerMessage" rows="3" name="customerMessage"
                            required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Send Request</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Auto Product Code JS -->
    <script>
        const queryModal = document.getElementById('queryModal');
        queryModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget; // jis button se modal open hua
            const productCard = button.closest('.product-card'); // parent card find
            const productCode = productCard.querySelector('.product-code').innerText.trim();
            const modalInput = queryModal.querySelector('#productCode');
            modalInput.value = productCode; // modal me auto-fill
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

 <?php
    if (!empty($_SESSION['query_success'])) {
        echo '<script>
            Swal.fire({
                icon: "success",
                title: "Your query has been submitted!",
                text: "We will get back to you shortly.",
                confirmButtonText: "OK"
            });
        </script>';
        unset($_SESSION['query_success']); // remove flag
    }
    ?>

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