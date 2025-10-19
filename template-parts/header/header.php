   <?php
    $keno_child_logo = get_theme_mod('keno_child_logo');
    $keno_general_btn_text = get_theme_mod('keno_general_btn_text', 'book appointment');
    $keno_general_btn_url = get_theme_mod('keno_general_btn_url', '#');

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
                           <?php keno_child_header_menu(); ?>

                       </div>

                       <!-- Header Btn Start -->
                       <div class="header-btn">
                           <a href="<?php echo esc_url($keno_general_btn_url); ?>" class="btn-default btn-highlighted"><?php echo esc_html($keno_general_btn_text); ?></a>
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