<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Create your Drea​m wedding with us!, Modern Wedding, Talk to us and we’ll find the best way to work together, Summer Wedding Colors, Wedding Ceremony">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.9.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i|Oswald:200,300,400,500,600,700|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
  
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>

    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-custom-color-6 u-header u-header" id="sec-2dac"><div class="u-clearfix u-sheet u-sheet-1">
  <?php echo "<h1 style=color:red;font-size:15px>Welcome " . $_SESSION['username'] . "</h1>"; ?>
        <a href="logout.php">Logout</a><nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse u-custom-font u-font-montserrat" style="font-size: 1.125rem; letter-spacing: 0px; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-color u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-text-shadow u-custom-text-shadow-blur u-custom-text-shadow-color u-custom-text-shadow-transparency u-custom-text-shadow-x u-custom-text-shadow-y u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="text-shadow: -2px 0 0 rgba(0,0,0,0);">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
         
          <div class="u-custom-menu u-nav-container">
            <ul class="u-custom-font u-font-montserrat u-nav u-spacing-2 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-active-custom-color-6 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-button-style u-custom-color-6 u-hover-palette-1-light-1 u-nav-link u-text-active-custom-color-3 u-text-grey-90 u-text-hover-white" href="Home.html" style="padding: 10px 20px; text-shadow: 0 2px 8px rgba(128,128,128,1);">Home</a>
