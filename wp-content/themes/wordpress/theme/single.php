<?php get_header(); ?>
<?php if (have_posts()) : the_post(); ?>

  <div class="single__container">
    <div class="article__header">
      <?php if (has_category()) : ?>
        <a><?php echo get_the_category_list(' '); ?></a>
      <?php endif; ?>
      <h1><?php the_title(); ?></h1>
      <ul class="flex__item tag__ul">
        <li class="single__tag"><?php echo get_the_date('Y-m-d'); ?></li>
      </ul>
    </div>
    <div class="article__eyecatch">
      <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail(); ?>
      <?php else : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
      <?php endif; ?>
    </div>

    <div class="article__content">

      <p> <?php the_content(); ?></p>



    </div>

  </div>
<?php endif; ?>

<?php get_footer(); ?>