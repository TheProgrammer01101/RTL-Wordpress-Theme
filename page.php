<?php
 
get_header();

if(have_posts()) :
  while (have_posts()) : the_post()?>
  
  <article class="page">
  <h2><?php the_title(); ?></h2>
  <?php the_content();?>
  </article>

  <?php
endwhile;

  else :
    echo '<p>هیچ بابەتێک نەدۆزرایەوە.</p>';
  endif;

  get_footer();
?>

