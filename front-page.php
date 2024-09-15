<?php get_header(); ?>
<?php wp_footer(); ?>

<?php $hero = get_field('hero'); ?>
<section class="w3l-main-slider" id="home">
     <div class="companies20-content">
         <div class="owl-one owl-carousel owl-theme">
             <div class="item">
                 <li>
                     <div class="slider-info banner-view bg bg2">
                         <div class="banner-info">
                             <div class="container">
                                 <div class="banner-info-bg">
                                    <h5>
                                        <?php echo $hero['title_1']; ?>
                                    </h5>
                                    
                                        <a class="btn btn-style btn-primary mt-sm-5 mt-4" href="<?php echo $hero['button_link_1']; ?>">
                                            <?php echo $hero['button_text_1']; ?>
                                        </a>
                                    
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
             </div>
             <div class="item">
                 <li>
                     <div class="slider-info  banner-view banner-top1 bg bg2">
                         <div class="banner-info">
                             <div class="container">
                                 <div class="banner-info-bg">
                                    <h5>
                                        <?php echo $hero['title_2']; ?>
                                    </h5>
                                    
                                        <a class="btn btn-style btn-primary mt-sm-5 mt-4" href="<?php echo $hero['button_link_2']; ?> ">
                                            <?php echo $hero['button_text_2']; ?>
                                        </a>
                                    
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
             </div>
             <div class="item">
                 <li>
                     <div class="slider-info banner-view banner-top2 bg bg2">
                         <div class="banner-info">
                             <div class="container">
                                 <div class="banner-info-bg">
                                    <h5>
                                        <?php echo $hero['title_3']; ?>
                                    </h5>
                                    
                                        <a class="btn btn-style btn-primary mt-sm-5 mt-4" href="<?php echo $hero['button_link_3']; ?>">
                                            <?php echo $hero['button_text_3']; ?>
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
          <h4><a href="<?php echo $block1['link']; ?>">
            <?php echo $block1['title']; ?>
          </a></h4>
          <p>
            <?php echo $block1['body']; ?>
          </p>
          <a href="<?php echo $block1['link']; ?> " class="read">
            <?php echo $block1['link_text']; ?>
          </a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-md-0 mt-4">
        <div class="box-wrap">
          <div class="icon">
            <span class="fa fa-shower"></span>
          </div>
          <h4><a href="<?php echo $block2['link']; ?>">
            <?php echo $block2['title']; ?>
          </a></h4>
          <p>
            <?php echo $block2['body']; ?>
          </p>
          <a href="<?php echo $block2['link']; ?>" class="read">
            <?php echo $block2['link_text']; ?>
          </a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-0 mt-4">
        <div class="box-wrap">
          <div class="icon">
            <span class="fa fa-bed"></span>
          </div>
          <h4><a href="#url">
            <?php echo $block3['title']; ?>
          </a></h4>
          <p>
            <?php echo $block3['body']; ?>
          </p>
          <a href="<?php echo $block3['link']; ?>" class="read">
            <?php echo $block3['link_text']; ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- //home page block1 -->

 <!-- home page block2 grids -->
<?php $section2 = get_field('section_2'); ?>
  <section class="w3l-grids-3 py-md-5 pb-5" id="about">
    <div class="container py-lg-5 py-md-3">
      <div class="row bottom-ab-grids">

        <div class="col-lg-6 bottom-ab-left">
          <!-- <h6 class="title-small">About Our Company</h6> -->
          <h3 class="title-big mb-4">
            <?php echo $section2['title']; ?>
          </h3>
          <p class="">
            <?php echo $section2['body']; ?>
          </p>
          <a href="<?php echo $section2['link']; ?>" class="btn btn-style btn-primary mt-lg-5 mt-4"><?php echo $section2['link_text']; ?></a>
        </div>
        <div class="col-lg-6 img-grids mt-lg-0 mt-5 pl-lg-4">
            <img src="<?php echo $section2['image_1']; ?>" alt="" class="img-fluid radius-image" />
            <img src="<?php echo $section2['image_2']; ?>" alt="" class="img-fluid radius-image" />
            <img src="<?php echo $section2['image_3']; ?>" alt="" class="img-fluid radius-image" />
            <img src="<?php echo $section2['image_4']; ?>" alt="" class="img-fluid radius-image" />
            <img src="<?php echo $section2['image_5']; ?>" alt="" class="img-fluid radius-image" />
            <img src="<?php echo $section2['image_6']; ?>" alt="" class="img-fluid radius-image" />
        </div>

      </div>
    </div>
  </section>
  <!-- //home page block2 grids -->
  
