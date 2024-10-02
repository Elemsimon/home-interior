<?php 
get_header();
/* Template Name: About */
?>


<!-- about breadcrumb -->
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title"><?php the_title(); ?></h2>
            <ul class="breadcrumbs-custom-path mt-2 text-center">
                <li><a href="#url">Home</a></li>
                <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> About Us </li>
            </ul>
        </div>
    </div>
</section>
<!-- //about breadcrumb -->

 <!-- about block1 -->
<?php 
  $section1 = get_field('section_1');
  $image = get_template_directory_uri().'/assets/images/about.jpg';
?>


 <section class="wthree-row py-5 about-main" id="about">
     <div class="container py-lg-5 py-md-4">
         <div class="bg-pricemain row">
             <div class="col-lg-4 mb-lg-0 mb-5">
                 <h3 class="title-small mb-2"><?php echo $section1['sub_title'] ? $section1['sub_title'] : 'An enchanting dream home.'; ?></h3>
                 <h3 class="title-big text-capitalize"><?php echo $section1['title'] ? $section1['title'] : 'We Have 10+ Years Of Experience.'; ?></h3>
                 <p class="pt-4"><?php echo $section1['body'] ? $section1['body'] : 'Aliquam ac est vel nisl condimentum interduauris et justo vel nibh rhoncusm vel eget
                     enim. Curabitur
                     mattis orci sed leo mattis, nec maximus nibh faucibus.'; ?>
                    </p>
                 <a href="<?php echo $section1['link_url'] ? $section1['link_url'] : '/about'; ?>" class="btn btn-style btn-primary mt-lg-5 mt-4"><?php echo $section1['link_text'] ? $section1['link_text'] : 'Read More'; ?></a>
             </div>
             <div class="col-lg-4 col-md-6 text-center">
                 <div class="agileits-banner-info4">
                     <img src="<?php echo $section1['image'] ? $section1['image'] : $image; ?>" alt="image" class="img-fluid radius-image" />
                 </div>
                 
             </div>
             <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                 <span class="fa fa-quote-left" aria-hidden="true"></span>
                 <p class="py-4 pl-3 d-inline font-italic about-right-text">
                 <?php echo $section1['quote'] ? $section1['quote'] : '
                     Aliquam ac est vel nisl condimentum interdum
                     vel eget enim. Curabitur mattis orci sed leo mattis, nec
                     maximus nibh faucibus. Mauris et justo vel nibh rhoncus venenatis. Nullal dolor init condimentum
                     interdum vel
                     eget enim. Curabitur mattis orci sed le. Lorem dolor sit amet
                 '; ?>
                 </p>
                 <h5 class="abt-right"><?php echo $section1['title_2'] ? $section1['title_2'] : 'Home Interior'; ?></h5>
                 <hr>
                 <h4 class="abt-right-text font-italic"><?php echo $section1['sub_title_2'] ? $section1['sub_title_2'] : 'The best interior solution.'; ?></h4>
             </div>
         </div>
     </div>
 </section>
 <!-- //about block1 -->
 
<!-- stats -->
<?php 
  $section2 = get_field('section_2');
  $column1 = $section2['column_1']; 
  $column2 = $section2['column_2']; 
  $column3 = $section2['column_3'];
  $column4 = $section2['column_4']; 
