<!--Header content-->
<?php
    include('partials/header.php');
  ?>

      <body class="gallery-page">
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
                 <li><a href="gallery.html" class="active">Gallery</a></li>
                 <li><a href="contact.html">Contact</a></li>
               </ul>
             </nav> 
           </div>
         </div>
         <div class="templatemo-welcome">
          <div class="container">
            <div class="row">
              <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                <img src="img/welcome-img.png" class="img-responsive welcome-img" alt="Welcome">
              </div>
              <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                <h2 class="text-uppercase">
                  <span class="welcome-title-1">Performance</span>
                  <span class="welcome-title-2">Auto</span>
                </h2>
                <p class="welcome-message">Motor is free Bootstrap v3.3.4 responsive web template provided 
                by <span class="blue">template</span><span class="green">mo</span>.com website. You can download, 
                modify and use this for your website projects.</p>
                <a href="#" class="welcome-read-more">Read More</a>
              </div>
            </div>    
          </div>
        </div>
      </section>
      <section class="container margin-bottom-50">
       <div class="row">
        <h2 class="col-lg-12 text-center text-uppercase margin-bottom-30">Donec pede justo fringilla ulputate eget</h2>
        <p class="col-lg-12 text-center margin-bottom-30">Aenean commodo ligula eget dolor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
        <img src="img/gallery-header.jpg" alt="Image description" class="img-responsive col-lg-12">        
      </div>
    </section>    

    <!--Main content-->
      <?php
     include('partials/portfolio.php');
      ?> 

      <!--banner-->
      <?php
     include('partials/banner.php');
      ?> 
    <!-- Main content -->
    
     <!--Footer content-->
  <?php
    include('partials/footer.php');
  ?>
    
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->

  </body>
  </html>
