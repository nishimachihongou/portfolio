<?php get_header();?>

</div><!-- .cover-home -->
<div class="ikemen">
    <h2><?php the_title();?></h2>
  <div class="otokomae">
    <!-- time --><?php echo get_the_date('Y-m-d'); ?><?php the_date(); ?></time>
    <!-- cate --><?php the_category(); ?>
    <!-- p327 --><?php if(has_post_thumbnail()): ?>
        <?php the_post_thumbnail('medium_large'); ?>
    <?php endif; ?>
     <?php the_content(); ?><!-- p328 -->
  </div>
</div><!-- ikemen -->

<?php get_footer(); ?>