?>
<section class="w3l-stats py-5" id="stats">
    <div class="gallery-inner container py-md-5 py-4">
        <div class="row stats-con">
            <div class="col-md-3 col-6 stats_info counter_grid">
                <h3><?php echo $column1['title_1'] ? $column1['title_1'] : 'Founded in 2010'; ?></h3>
                <p class="counter"><?php echo $column1['number_1'] ? $column1['number_1'] : '2010'; ?></p>
                <span><?php echo $column1['sub_title_1'] ? $column1['sub_title_1'] : 'Year we Founded'; ?></span>
            </div>
            <div class="col-md-3 col-6 stats_info counter_grid1">
                <h3><?php echo $column2['title_2'] ? $column2['title_2'] : 'Proudly Received'; ?></h3>
                <p class="counter"><?php echo $column2['number_2'] ? $column2['number_2'] : '120'; ?></p>
                <span><?php echo $column2['sub_title_2'] ? $column2['sub_title_2'] : 'No: of Awards'; ?></span>
            </div>
            <div class="col-md-3 col-6 stats_info counter_grid mt-md-0 mt-5">
                <h3><?php echo $column3['title_3'] ? $column3['title_3'] : 'Number of clients'; ?></h3>
                <p class="counter"><?php echo $column3['number_3'] ? $column3['number_3'] : '1500'; ?></p>
                <span><?php echo $column3['sub_title_3'] ? $column3['sub_title_3'] : 'Daily clients'; ?></span>
            </div>
            <div class="col-md-3 col-6 stats_info counter_grid mt-md-0 mt-5">
                <h3><?php echo $column4['title_4'] ? $column4['title_4'] : 'Work completed'; ?></h3>
                <p class="counter"><?php echo $column4['number_4'] ? $column4['number_4'] : '1500'; ?></p>
                <span><?php echo $column4['sub_title_4'] ? $column4['sub_title_4'] : 'Projects done'; ?></span>
            </div>
        </div>
    </div>
</section>
<!-- //stats -->

<!-- about block3 -->
<?php 
  $section3 = get_field('section_3');
  $list = $section3['list']; 
  $image = get_template_directory_uri().'/assets/images/banner3.jpg';
?>
<section class="w3l-content-4">
    <div class="content-4-main py-5">
        <div class="container py-lg-4">
            <div class="content-info-in row">
                <div class="content-left col-lg-6">
                    <h3 class="title-small"><?php echo $section3['sub_title'] ? $section3['sub_title'] : 'Who we are'; ?></h3>
                    <h3 class="title-big"><?php echo $section3['title'] ? $section3['title'] : 'Let your designer find the right pieces for you, your space and budget.'; ?></h3>
                    <p class="mt-4"> 
                    <?php echo $section3['body'] ? $section3['body'] : '
                        Phasellus lacinia id erat eu
                        ullamcorper. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in
                        culpa quis. Phasellus lacinia. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos,
                        debitis. Quas minima sunt natus tempore, maiores aliquid modi illum?'; ?>    
                    </p>
                    <img src="<?php echo $section3['image'] ? $section3['image'] : $image; ?>" class="img-fluid mt-3" alt="">
                </div>
                <div class="content-right col-lg-6 pl-lg-4 mt-lg-0 mt-5">
                    <div class="row content4-right-grids mb-lg-5 mb-5">
                        <div class="col-2 content4-right-icon">
                            <div class="content4-icon">
                                <span class="fa fa-bath"></span>
                            </div>
                        </div>
                        <div class="col-10 content4-right-info">
                            <h6><a href="#url"><?php echo $list['list_1'] ? $list['list_1'] : 'Great Design For Creative Folks.'; ?></a></h6>
                            <p>
                                <?php echo $list['body_1'] ? $list['body_1'] : 'Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur adipisicing.'; ?>    
                            </p>
                        </div>
                    </div>
                    <div class="row content4-right-grids mb-lg-5 mb-5">
                        <div class="col-2 content4-right-icon">
                            <div class="content4-icon">
                                <span class="fa fa-shower"></span>
                            </div>
                        </div>
                        <div class="col-10 content4-right-info">
                            <h6><a href="#url"><?php echo $list['list_2'] ? $list['list_2'] : 'Affordable style for living home.'; ?></a></h6>
                            <p>
                            <?php echo $list['body_2'] ? $list['body_2'] : 'Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur adipisicing.'; ?>    
                            </p>
                        </div>
                    </div>
                    <div class="row content4-right-grids">
                        <div class="col-2 content4-right-icon">
                            <div class="content4-icon">
                                <span class="fa fa-bed"></span>
                            </div>
                        </div>
                        <div class="col-10 content4-right-info">
                            <h6><a href="#url"><?php echo $list['list_2'] ? $list['list_2'] : 'Luxurious Interior couches.'; ?></a></h6>
                            <p>
                            <?php echo $list['body_3'] ? $list['body_3'] : 'Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur adipisicing.'; ?>    
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //about block3 -->

