<?php 
get_header();
/* Template Name: Contact */
?>

<!-- contact breadcrumb -->
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-contact py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Contact Us</h2>
            <ul class="breadcrumbs-custom-path mt-2 text-center">
                <li><a href="#url">Home</a></li>
                <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact Us </li>
            </ul>
        </div>
    </div>
</section>
<!-- //contact breadcrumb -->

 <!-- contact-form -->
 <?php $contact = get_field('contact_content'); ?>

 <section class="w3l-contact-main" id="contact">
   <div class="contact-infhny py-5">
     <div class="container py-lg-3">
       <div class="top-map">
         <div class="map-content-9">
         <h3 class="title-big text-center mb-2">
          <?php echo $contact['title'] ? $contact['title'] : 'Let&apos;s get in touch'; ?>
         </h3>
              <p class="mb-lg-5 mb-4 text-center">
                <?php echo $contact['body'] ? $contact['body'] : 'Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days.'; ?> 
              </p>
           <?php echo do_shortcode('[wpforms id="303" title="false"]')  ?>
         </div>
         <div class="cont-details">
           <ul class="address two">
             <li><span class="fa fa-map-marker" aria-hidden="true"></span>
             <?php echo $contact['address'] ? $contact['address'] : '#302, 5th Floor, ALHK-2247 Colendar ek, Settlers Lane, New York.'; ?>
             
              </li>
            <li><span class="fa fa-envelope" aria-hidden="true"></span>
              <a href="mailto:info@example.com">
                <?php echo $contact['email'] ? $contact['email'] : 'Company@example.com'; ?>
              </a></li>
              <li> <span class="fa fa-phone"></span>
                <a href="tel:+142 5897555">
                  <?php echo $contact['phone_number'] ? $contact['phone_number'] : '+142 5897555'; ?> 
                </a>
              </li>
           </ul>
         </div>
       </div>
     </div>
   </div>
   <!-- contact map -->
   <div class="map">
     <iframe
       src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.3059445135!2d-74.25986613799748!3d40.69714941774136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e3!4m0!4m0!5e0!3m2!1sen!2sin!4v1570181661801!5m2!1sen!2sin"
       allowfullscreen=""></iframe>
   </div>
   
   <!-- //contact map -->
 </section>
 <!-- //contact-form -->
 

<?php get_footer(); ?>