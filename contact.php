<!--Header content-->
<?php
    include('partials/header.php');
  ?> <!--End Header content-->
  
  <body class="contact-page">
    
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
             <li><a href="services.html">Services</a></li>
             <li><a href="gallery.html">Gallery</a></li>
             <li><a href="contact.html" class="active">Contact</a></li>
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
                modify and use this for your website projects. Please tell your friends about our templates. 
                Thank you for visiting.</p>
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
      
    <!-- Main content -->
      <?php
      include('partials/contactform.php');
      ?> 
      
      <!--banner-->
      <div class="row">
        <div class="tm-banner">
          <h2 class="tm-banner-title">Maecenas</h2>
          <p class="tm-banner-description">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium</p>
          <a href="#" class="tm-banner-link"><i class="fa fa-play"></i></a>
        </div>  
      </div>      
    </section>

    <!-- End Main content -->
    
    <!--Footer content-->
    <?php
    include('partials/footer.php');
    ?> 
    <!-- Footer content-->
    
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

      /* Google map
      ------------------------------------------------*/
      var map = '';
      var center;

      function initialize() {
          var mapOptions = {
            zoom: 16,
            center: new google.maps.LatLng(13.758468,100.567481),
            scrollwheel: false
          };
        
          map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

          google.maps.event.addDomListener(map, 'idle', function() {
              calculateCenter();
          });
        
          google.maps.event.addDomListener(window, 'resize', function() {
              map.setCenter(center);
          });
      }

      function calculateCenter() {
        center = map.getCenter();
      }

      function loadGoogleMap(){
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
          document.body.appendChild(script);
      }
      $(document).ready(function(){                
          loadGoogleMap();                
      });

      
    </script>
  </body>
  </html>
