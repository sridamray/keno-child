   <?php
    $keno_child_logo = get_theme_mod('keno_child_logo');

    ?>


   <!-- Header Start -->
   <header class="main-header bg-section">
       <div class="header-sticky">
           <nav class="navbar navbar-expand-lg">
               <div class="container-fluid">
                   <!-- Logo Start -->
                   <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                       <img src="<?php echo esc_url($keno_child_logo); ?>" alt="Logo">
                   </a>
                   <!-- Logo End -->

                   <!-- Main Menu Start -->
                   <div class="collapse navbar-collapse main-menu">
                       <div class="nav-menu-wrapper">
                           <?php keno_header_menu(); ?>

                       </div>

                       <!-- Header Btn Start -->
                       <div class="header-btn">
                           <a href="book-appointment.html" class="btn-default btn-highlighted">book appointment</a>
                       </div>
                       <!-- Header Btn End -->
                   </div>
                   <!-- Main Menu End -->
                   <div class="navbar-toggle"></div>
               </div>
           </nav>
           <div class="responsive-menu"></div>
       </div>
   </header>
   <!-- Header End -->