<?php
 
get_header();

if(have_posts()) :
  while (have_posts()) : the_post()?>
  
  <article class="page">
  <h2 class="title-about"><?php the_title(); ?></h2>
  <div class="bottom-title-about"></div>
  <div class="content-about"><?php the_content();?></div>
  </article>

  <?php
endwhile;

  else :
    echo '<p>هیچ بابەتێک نەدۆزرایەوە.</p>';
  endif;

  get_footer();
?>

