<?php 
/* Template Name: menu
*/
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body>
  <!-- <div class="shutter"></div> -->
  <div class="superwrapper-menu animsition">
    <header id="header" class="header">
      <div class="mobile-container">
        <div class="logo__img">
          <a class="animsition-link" href="<?php echo esc_url( home_url('/')); ?>">
            <div class="logo"></div>
          </a>
        </div>
        <div class="mobile-button">
          <button class="mobile-menu__btn">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
      <!-- /.mobile-container -->
      <div class="pc-container">
        <div class="pc-header">
          <ul class="pc-header__list">
            <li class="pc-header__item"><a class="animsition-link" href="<?php echo esc_url( home_url('/')); ?>">top</a></li>
            <li class="pc-header__item"><a class="animsition-link" href="<?php echo esc_url( home_url('/menu')); ?>">menu</a></li>
            <li class="pc-header__item"><a class="animsition-link" href="<?php echo esc_url( home_url('/news')); ?>">news</a></li>
          </ul>
        </div>
      </div>
      <!-- /.pc-container -->
      <nav class="sp-navbtn">
        <ul class="sp-navbtn__container">
          <li><a href="tel:092-686-7954"><i class="icon-tel"></i></a></li>
          <li><a target="_blank" href="https://www.hotpepper.jp/"><i class="icon-net"></i></a></li>
          <li><a href="https://goo.gl/maps/CyWuFwBDtuB9U6Ld7" target="_blank"><i class="icon-map"></i></a></li>
        </ul>
      </nav>
      <!-- /.sp-navbtn -->
    </header>
    <!-- /#header -->
    <div id="c-top" class="c-top">
        <div class="c-top__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/home/paella@pc.jpg" alt="">
        </div>
        <h1 class="c-top__tit clip-js2 left">
          <span class="c-txt-lr">menu</span>
        </h1>
    </div>
    <!-- /#top -->
    <div id="c-menu" class="c-menu">
      <div class="c-container appear up">
        <div class="pdf-link">
          <a href="<?php echo get_template_directory_uri(); ?>/images/" target="_blank" rel="noopener noreferrer">PDFで見る</a>
        </div>
        <div class="menu-contents__list item">
          <div class="tab-panel">
            <!--tab-->
            <ul class="tab-group">
              <li class="tab tab-A is-active">Lunch</li>
              <li class="tab tab-B">Dinner</li>
              <li class="tab tab-C">Drink</li>
            </ul>
            <!--tab-contents-->
            <div class="panel-group">
              <div class="panel lunch is-show">
                <div class="panel__item">
                  <div class="panel__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
                  </div>
                  <div class="panel__txt">
                    <p class="name">Aランチ</p>
                    <p class="price">¥1,500</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
                  </div>
                  <div class="panel__txt">
                    <p class="name">Bランチ</p>
                    <p class="price">¥1,800</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
                  </div>
                  <div class="panel__txt">
                    <p class="name">Cランチ</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
                  </div>
                  <div class="panel__txt">
                    <p class="name">Dランチ</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
                  </div>
                  <div class="panel__txt">
                    <p class="name">Eランチ</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
                  </div>
                  <div class="panel__txt">
                    <p class="name">Fランチ</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
                  </div>
                  <div class="panel__txt">
                    <p class="name">Gランチ</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
              </div>
              <!-- panel-lunch END -->
              <div class="panel dinner">
                <div class="panel__item">
                  <div class="panel__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
                  </div>
                  <div class="panel__txt">
                    <p class="name">Aメニュー</p>
                    <p class="price">¥1,500</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
                  </div>
                  <div class="panel__txt">
                    <p class="name">Bメニュー</p>
                    <p class="price">¥1,800</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
                  </div>
                  <div class="panel__txt">
                    <p class="name">Cメニュー</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
                  </div>
                  <div class="panel__txt">
                    <p class="name">Dメニュー</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
                  </div>
                  <div class="panel__txt">
                    <p class="name">Eメニュー</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
                  </div>
                  <div class="panel__txt">
                    <p class="name">Fメニュー</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
                  </div>
                  <div class="panel__txt">
                    <p class="name">Gメニュー</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
              </div>
              <!-- panel-dinner END -->
              <div class="panel drink">
                <div class="panel__item">
                  <div class="panel__txt">
                    <p class="name">Aドリンク</p>
                    <p class="price">¥1,500</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__txt">
                    <p class="name">Bドリンク</p>
                    <p class="price">¥1,800</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__txt">
                    <p class="name">Cドリンク</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__txt">
                    <p class="name">Dドリンク</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__txt">
                    <p class="name">Eドリンク</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__txt">
                    <p class="name">Fドリンク</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
                <div class="panel__item">
                  <div class="panel__txt">
                    <p class="name">Gドリンク</p>
                    <p class="price">¥2,500</p>
                  </div>
                </div>
              </div>
              <!-- panel-drink END -->
            </div>
          </div>
        </div>
        <p class="c-txt-xs">※上記以外にも旬のものを多数ご用意しております。</p>
      </div>
    </div>
    <!-- /c-menu -->
    <footer class="p-footer">
      <div class="c-container">
        <div class="p-footer__sns">
          <div class="sns-insta">
            <a target="_blank" class="sns-link" href="https://www.instagram.com/"><i></i></a>
          </div>
          <div class="sns-fb">
            <a target="_blank" class="sns-link" href="https://www.facebook.com/"><i></i></a>
          </div>
        </div>
        <div class="c-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/riv_logo.png" alt="">
        </div>
        <div class="copyright">
          &copy; RivRound.inc
        </div>
      </div>
    </footer>
    <!-- /#footer -->
    <div class="mobile-menu">
      <nav class="mobile-menu__nav">
        <ul class="mobile-menu__list">
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/')); ?>">top</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/menu')); ?>">menu</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/news')); ?>">news</a>
          </li>
        </ul>
        <div class="reserve-btn-wrap">
          <div class="reserve-btn-tel">
            <h4>電話予約はこちら</h4>
            <div class="reserve-btn">
              <a href="tel:092-686-7954"><span>092-686-7954</span></a>
            </div>
          </div>
          <div class="reserve-btn-net">
            <h4>ネット予約はこちら</h4>
            <div class="reserve-btn">
              <a href="https://beauty.hotpepper.jp/" target="_blank"><span>ONLINE RESERVE</span></a>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <!------ /.mobile-menu ----->
  </div>
  <!-- .superwrapper -->
  <?php get_template_part('includes/c-footer'); ?>
</body>

</html>