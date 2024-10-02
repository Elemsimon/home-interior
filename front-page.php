<?php get_header(); ?>
<?php wp_footer(); ?>

<?php $hero = get_field('hero'); ?>
<?php $slider = get_field('image_slider'); ?>

<?php
// Assuming your fallback image is stored in your theme's images folder
$Slider1 = get_template_directory_uri() . '/assets/images/slide1.jpg';
$Slider2 = get_template_directory_uri() . '/assets/images/slide1.jpg';
$Slider3 = get_template_directory_uri() . '/assets/images/slide1.jpg';
?>
<!-- banner main-slider -->
<section class="w3l-main-slider" id="home">
     <div class="companies20-content">
         <div class="owl-one owl-carousel owl-theme">
             <div class="item">
                 <li>
                     <div class="slider-info banner-view bg bg2" style = "background-image: url('<?php echo $slider['image_1'] ? $slider['image_1'] : $Slider1; ?>')">
                         <div class="banner-info">
                             <div class="container">
                                 <div class="banner-info-bg">
                                    <h5>
                                        <?php echo $hero['title_1'] ? $hero['title_1'] : 'Good Design for Stylish Living. Make your home Modern.' ; ?>
                                    </h5>
                                    
                                        <a class="btn btn-style btn-primary mt-sm-5 mt-4" href="<?php echo $hero['button_link_1'] ? $hero['button_link_1'] : '/about'; ?>">
                                            <?php echo $hero['button_text_1'] ? $hero['button_text_1'] : 'Learn More'; ?>
                                        </a>
                                    
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
             </div>
             <div class="item">
                 <li>
                     <div class="slider-info  banner-view banner-top1 bg bg2" style = "background:url('<?php echo $slider['image_2'] ? $slider['image_2'] : $Slider2 ; ?>')">
                         <div class="banner-info">
                             <div class="container">
                                 <div class="banner-info-bg">
                                    <h5>
                                        <?php echo $hero['title_2'] ? $hero['title_2'] : 'Best Home Decoration agency. The best Interior Solution'; ?>
                                    </h5>
                                    
                                        <a class="btn btn-style btn-primary mt-sm-5 mt-4" href="<?php echo $hero['button_link_2'] ? $hero['button_link_2'] : '/about'; ?> ">
                                        <?php echo $hero['button_text_2'] ? $hero['button_text_2'] : 'Learn More'; ?>
                                        </a>
                                    
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
             </div>
             <div class="item">
                 <li>
                     <div class="slider-info banner-view banner-top2 bg bg2" style = "background:url('<?php echo $slider['image_3'] ? $slider['image_3'] : $slider3 ; ?>')">
                         <div class="banner-info">
                             <div class="container">
                                 <div class="banner-info-bg">
                                    <h5>
                                    <?php echo $hero['title_3'] ? $hero['title_3'] : 'Browse Styles and get Inspired. Home decoration services.'; ?>
                                    </h5>
                                    
                                        <a class="btn btn-style btn-primary mt-sm-5 mt-4" href="<?php echo $hero['button_link_3'] ? $hero['button_link_3'] : '/about'; ?>">
                                        <?php echo $hero['button_text_3'] ? $hero['button_text_3'] : 'Learn More'; ?>
                                        </a>
                                    
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
             </div>
         </div>
     </div>
 </section>
 <!-- // banner main-slider -->

<!-- home page block1 -->
<?php 
  $section1 = get_field('section_1'); 
  $block1 = $section1['block_1']; 
  $block2 = $section1['block_2'];
  $block3 = $section1['block_3'];
?>


<section id="services" class="home-services py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="box-wrap">
          <div class="icon">
            <span class="fa fa-pencil-square-o"></span>
          </div>
          <h4><a href="<?php echo $block1['link'] ? $block1['link'] : '/about'; ?>">
            <?php echo $block1['title'] ? $block1['title'] : 'Stylish Home decor'; ?>
          </a></h4>
          <p>
            <?php echo $block1['body'] ? $block1['body'] : 'Lorem ipsum dolor sit amet sed consectetur adipisicing elit.
            doloret quas saepe autem, dolor set.'; ?>
          </p>
          <a href="<?php echo $block1['link'] ? $block1['link'] : '/about'; ?> " class="read">
            <?php echo $block1['link_text'] ? $block1['link_text'] : 'Read more'; ?>
          </a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-md-0 mt-4">
        <div class="box-wrap">
          <div class="icon">
            <span class="fa fa-shower"></span>
          </div>
          <h4><a href="<?php echo $block2['link'] ? $block2['link'] : '/about'; ?>">
            <?php echo $block2['title'] ? $block2['title'] : 'Interior Decor' ; ?>
          </a></h4>
          <p>
            <?php echo $block2['body'] ? $block2['body'] : 'Lorem ipsum dolor sit amet sed consectetur adipisicing elit.
            doloret quas saepe autem, dolor set.'; ?>
          </p>
          <a href="<?php echo $block2['link'] ? $block2['link'] : '/about'; ?>" class="read">
            <?php echo $block2['link_text'] ? $block2['link_text'] : 'Read more'; ?>
          </a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-0 mt-4">
        <div class="box-wrap">
          <div class="icon">
            <span class="fa fa-bed"></span>
          </div>
          <h4><a href="<?php echo $block3['link'] ? $block3['link'] : '/about'; ?>">
            <?php echo $block3['title'] ? $block3['title'] : 'Home Decoration'; ?>
          </a></h4>
          <p>
            <?php echo $block3['body'] ? $block3['body'] : 'Lorem ipsum dolor sit amet sed consectetur adipisicing elit.
            doloret quas saepe autem, dolor set.'; ?>
          </p>
          <a href="<?php echo $block3['link'] ? $block3['link'] : '/about'; ?>" class="read">
            <?php echo $block3['link_text'] ? $block3['link_text'] : 'Read more'; ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- //home page block1 -->

 <!-- home page block2 grids -->