<!-- team section -->
<?php 
  $section4 = get_field('section_4');
  $image1 = get_template_directory_uri().'/assets/images/team1.jpg';
  $image2 = get_template_directory_uri().'/assets/images/team2.jpg';
  $image3 = get_template_directory_uri().'/assets/images/team3.jpg';
  $image4 = get_template_directory_uri().'/assets/images/team4.jpg';
?>
<section class="w3l-team" id="team">
  <div class="team py-5">
    <div class="container py-lg-5">
      <div class="header-section text-center mx-auto">
        <h3 class="title-small">Our Team Members</h3>
        <h3 class="title-big">Our Creative Team</h3>
      </div>
      <div class="row team-row pt-lg-3 mt-md-5 mt-4">
        <div class="col-lg-3 col-sm-6 team-wrap">
          <div class="team-info">
            <div class="column position-relative img-circle">
              <a href="#url"><img src="<?php echo $section4['image_1'] ? $section4['image_1'] : $image1; ?>" alt="" class="img-fluid team-image" /></a>
            </div>
            <div class="column-btm">
              <h3 class="name-pos"><a href="#url"><?php echo $section4['name_1'] ? $section4['name_1'] : 'Gwen Johnson'; ?></a></h3>
              <p><a href="#url"><?php echo $section4['title_1'] ? $section4['title_1'] : 'Founder & CEO'; ?></p>
              <div class="social">
                <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
              </div>
            </div>
          </div>
        </div>
        <!-- end team member -->

        <div class="col-lg-3 col-sm-6 team-wrap mt-sm-0 pt-sm-0 mt-4 pt-2">

          <div class="team-info">
            <div class="column position-relative img-circle">
              <a href="#url"><img src="<?php echo $section4['image_2'] ? $section4['image_2'] : $image2; ?>" alt="" class="img-fluid team-image" /></a>
            </div>
            <div class="column-btm">
              <h3 class="name-pos"><a href="#url"><?php echo $section4['name_2'] ? $section4['name_2'] : 'Daniel Roberto'; ?></a></h3>
              <p><?php echo $section4['title_2'] ? $section4['title_2'] : 'Regional Manager'; ?></p>
              <div class="social">
                <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
              </div>
            </div>
          </div>
        </div>
        <!-- end team member -->

        <div class="col-lg-3 col-sm-6 team-wrap mt-lg-0 pt-lg-0 mt-4 pt-2">
          <div class="team-info">
            <div class="column position-relative img-circle">
              <a href="#url"><img src="<?php echo $section4['image_3'] ? $section4['image_3'] : $image3; ?>" alt="" class="img-fluid team-image" /></a>
            </div>
            <div class="column-btm">
              <h3 class="name-pos"><a href="#url"><?php echo $section4['name_2'] ? $section4['name_2'] : 'Dhony Abraham'; ?></a></h3>
              <p><?php echo $section4['title_3'] ? $section4['title_3'] : 'Managing Partner'; ?></p>
              <div class="social">
                <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
              </div>
            </div>
          </div>

        </div>
        <!-- end team member -->


        <div class="col-lg-3 col-sm-6 team-wrap mt-lg-0 pt-lg-0 mt-4 pt-2">

          <div class="team-info">
            <div class="column position-relative img-circle">
              <a href="#url"><img src="<?php echo $section4['image_3'] ? $section4['image_3'] : $image3; ?>" alt="" class="img-fluid team-image" /></a>
            </div>
            <div class="column-btm">
              <h3 class="name-pos"><a href="#url"><?php echo $section4['name_2'] ? $section4['name_2'] : 'Marko Dugonji'; ?></a></h3>
              <p><?php echo $section4['title_4'] ? $section4['title_4'] : 'Cheif Executive'; ?></p>
              <div class="social">
                <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
              </div>
            </div>
          </div>
        </div>
        <!-- end team member -->

      </div>
    </div>
</section>
<!-- //teamsection -->

