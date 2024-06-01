<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>愛媛県新居浜太鼓祭り</title>
    <meta name="愛媛県の新居浜太鼓祭りの紹介ページ">
    <link rel="icon"type="images/png" href="<?php echo esc_url(get_theme_file_uri('/images/favicon.png')); ?>">
    <?php wp_head(); ?>
</head>
<body>
<?php wp_body_open(); ?>
    <!-- <div id="fusa">
        <p class="fusahidari"><img src="images/fusaanime-migi.gif" alt=""></p>
        <p class="fusamigi"><img src="images/fusaanime-migi.gif" alt=""></p>
    </div> -->
    <div class="cover cover-home">
        <header class="page-header wrapper">
            <div class="hamburger" id="open_nav">
                <img src="<?php echo esc_url(get_theme_file_uri('/images/open.png')); ?>"></div>
                </div>
          <h1 class="align-center">
         
          <div class="flexslider" id="taiko-slider">
            <ul class="slides">
                <li><img src="<?php echo esc_url(get_theme_file_uri('/images/taiko201.jpg'));?>"></li> 
                <li><img src="<?php echo esc_url(get_theme_file_uri('/images/taiko203.jpg'));?>" ></li>
                <li><img src="<?php echo esc_url(get_theme_file_uri('/images/taiko202.jpg'));?>"></li>
                <li><img src="<?php echo esc_url(get_theme_file_uri('/images/taiko100.jpg'));?>"></li>
            </ul>
          </div>    
          <!-- <img src="<?php echo esc_url(get_theme_file_uri('/images/taiko100.jpg'));?>"
              alt="新居浜太鼓祭りのイメージ写真" class="niihama"> -->
          </h1>
        </header>
     <nav>

    <!-- <ul class="main-nav"> -->
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'main-menu',
                'container' => '',
                'menu_class' =>'main-nav'
            )
            );
            ?>
       <!-- <li class="ldlfv"><a href="index.html"><span>ホーム</span></a></li>
    //   <li class="ldlfv"><a href="burogu.html"><span>このブログについて</span></a></li>
    //   <li class="ldlfv"><a href="rekishi.html"><span>太鼓台の歴史</span></a></li>
    //   <li class="ldlfv"><a href="kozou.html"><span>太鼓台の構造</span></a></li>
    //   <li class="ldlfv"><a href="buyuden.html"><span>新居浜太鼓祭り武勇伝</span></a></li> -->

        
    <!-- </ul> -->
 </nav>
 <div id="fusa1">
        <p class="fusahidari"><img src="<?php echo esc_url(get_theme_file_uri('/images/fusaanime-migi.gif'));?>" alt=""></p>
</div>
 <div id="fusa2">
        <p class="fusamigi"><img src="<?php echo esc_url(get_theme_file_uri('/images/fusaanime-migi.gif'));?>" alt=""></p>
</div>
