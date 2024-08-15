<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body>
<header>
<div class="navigation">
      <input type="checkbox" class="navigation__checkbox" id="navi-toggle" />
      <label for="navi-toggle" class="navigation__button"
        ><span class="navigation__icon">&nbsp;</span>
        </label>
      <div class="navigation__background">&nbsp;</div>
      <nav class="navigation__nav">
        <ul class="navigation__list">
          <li class="navigation__item">
            <a href="<?php echo site_url("/おやがめこがめについて") ?>" class="navigation__link"><span>01</span>おやがめこがめについて</a>
          </li>
          <li class="navigation__item">
            <a href="<?php echo site_url("/どんなサービスを受けられますか？") ?>" class="navigation__link"><span>02</span>どんなサービスを受けれますか？</a>
          </li>
          <li class="navigation__item">
            <a href="<?php echo site_url("/どこにあるの？") ?>" class="navigation__link"><span>03</span>どこにあるの？</a>
          </li>
          <li class="navigation__item">
            <a href="<?php echo site_url("/お問い合わせはこちらまで") ?>" class="navigation__link"><span>04</span>お問い合わせはこちらまで</a>
          </li>
          <li class="navigation__item">
            <a href="<?php echo site_url("/ケアマネージャーの皆様へ") ?>" class="navigation__link"><span>05</span>ケアマネージャーみなさまへ</a>
          </li>
          <li class="navigation__item">
            <a href="<?php echo site_url("/ケアマネージャーの皆様へ") ?>" class="navigation__link"><span>06</span>こがめ３号ニュース（ブログ）</a>
          </li>
        </ul>
      </nav>
    </div>
   
    
</header>
