<footer class="w3l-footer py-5">
  <div class="container pt-lg-5 pt-md-3">

  <?php $footer = get_field('footer'); ?>
  <?php $contact = get_field('contact_info'); ?>
  <?php $category = get_field('categories'); ?>
  <?php $resources = get_field('resources'); ?>
  <?php $account = get_field('account'); ?>
  <?php $footer2 = get_field('footer_2'); ?>

    <div class="footer-grid_section text-center">
      <div class="footer-title mb-3">
        <h2> <a class="navbar-brand" href="#">
            <span class="sub-log"><?php bloginfo( 'name' ); ?></span> 
          </a></h2>
      </div>
      <div class="footer-text">
        <p>
          <?php echo get_theme_mod('footer_text_setting', 'Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ipnut libero malesuada feugiat. Lorem ipsum dolor sit amet elit.'); ?>
        </p>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-lg-4 mb-lg-0 mb-5 footer-top">
        <h4 class="mb-4 w3f_title text-uppercase"><?php echo esc_html( get_theme_mod( 'footer_text_setting', __( 'Contact Info', 'mytheme' ) ) ); ?></h4>
        <div class="footer-style-w3ls mb-3">
          <p>
            <?php echo get_theme_mod('footer_address_setting', '#302, 5th Floor, ALHK-2247 Colendar ek, Settlers Lane, New York.'); ?>
          </p>
        </div>
        <ul class="list-agileits">
          <li class="my-2">
            <a href="tel:+7-800-999-800"><span class="fa fa-phone"></span>
              <?php echo esc_attr(get_theme_mod('footer_phone_setting', '+(21)-255-999-8888')); ?>
            </a>
          </li>
          <li>
            <a href="mailto:interior@mail.com" class="mail"><span class="fa fa-envelope-open-o"></span>
              <?php echo esc_attr(get_theme_mod('footer_email_setting', 'interior@mail.com')); ?>
            </a>
          </li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-3 col-6 footv3-left">
        <h4 class="mb-md-4 mb-3 w3f_title text-uppercase">Company</h4>
        <?php 
                if ( has_nav_menu( 'primary' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'footer',
                        'container'      => 'ul',
                        'menu_class'     => 'list-agileits ',
                        
                    ) );
                }
                
                ?>
        <!-- <ul class="list-agileits">
          <li class="my-2">
            <a href="about.html">
              About Us
            </a>
          </li>
          <li class="mb-2">
            <a href="#url">
              Terms of use
            </a>
          </li>
          <li class="my-2">
            <a href="#url">
              Faq's
            </a>
          </li>
          <li class="my-2">
            <a href="#url">
              Privacy Ploicy
            </a>
          </li>
          <li>
            <a href="contact.html">
              Get In Touch
            </a>
          </li>
        </ul> -->
      </div>
      <div class="col-lg-2 col-md-3 col-6">
        <h4 class="mb-md-4 mb-3 w3f_title text-uppercase">Categories</h4>
        <ul class="list-agileits">
          <?php
            $categories_links = explode(',', get_theme_mod('footer_categories_links', 'Furniture Chairs,Three Seater Sofas,Dining Tables,Office Chairs,Kitchen Cabinets'));
            foreach ($categories_links as $link) {
                echo '<li class="my-2"><a href="#">' . esc_html($link) . '</a></li>';
            }
            ?>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 col-6 mt-md-0 mt-5">
        <h4 class="mb-md-4 mb-3 w3f_title text-uppercase">Resources</h4>
        <ul class="list-agileits">
          <?php
            $resources_links = explode(',', get_theme_mod('footer_resources_links', 'Getting Started,Best Collections,All Categories,24/7 Support,Contact for Help'));
            foreach ($resources_links as $link) {
                echo '<li class="my-2"><a href="#">' . esc_html($link) . '</a></li>';
            }
          ?>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 col-6 mt-md-0 mt-5">
        <h4 class="mb-md-4 mb-3 w3f_title text-uppercase">Account</h4>
        <ul class="list-agileits">
          <li class="my-2">
          <?php
            $account_links = explode(',', get_theme_mod('footer_account_links', 'Sign In / Login,Create Account'));
            foreach ($account_links as $link) {
              echo '<li class="my-2"><a href="#">' . esc_html($link) . '</a></li>';
            }
          ?>
          </li>
        </ul>
      </div>
    </div>

    
    <section class="w3l-footer-29-main w3l-copyright">
      <div class="text-center">
        <p class="copy-footer-29">
          <?php echo esc_attr(get_theme_mod('footer_copyright', 'Home Interior. All rights reserved.')); ?>
        </p>
      </div>
    </section>
    <!-- //copyright -->

  </div>
  <!-- //footer bottom -->

  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    &#10548;
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->

</footer>
<!-- //footer -->

<!-- Template JavaScript -->

<!-- magnific popup -->
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>
<!-- magnific popup -->

<!-- script for banner slider -->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script for banner slider -->

<!-- script for Testimonials-->
<script>
  $(document).ready(function () {
    $('.owl-two').owlCarousel({
      loop: true,
      margin: 30,
      nav: true,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        480: {
          items: 1,
          nav: true
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script for Testimonials-->

<!-- script for services -->
<script>
  $(document).ready(function () {
    $('.owl-news').owlCarousel({
      loop: true,
      margin: 30,
      nav: false,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        768: {
          items: 2,
          nav: false
        },
        1000: {
          items: 3,
          nav: false
        }
      }
    })
  })
</script>
<!-- //script for services -->

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->
 
<?php wp_footer(); ?>
</body>

</html>