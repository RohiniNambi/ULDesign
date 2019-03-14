<?php 

//Slider for banner image
echo do_shortcode('[slick-slider category="3" dots="false"]');  

//include intro section
global $wp_query;
$intro_sec = $wp_query->get_intro();
?>

<article id="main-cont" class="main_container" itemprop="maincontentofpage">
  </br>
<div id="home-main" class="section_header home">
    <section id="scroll-to" class="home-introduction clearfix">
      <div class="introduction-inner">
        <p class="intro-heading"><strong><?php echo $intro_sec['title'];?></strong></p>
  <div class="home-action">
                  <p><?php echo $intro_sec['content'];?></p>
        </div>

      </div>

    </section>
</div>
</article>

<?php
//Slider for client logo

echo do_shortcode('[slick-carousel-slider category="2" sliderheight="151" arrows="true" image_size="original" slidestoshow="4" dots="false" autoplay="false" design="design-6"]'); ?>
