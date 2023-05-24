<!--Header content-->
    <?php
    include('partials/header.php');
    ?> <!--End Header content-->
  
      <body class="services-page">

        <!-- Preloader -->
        <?php
       include('partials/preloader.php');
        ?>
        <!-- End Preloader -->
    
        <section class="templatemo-top-section">
          <div class="templatemo-header">
            <img class="templatemo-header-img" src="img/header.png" alt="Header">
            <h1 class="templatemo-site-name">Motor</h1>
            <div class="mobile-menu-icon">
              <i class="fa fa-bars"></i>
            </div>
            <div class="templatemo-nav-container">
              <nav class="templatemo-nav">
                <ul>
                 <li><a href="index.html">Home</a></li>
                 <li><a href="products.html">Products</a></li>
                 <li><a href="services.html" class="active">Services</a></li>
                 <li><a href="gallery.html">Gallery</a></li>
                 <li><a href="contact.html">Contact</a></li>
               </ul>
             </nav> 
           </div>
         </div>
         <div class="templatemo-welcome welcome-slider">
          <div class="container">
            <div class="row">
              <div class="flexslider">
                <ul class="slides">
                  <li>
                    <div class="about-slider">
                      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <img src="img/about/1.jpg" class="img-responsive" alt="Image">
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 about-slider-description">
                        <h2 class="text-uppercase welcome-title">
                          	<span class="welcome-title-1">Performance</span>
                      		<span class="welcome-title-2">for the speed</span>
                        </h2>
                        <p class="welcome-message">Motor is free Bootstrap v3.3.4 responsive web template provided 
                by <span class="blue">template</span><span class="green">mo</span>.com website. You can download, 
                modify and use this for your website projects.
                
                Cumdent sociis natoque penatibus et magnis dis parturient montes, sor ind nascetur ridiculus mus. 
                Lorem ipsum dolor sit amet dipiscing elit dori</p>
                      </div>              
                    </div>  
                  </li>
                  <li>
                    <div class="about-slider">
                      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <img src="img/about/1.jpg" class="img-responsive" alt="Image">
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 about-slider-description">
                        <h2 class="text-uppercase welcome-title">
                          <span class="welcome-title-1">Find to own</span>
                          <span class="welcome-title-2">the fast &amp; best</span>
                        </h2>
                        <p class="welcome-message">Lorem ipsum dolor sit amet, consectetuer adipiscing elit dori. Aenean commodo ligula eget. Aenean massa. Cumdent sociis natoque penatibus et magnis dis parturient montes, sor ind nascetur ridiculus mus. Lorem ipsum dolor sit amet dipiscing elit dori.</p>
                      </div>              
                    </div>  
                  </li>
                </ul>
              </div>                          
            </div>    
          </div>
        </div>
      </section>
      <div class="container margin-bottom-50">
       <div class="row">
        <div class="col-lg-12 tm-overflow-hidden">
          <div class="tm-img-1-container">
            <img src="img/4-1.jpg" alt="Image description">
            <p class="tm-img-1-description">Benz</p>
          </div>
          <div class="tm-img-1-container">
            <img src="img/4-2.jpg" alt="Image description">
            <p class="tm-img-1-description">Mercedes</p>
          </div>
          <div class="tm-img-1-container">
            <img src="img/4-3.jpg" alt="Image description">
            <p class="tm-img-1-description">BMW</p>
          </div>
          <div class="tm-img-1-container">
            <img src="img/4-4.jpg" alt="Image description">
            <p class="tm-img-1-description">Lexus</p>
          </div>         
        </div>
      </div>
    </div>    

    <!--Main content-->
      <?php
     include('partials/service.php');
      ?> 

      <!--banner-->
      <?php
     include('partials/banner.php');
      ?> 
    <!-- Main content -->

    <!--Footer content-->
   <?php
    include('partials/header.php');
   ?><!-- Footer content-->
    
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
    <script defer src="js/jquery.flexslider-min.js"></script><!-- FlexSlider -->
    <script>
      $(window).load(function() {
        $('.flexslider').flexslider({
          animation: "slide",
          slideshow: false,
          prevText: "&#xf104;",
          nextText: "&#xf105;"
        });

        // Remove preloader
        // https://ihatetomatoes.net/create-custom-preloading-screen/
        $('body').addClass('loaded');
      });
    </script>
  </body>
  </html>