<!-- home page block3 -->
<?php $section3 = get_field('section_3');
  $list = $section3['list']; 
?>

<section class="w3l-aboutblock py-5" id="about">
    <div class="midd-w3">
        <div class="container py-lg-5 py-md-3">
            <div class="row">
                <div class="col-lg-6 align-self">
                    <h3 class="title-big"><?php echo $section2['title']; ?></h3>
                    <p class="mt-4">
                      <?php echo $section2['body']; ?>
                    </p>
                    <ol class="w3l-right mt-lg-5 mt-4">
                        <li><?php echo $list['list_1']; ?></li>
                        <li><?php echo $list['list_2']; ?></li>
                        <li><?php echo $list['list_3']; ?></li>
                        <li><?php echo $list['list_4']; ?></li>
                        <li><?php echo $list['list_5']; ?></li>
                        <li><?php echo $list['list_6']; ?></li>
                    </ol>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-md-5 mt-4">
                    <div class="position-relative">
                    <img src="<?php echo $section3['image']; ?>" alt="" class="img-fluid" />
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
<section class="w3l-homeblock3 py-5">
    <div class="container py-lg-5 py-md-4">
        <div class="row">
            <div class="col-lg-6 ">
                <img src="<?php echo $section4['image']; ?>" class="img-fluid radius-image" alt="">
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
                  <?php echo $section4['body']; ?>
                </p>
                <a href="<?php echo $section4['link']; ?>" class="btn btn-style btn-primary mt-lg-5 mt-4"><?php echo $section4['link_text']; ?></a>
            </div>
        </div>
    </div>
</section>
<!-- //home page block4 -->

<!-- home page block5 -->
<?php $section5 = get_field('section_5'); ?>
<div class="w3l-homeblock4 py-5" id="quote" style = "background:url('<?php echo $section5['image']; ?>')">
    <div class="container py-xl-5 py-lg-3">
        <div class="welcome-left text-center py-md-5 py-3">
            <h3>
              <?php echo $section5['title']; ?>
            </h3>
            <a href="<?php echo $section5['button_link_1']; ?>" class="btn btn-style transparent-btn mt-sm-5 mt-4 mr-2"><?php echo $section5['button_text_1']; ?></a>
            <a href="<?php echo $section5['button_link_2']; ?>" class="btn btn-style btn-primary mt-sm-5 mt-4"><?php echo $section5['button_text_1']; ?></a>
        </div>
    </div>
</div>
<!-- //home page block5 -->

<!-- home page block6 -->
<section class="w3l-bottom py-5">
  <div class="container py-md-4 py-3 text-center">
    <div class="row">
      <div class="col-lg-9 col-md-10 mx-auto">
        <div class="subscribe mx-auto">
          <div class="header-section text-center mx-auto">
            <h3 class="title-big">Stay Updated! </h3>
            <p class="my-3"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
              Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis.</p>
          </div>
          <form action="#" method="post" class="subscribe-wthree pt-2 mt-md-5">
            <div class="d-md-flex flex-wrap subscribe-wthree-field">
              <input class="form-control" type="email" placeholder="Enter your email..." name="email" required="">
              <button class="btn btn-style btn-primary" type="submit">Subscribe</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>