</li><li class="u-nav-item"><a class="u-active-custom-color-6 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-button-style u-custom-color-6 u-hover-palette-1-light-1 u-nav-link u-text-active-custom-color-3 u-text-grey-90 u-text-hover-white" href="index.php" style="padding: 10px 20px; text-shadow: 0 2px 8px rgba(128,128,128,1);">Login</a>
</li><li class="u-nav-item"><a class="u-active-custom-color-6 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-button-style u-custom-color-6 u-hover-palette-1-light-1 u-nav-link u-text-active-custom-color-3 u-text-grey-90 u-text-hover-white" href="Contact us.html" style="padding: 10px 20px; text-shadow: 0 2px 8px rgba(128,128,128,1);">Contact us</a>
</li><li class="u-nav-item"><a class="u-active-custom-color-6 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-button-style u-custom-color-6 u-hover-palette-1-light-1 u-nav-link u-text-active-custom-color-3 u-text-grey-90 u-text-hover-white" style="padding: 10px 20px; text-shadow: 0 2px 8px rgba(128,128,128,1);">About us</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link">Login</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact-us.html">Contact us</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link">About us</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-image u-section-1" id="carousel_cb42" data-image-width="1080" data-image-height="1350">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-left u-container-style u-custom-color-1 u-group u-opacity u-opacity-80 u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h1 class="u-custom-font u-text u-text-1">Create your<span class="u-text-palette-2-base"> Drea​m </span>
              <span class="u-text-palette-2-base">wedding with us!</span>
            </h1>
            <p class="u-large-text u-text u-text-custom-color-3 u-text-variant u-text-2"><span style="font-weight: 700;">With us , you can organize your wedding with ease and hassle-free.<span style="font-weight: 700;"></span>
              </span>
            </p>
            <a href="checklist.html" class="u-active-white u-border-4 u-border-active-palette-2-base u-border-hover-palette-2-base u-border-palette-2-base u-btn u-btn-round u-button-style u-custom-color-2 u-hover-custom-color-1 u-radius-47 u-text-active-black u-text-black u-text-hover-black u-btn-1">Read More</a>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="carousel_26e8">
      <div class="u-palette-4-base u-shape u-shape-rectangle u-shape-1"></div>
      <div class="u-palette-4-base u-shape u-shape-rectangle u-shape-2"></div>
      <div class="u-container-style u-group u-image u-image-default u-image-tiles u-image-1">
        <div class="u-container-layout u-container-layout-1"></div>
      </div>
      <img src="img/unnamed.jpg" alt="" class="u-image u-image-default u-image-2" data-image-width="650" data-image-height="650">
      <div class="u-align-right u-container-style u-group u-group-2">
        <div class="u-container-layout u-valign-middle-sm u-valign-middle-xs u-valign-top-lg u-valign-top-md u-valign-top-xl u-container-layout-2">
          <h1 class="u-text u-text-1">Modern <b>Wedding</b>
            <br>
          </h1>
          <p class="u-custom-font u-font-oswald u-large-text u-text u-text-variant u-text-2">
            <span class="u-text-palette-4-base">Traditional Methods of post-card invitation can be avoided by making use of our website, G​uests can accept RSVP online</span>.
          </p>
          <a href="google_calendar.php" class="u-border-6 u-border-palette-4-light-1 u-btn u-button-style u-hover-palette-3-light-2 u-palette-1-base u-text-palette-4-base u-btn-1">learn more</a>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-white u-section-3" id="carousel_6393">
      <div class="u-custom-color-4 u-shape u-shape-rectangle u-shape-1"></div>
      <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
              <div class="u-container-layout u-valign-top u-container-layout-1">
                <h2 class="u-text u-text-1">Talk to us and we’ll find the best way to work together</h2>
                <div class="u-border-6 u-border-palette-1-base u-line u-line-horizontal u-line-1"></div>
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
              <div class="u-container-layout u-valign-top u-container-layout-2">
                <h2 class="u-custom-font u-font-montserrat u-subtitle u-text u-text-2">with our calendar feature , you can sync your phone with important date and events with alerts and also give notifications to subscribed people concerning the event.</h2>
                <a href="google_calender.php" class="u-btn u-button-style u-text-body-alt-color u-btn-1">learn more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-palette-1-light-2 u-section-4" id="carousel_555a">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-border-10 u-border-white u-image u-image-circle u-image-1"></div>
        <div class="u-image u-image-circle u-image-2"></div>
        <div class="u-border-20 u-border-white u-image u-image-circle u-image-3" data-image-width="700" data-image-height="1049"></div>
        <div class="u-shape u-shape-svg u-text-palette-1-base u-shape-1">
          <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1186"></use></svg>
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-1186" style="enable-background:new 0 0 160 160;"><path d="M80,30c27.6,0,50,22.4,50,50s-22.4,50-50,50s-50-22.4-50-50S52.4,30,80,30 M80,0C35.8,0,0,35.8,0,80s35.8,80,80,80
	s80-35.8,80-80S124.2,0,80,0L80,0z"></path></svg>
        </div>
        <div class="u-shape u-shape-svg u-text-palette-1-base u-shape-2">
          <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-525f"></use></svg>
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-525f" style="enable-background:new 0 0 160 160;"><path d="M80,30c27.6,0,50,22.4,50,50s-22.4,50-50,50s-50-22.4-50-50S52.4,30,80,30 M80,0C35.8,0,0,35.8,0,80s35.8,80,80,80
	s80-35.8,80-80S124.2,0,80,0L80,0z"></path></svg>
        </div>
        <div class="u-align-center u-container-style u-expanded-width u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h1 class="u-text u-text-1">Wedding Ceremony</h1>
            <p class="u-custom-font u-font-montserrat u-text u-text-2">live stream your wedding ceremony on youtube with scheduled date and time. </p>
            <a href="video.html" class="u-active-white u-align-center u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-button-style u-hover-white u-none u-text-active-black u-text-black u-text-hover-black u-btn-1">Read More</a>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-5" id="carousel_0d4f">
      <div class="u-expanded-width u-gallery u-layout-grid u-lightbox u-no-transition u-show-text-on-hover u-gallery-1">
        <div class="u-gallery-inner u-gallery-inner-1">
          <div class="u-effect-fade u-gallery-item">
            <div class="u-back-slide" data-image-width="236" data-image-height="354">
              <img class="u-back-image u-expanded" src="img/Photo48fromAmyzingframes_Weddingphotography_album.jpg">
            </div>
            <div class="u-over-slide u-shading u-over-slide-1">
              <h3 class="u-gallery-heading"></h3>
              <p class="u-gallery-text"></p>
            </div>
          </div>
          <div class="u-effect-fade u-gallery-item">
            <div class="u-back-slide" data-image-width="1000" data-image-height="1500">
              <img class="u-back-image u-expanded" src="img/SmallRusticIntimateWeddingAtJehaNumaRetreatInBhopal.jpg">
            </div>
            <div class="u-over-slide u-shading u-over-slide-2">
              <h3 class="u-gallery-heading"></h3>
              <p class="u-gallery-text"></p>
            </div>
          </div>
          <div class="u-effect-fade u-gallery-item">
            <div class="u-back-slide" data-image-width="457" data-image-height="700">
              <img class="u-back-image u-expanded" src="img/DestinationWeddingPlannerIndia_SpecialiseinGoaUdaipurJaipurandKerala.jpg">
            </div>
            <div class="u-over-slide u-shading u-over-slide-3">
              <h3 class="u-gallery-heading"></h3>
              <p class="u-gallery-text"></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-82d1"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">To know more about us , visit our instagram page,youtube channel or write to us .</p>
      </div></footer>
    
  </body>
</html>