<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <!--  <link href="//fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet"> -->

  <title><?php bloginfo( 'name' ); ?></title>

  <?php wp_head(); ?>
  <?php wp_footer(); ?>
</head>

<body>
<!-- header top-->
<section class="w3l-top-header-content d-md-block d-none">
  <div class="hny-top-menu">
      <div class="top-hd">
          <div class="container">
              <div class="row">
                  <ul class="social-top">
                      <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                      <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                      <li><a href="#"><span class="fa fa-instagram"></span></a> </li>
                      <li><a href="#"><span class="fa fa-linkedin"></span> </a> </li>
                  </ul>
                  <ul class="accounts ml-auto">
                      <li class="top_li">
                        <span class="fa fa-phone"></span>
                        <a href="tel:+142 5897555"><?php echo esc_html(get_theme_mod('header_phone_setting', '+142 5897555')); ?></a>
                      </li>

                      <li class="top_li">
                        <span class="fa fa-clock-o"></span> 
                        <?php echo esc_html(get_theme_mod('header_office_hours_setting', 'Mon - Fri: 10:00 - 18:00')); ?>
                      </li>
                      <li class="top_li mr-lg-0"><span class="fa fa-envelope-o"></span><a
                        href="mailto:info@example.com"><?php echo esc_html(get_theme_mod('header_email_setting', 'info@example.com')); ?></a>
                      </li>

                  </ul>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- //header top-->

<!--header-->
<header>
  <div class="container">
      <nav class="navbar navbar-expand-lg">
            <h1>
                <a class="navbar-brand" href="#">
                <span class="sub-log"><?php bloginfo( 'name' ); ?></span>
                    
                </a>
            </h1>
          <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
              data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
              </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <?php 
                if ( has_nav_menu( 'primary' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => 'navbar-nav mx-lg-auto',
                    ) );
                }
                
                ?>
                
          </div>

          <div class="d-lg-block d-none">
              <a href="contact.html" class="btn btn-style btn-primary">Enquire</a>
          </div>

          <!-- toggle switch for light and dark theme -->
          <div class="mobile-position">
              <nav class="navigation">
                  <div class="theme-switch-wrapper">
                      <label class="theme-switch" for="checkbox">
                          <input type="checkbox" id="checkbox">
                          <div class="mode-container py-1">
                              <i class="gg-sun"></i>
                              <i class="gg-moon"></i>
                          </div>
                      </label>
                  </div>
              </nav>
          </div>
          <!-- //toggle switch for light and dark theme -->
      </nav>
  </div>
</header>