<?php $section2 = get_field('section_2'); ?>
<?php 
  $p1 = get_template_directory_uri() . '/assets/images/p1.jpg';
  $p2 = get_template_directory_uri() . '/assets/images/p2.jpg';
  $p3 = get_template_directory_uri() . '/assets/images/p3.jpg';
  $p4 = get_template_directory_uri() . '/assets/images/p4.jpg';
  $p5 = get_template_directory_uri() . '/assets/images/p5.jpg';
  $p6 = get_template_directory_uri() . '/assets/images/p6.jpg';
?>
  <section class="w3l-grids-3 py-md-5 pb-5" id="about">
    <div class="container py-lg-5 py-md-3">
      <div class="row bottom-ab-grids">

        <div class="col-lg-6 bottom-ab-left">
          <!-- <h6 class="title-small">About Our Company</h6> -->
          <h3 class="title-big mb-4">
            <?php echo $section2['title'] ? $section2['title'] : 'We are very proud of the service we provide and stand by every product we carry.'; ?>
          </h3>
          <p class="">
            <?php echo $section2['body'] ? $section2['body'] : 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur hic odio voluptatem
            tenetur consequatur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.'; ?>
          </p>
          <a href="<?php echo $section2['link'] ? $section2['link'] : '/about'; ?>" class="btn btn-style btn-primary mt-lg-5 mt-4"><?php echo $section2['link_text'] ? $section2['link_text'] : 'Read More'; ?></a>
        </div>
        <div class="col-lg-6 img-grids mt-lg-0 mt-5 pl-lg-4">
            <img src="<?php echo $section2['image_1'] ? $section2['image_1'] : $p1; ?>" alt="" class="img-fluid radius-image" />
            <img src="<?php echo $section2['image_2'] ? $section2['image_2'] : $p2; ?>" alt="" class="img-fluid radius-image" />
            <img src="<?php echo $section2['image_3'] ? $section2['image_3'] : $p3; ?>" alt="" class="img-fluid radius-image" />
            <img src="<?php echo $section2['image_4'] ? $section2['image_4'] : $p4; ?>" alt="" class="img-fluid radius-image" />
            <img src="<?php echo $section2['image_5'] ? $section2['image_5'] : $p5; ?>" alt="" class="img-fluid radius-image" />
            <img src="<?php echo $section2['image_6'] ? $section2['image_6'] : $p6; ?>" alt="" class="img-fluid radius-image" />
        </div>

      </div>
    </div>
  </section>
  <!-- //home page block2 grids -->
  
<!-- home page block3 -->
<?php $section3 = get_field('section_3');
  $list = $section3['list']; 
?>
<?php
  $s1 = get_template_directory_uri() . '/assets/images/s1.jpg';
?>

