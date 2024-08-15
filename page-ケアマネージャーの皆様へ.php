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
      <span class="about-page--heading-primary--main">小さいことでもご相談、歓迎です</span>
      <span class="about-page--heading-primary--sub"></span>
    </h1>
    <div class="container-page-about">
      <p class="page-section">まだ要介護認定を受けていない方でもお気軽にご相談ください。</p>
    </div>

  </div>

</section>
<div class="generic-content__for-caremanager">
  <?php the_content(); ?>



</div>

<?php 
  

  get_footer();
  ?>