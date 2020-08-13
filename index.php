<?php
 
get_header();

if(have_posts()) :?>
 <!-- Showing the posts and putting them into a container to be flex -->
 <div class="post-flex"> 

   <?php while (have_posts()) : the_post()?> 
   
    <article class="post">
        <h2 class="title-blog"><?php the_title(); ?></h2>

        <div class="excerpt">
          <?php the_excerpt();?> 
        </div> 

        <a class="readMore-btn" href="<?php the_permalink(); ?>">زیاتر بخوێنەوە</a>
        <span class="category"><?php the_category( '، ' ); ?></span>
    </article>

  <?php endwhile; ?>
  </div>

  <?php
  else :
    echo '<p>هیچ بابەتێک نەدۆزرایەوە.</p>';
  endif;

  get_footer();
?>

