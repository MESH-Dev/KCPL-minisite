<?php get_header(); ?>

<div class="container">
    <div class="contact-form">
        <div class="contact-form-header">
            <span class="title">Why do you love Kanawha County Library?</span>
            <span class="sub-title">Please take a few minutes to share your story with us.</span>
        </div>
        <div class="contact-form-body">
            <?php echo do_shortcode('[formidable id=2]'); ?>
        </div>

    </div>
</div>

<div class="middle">
    <span>Check out the reasons why others love the library
</div>

<div class="container">

    <?php $args = array('posts_per_page' => '-1');
          $the_query = new WP_Query( $args ); ?>

    <?php if ( $the_query->have_posts() ) : ?>

      <!-- the loop -->
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

       POSTINFO GOES HERE -the_title(), the_content(), custom fields etc

        <div class="post-content"><?php the_content() ?></div>

      <?php endwhile; ?>
      <!-- end of the loop -->

      <?php wp_reset_postdata(); ?>

    <?php else:  ?>
      <p><?php _e( 'Sorry, no posts.' ); ?></p>
    <?php endif; ?>


</div>

<?php get_footer(); ?>
