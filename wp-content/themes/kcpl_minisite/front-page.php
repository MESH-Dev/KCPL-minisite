<?php get_header(); ?>

<div class="container section">
    <div class="contact-form">
        <div class="contact-form-header">
            <span class="contact-form-header-title">Why do you love Kanawha County Library?</span>
            <span class="contact-form-header-subtitle">Please take a few minutes to share your story with us.</span>
        </div>
        <div class="contact-form-body">
            <?php echo do_shortcode('[formidable id=2]'); ?>
        </div>

    </div>
</div>

<div class="middle section">
    <span>Check out the reasons why others love the library
</div>

<div class="container main-body">

    <?php $args = array('posts_per_page' => '-1');
          $the_query = new WP_Query( $args ); ?>

    <?php if ( $the_query->have_posts() ) : ?>

      <!-- the loop -->
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="four columns post-container">
                <div class="post" style="background-color:<?php the_field('background_color') ?>">
                    <div class="post-content">
                        <span>"<?php the_field('quote'); ?>"</span>
                    </div>
                </div>
                <div class="author">
                    <div class="post-author">
                        <span><?php the_title(); ?></span>
                    </div>
                </div>
            </div>

      <?php endwhile; ?>
      <!-- end of the loop -->

      <?php wp_reset_postdata(); ?>

    <?php else:  ?>
      <p><?php _e( 'Sorry, no posts.' ); ?></p>
    <?php endif; ?>

</div>

<?php get_footer(); ?>
