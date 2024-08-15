<?php

get_header();

?>

<section class="header">
  <div class="header__logo-box">
    <img src="/wp-content/themes/dayservice-oyagamekogame/image/dayservice_logo.jpg" alt="logo" class="header__logo" />
  </div>

  <div class="header__text-box">
    <h1 class="heading-primary">
      <span class="heading-primary--sub">これからも</span>
      <span class="heading-primary--sub">大切な人たちと</span>
      <span class="heading-primary--sub">このシマで</span>
      <span class="heading-primary--sub">暮らしていく</span>

    </h1>
    <a href="<?php echo site_url("/おやがめブログ"); ?>" class="btn btn--white btn--animated"><span
        class="btn-text">おやがめブログ</span></a>
  </div>
</section>
<!-- <hr class="hr-general"> -->

<!-- <section class="about-us">
  <div class="about-us-container wrapper">
    <h2 class="about-us__headline01">
      <span>私たちの使命</span>
    </h2>
    <h3 class="headline02">
      <span>これからも、大切な人たちと、</span><br><span>このシマで暮らせるように</span><br><span>全力でサポートします。</span>
    </h3>
    <p>私たちは、地域に根ざした高齢者施設として利用者様と、そのご家族が住み慣れた場所にいつまでも安心して暮らせるそのような居場所になれるよう取り組んでいきます</p>
  </div>
  <div class="about-us-container wrapper">

  </div>

</section> -->
<!-- <hr class="hr-general"> -->

<!-- <section class="section-stories">
  <div class="bg-video">
    <div class="bg-video--main u-center-text u-margin-bottom-big">
      <h2 class="heading-secondary">This is Oyagamekogame</h2>
    </div>
    <video class="bg-video__content" autoplay muted loop>
      <source src="/wp-content/themes/dayservice-oyagamekogame/image/ホームページ用携帯用ビデオ.mp4" type="video/mp4" />
    </video>
  </div>
</section> -->
<!-- <?php
  while(have_posts()) {
    the_post();
    $mapLocation = get_field('map_location');?>
<div class="acf-map front-page">
  <div class="marker" data-lat="<?php echo $mapLocation['lat'] ?>" data-lng="<?php echo $mapLocation['lng']; ?>">
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <?php echo $mapLocation['address']; ?>
  </div>
</div>
<?php } ?>
</div> -->





<?php get_footer() ?>

</body>

</html>