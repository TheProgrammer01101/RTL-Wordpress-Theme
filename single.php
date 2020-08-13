<?php
 
get_header();

if(have_posts()) :
  while (have_posts()) : the_post()?>
  
  <article class="post-single">
  <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <div class="content"><?php the_content();?></div>
  </article>

  <?php
endwhile;

  else :
    echo '<p>هیچ بابەتێک نەدۆزرایەوە.</p>';
  endif;

  get_footer();
?>