<section class="w3l-aboutblock py-5" id="about">
    <div class="midd-w3">
        <div class="container py-lg-5 py-md-3">
            <div class="row">
                <div class="col-lg-6 align-self">
                    <h3 class="title-big"><?php echo $section2['title'] ? $section2['title'] : 'What makes us different?'; ?></h3>
                    <p class="mt-4">
                      <?php echo $section2['body'] ? $section2['body'] : 'Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Non quae, fugiat ad libero ut justo lorem dolor.'; ?>
                    </p>
                    <ol class="w3l-right mt-lg-5 mt-4">
                        <li><?php echo $list['list_1'] ? $list['list_1'] : 'Wall painting designs'; ?></li>
                        <li><?php echo $list['list_2'] ? $list['list_2'] : 'Interior design Solutions'; ?></li>
                        <li><?php echo $list['list_3'] ? $list['list_3'] : 'Personalized design services'; ?></li>
                        <li><?php echo $list['list_4'] ? $list['list_4'] : 'Interior Decoration'; ?></li>
                        <li><?php echo $list['list_5'] ? $list['list_5'] : 'Home Decorating'; ?></li>
                        <li><?php echo $list['list_6'] ? $list['list_6'] : 'Stylish living home'; ?></li>
                    </ol>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-md-5 mt-4">
                    <div class="position-relative">
                    <img src="<?php echo $section3['image'] ? $section3['image'] : $s1; ?>" alt="" class="img-fluid" />
                        <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                            <span class="video-play-icon">
                                <span class="fa fa-play"></span>
                            </span>
                        </a>
                        <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                        <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                            <iframe src="https://www.youtube.com/embed/v3B8DWbTkaM" allow="autoplay; fullscreen"
                                allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- // home page block3 -->

<!-- home page block4 -->
<?php $section4 = get_field('section_4'); ?>
<?php 
  $s2 = get_template_directory_uri() . '/assets/images/s2.jpg';
?>
<section class="w3l-homeblock3 py-5">
    <div class="container py-lg-5 py-md-4">
        <div class="row">
            <div class="col-lg-6 ">
                <img src="<?php echo $section4['image'] ? $section4['image'] : $s2; ?>" class="img-fluid radius-image" alt="">
            </div>
            <div class="col-lg-6 align-self mt-lg-0 mt-4">
                <div class="row mb-sm-4 mb-2 pb-3">
                    <div class="col-sm-3 col-4">
                        <span>125</span>
                        <h4>Designers</h4>
                    </div>
                    <div class="col-sm-3 col-4">
                        <span>350+</span>
                        <h4>Projects</h4>
                    </div>
                    <div class="col-sm-3 col-4">
                        <span>1200+</span>
                        <h4>Clients</h4>
                    </div>
                </div>
                <p class="">
                  <?php echo $section4['body'] ? $section4['body'] : 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi voluptatibus repellat
                    voluptate nobis praesentium inventore est cupiditate labore exercitationem adipisci consequuntur
                    corrupti tenetur, omnis ratione cumque.'; ?>
                </p>
                <a href="<?php echo $section4['link'] ? $section4['link'] : '/about'; ?>" class="btn btn-style btn-primary mt-lg-5 mt-4"><?php echo $section4['link_text']; ?></a>
            </div>
        </div>
    </div>
</section>
<!-- //home page block4 -->

<!-- home page block5 -->
<?php 
  $section5 = get_field('section_5'); 
  $image = get_template_directory_uri() . '/assets/images/slide4.jpg';
?>
<div class="w3l-homeblock4 py-5" id="quote" style = "background:url('<?php echo $section5['image'] ? $section5['image'] : $image; ?>')">
    <div class="container py-xl-5 py-lg-3">
        <div class="welcome-left text-center py-md-5 py-3">
            <h3>
              <?php echo $section5['title'] ? $section5['title'] : 'Let your designer find the right pieces for you, your space and budget. Give us a call or get in touch!'; ?>
            </h3>
            <a href="<?php echo $section5['button_link_1'] ? $section5['button_link_1'] : '/about'; ?>" class="btn btn-style transparent-btn mt-sm-5 mt-4 mr-2"><?php echo $section5['button_text_1'] ? $section5['button_text_1'] : 'Read More'; ?></a>
            <a href="<?php echo $section5['button_link_2'] ? $section5['button_link_2'] : '/contact'; ?>" class="btn btn-style btn-primary mt-sm-5 mt-4"><?php echo $section5['button_text_1'] ? $section5['button_text_1'] : 'Contact Us'; ?></a>
        </div>
    </div>
</div>
<!-- //home page block5 -->

<!-- home page block6 -->
<?php $section6 = get_field('section_6'); ?>
<section class="w3l-bottom py-5">
  <div class="container py-md-4 py-3 text-center">
    <div class="row">
      <div class="col-lg-9 col-md-10 mx-auto">
        <div class="subscribe mx-auto">
          <div class="header-section text-center mx-auto">
            <h3 class="title-big"><?php echo $section6['title'] ? $section6['title'] : 'Stay Updated! '; ?></h3>
            <p class="my-3"> <?php echo $section6['body'] ? $section6['body'] : 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis.'; ?></p>
          </div>
          <form action="" method="post" class="subscribe-wthree pt-2 mt-md-5">
            <div id="responseMessage"></div>
            <div class="d-md-flex flex-wrap subscribe-wthree-field">
              <input class="form-control" name="subscriber_email" type="email" placeholder="Enter your email..." required="">
              <button class="btn btn-style btn-primary" name="subscribe-submitted" value="Subscribe" type="submit">Subscribe</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>