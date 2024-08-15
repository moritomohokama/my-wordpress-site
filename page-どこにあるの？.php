<?php

  get_header();
  ?>
<section class="header-about">
        <a href="<?php echo site_url("/") ?>">
          <div class="header-about__logo-box">
            <img src="/wp-content/themes/dayservice-oyagamekogame/image/dayservice_logo.jpg" alt="logo" class="header__logo" />
          </div>
        </a>
  
        <div class="header-about__text-box">
          <h1 class="about-page--heading-primary">
            <span class="about-page--heading-primary--main">赤道小学校近く！</span>
            
          </h1>
          <div class="container-page-about">
          <!-- <p class="page-section">GoogleMapにてわかりにく場合はお気軽にご連絡ください。</p>
          <p class="page-section">tel:098-974-4530</p>
          <p class="page-section">e-mail:mandk0611@gmail.com</p> -->
          </div>
          
        </div>
      </section>

      <?php
  while(have_posts()) {
    the_post();
    $mapLocation = get_field('map_location');?>
   <div class="acf-map">
    <div class="marker" data-lat="<?php echo $mapLocation['lat'] ?>" data-lng="<?php echo $mapLocation['lng']; ?>">
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <?php echo $mapLocation['address']; ?>
    </div>
    </div>
  <?php } ?>
</div>
     
  <?php 

  get_footer();
  ?>