<?php get_header();?>

<section class="header-about">
    <a href="<?php echo site_url("/") ?>">
        <div class="header-about__logo-box">
            <img src="/wp-content/themes/dayservice-oyagamekogame/image/dayservice_logo.jpg" alt="logo" class="header__logo" />
        </div>
    </a>

    <div class="header-about__text-box">
        <h1 class="about-page--heading-primary">
            <span class="about-page--heading-primary--main">こがめブログ</span>
            <span class="about-page--heading-primary--sub"></span>
        </h1>
        <div class="container-page-about">
            <p class="page-section">日々の出来事や、介護のよもやま話などをブログに書いていきますね</p>
        </div>

    </div>
</section>

<section class="blog">
    <div class="generic-content">



        <div class="content">
            <div class="post-item__blog__archive">
                <h2 class="title__blog"><a href=" <?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </div>
            <div class="meta-box">
                <p class="author-name">Posted by <?php the_author(); ?> </p>
            </div>
            <?php the_content();?>
           
        </div>



    </div>
</section>



</div>
<!-- <?php 
  echo paginate_links();
?> -->
</div>

<?php get_footer();?>