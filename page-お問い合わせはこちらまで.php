<?php

  get_header();
  ?>
<section class="header-about__contact">
  <a href="<?php echo site_url("/") ?>">
    <div class="header-about__logo-box">
      <img src="/wp-content/themes/dayservice-oyagamekogame/image/dayservice_logo.jpg" alt="logo" class="header__logo" />
    </div>
  </a>
  <div class="header-about__text-box">
    <h1 class="about-page--heading-primary">
      <span class="about-page--heading-primary--main">お問い合わせはフォームから</span>
      <!-- <span class="about-page--heading-primary--main">フォームから！</span> -->
      <span class="about-page--heading-primary--sub"></span>
    </h1>
    <div class="container-page-about">
    </div>

  </div>

</section>
<div class="generic-content__contact">
  <?php the_content(); ?>
</div>
<?php 

  get_footer();
  ?>