<!-- testimonials -->
<?php 
  $section5 = get_field('section_5');
  $image1 = get_template_directory_uri().'/assets/images/team1.jpg';
  $image2 = get_template_directory_uri().'/assets/images/team2.jpg';
  $image3 = get_template_directory_uri().'/assets/images/team3.jpg';
  $image4 = get_template_directory_uri().'/assets/images/team4.jpg';
?>

<section class="w3l-testimonials" id="testimonials">
    <div class="testimonials py-5">
        <div class="container py-lg-5">
            <div class="title-content text-center">
                <h3 class="title-small">Testimonials</h3>
                <h3 class="title-big">What our Clients say</h3>
            </div>
            <div class="row mt-lg-5 mt-4">
                <div class="col-md-10 mx-auto">
                    <div class="owl-two owl-carousel owl-theme">
                        <div class="item">
                            <div class="slider-info">
                                <div class="message">
                                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                                    <p>
                                        <?php echo $section5['quote_1'] ? $section5['quote_1'] : 'Lorem ipsum dolor sit amet init sed consectetur adipisicing elit. Ea sit id accusantium officia quod quasi et necessitatibus perspiciatis Harum error provident quibusdam.'; ?>    
                                    </p>
                                    <div class="name mt-4">
                                        <h4><?php echo $section5['name_1'] ? $section5['name_1'] : 'Phillip Hunt'; ?></h4>
                                        <p><?php echo $section5['company_1'] ? $section5['company_1'] : 'Example Company'; ?></p>
                                    </div>
                                </div>
                                <div class="img-circle">
                                    <img src="<?php echo $section5['image_1'] ? $section5['image_1'] : $image1; ?>" class="img-fluid testimonial-img" alt="client">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-info">
                                <div class="message">
                                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                                    <p>
                                        <?php echo $section5['quote_2'] ? $section5['quote_2'] : 'Lorem ipsum dolor sit amet init sed consectetur adipisicing elit. Ea sit id accusantium officia quod quasi et necessitatibus perspiciatis Harum error provident quibusdam.'; ?>
                                    </p>
                                    <div class="name mt-4">
                                        <h4><?php echo $section5['name_2'] ? $section5['name_2'] : 'Sara Grant'; ?></h4>
                                        <p><?php echo $section5['company_2'] ? $section5['company_2'] : 'Example Company'; ?></p>
                                    </div>
                                </div>
                                <div class="img-circle">
                                    <img src="<?php echo $section5['image_2'] ? $section5['image_2'] : $image2; ?>" class="img-fluid testimonial-img" alt="client">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-info">
                                <div class="message">
                                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                                    <p>
                                        <?php echo $section5['quote_3'] ? $section5['quote_3'] : 'Lorem ipsum dolor sit amet init sed consectetur adipisicing elit. Ea sit id accusantium officia quod quasi et necessitatibus perspiciatis Harum error provident quibusdam.'; ?>
                                    </p>
                                    <div class="name mt-4">
                                        <h4><?php echo $section5['name_3'] ? $section5['name_3'] : 'Luke Jacobs'; ?></h4>
                                        <p><?php echo $section5['company_3'] ? $section5['company_3'] : 'Example Company'; ?></p>
                                    </div>
                                </div>
                                <div class="img-circle">
                                    <img src="<?php echo $section5['image_3'] ? $section5['image_3'] : $image3; ?>" class="img-fluid testimonial-img" alt="client">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-info">

                                <div class="message">
                                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                                    <p>
                                        <?php echo $section5['quote_4'] ? $section5['quote_4'] : 'Lorem ipsum dolor sit amet init sed consectetur adipisicing elit. Ea sit id accusantium officia quod quasi et necessitatibus perspiciatis Harum error provident quibusdam.'; ?>
                                    </p>
                                    <div class="name mt-4">
                                        <h4><?php echo $section5['name_4'] ? $section5['name_4'] : 'Claire Olson'; ?></h4>
                                        <p><?php echo $section5['company_4'] ? $section5['company_4'] : 'Example Company'; ?></p>
                                    </div>
                                </div>
                                <div class="img-circle">
                                    <img src="<?php echo $section5['image_4'] ? $section5['image_4'] : $image2; ?>" class="img-fluid testimonial-img" alt="client">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>