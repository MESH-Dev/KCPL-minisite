<?php get_header(); ?>

<div class="container section">
    <div class="contact-form">
        <div class="contact-form-header">
            <span class="contact-form-header-title">Why do you love Kanawha County Public Library?</span>
            <span class="contact-form-header-subtitle">Please take a few minutes to share your story with us.</span>
        </div>
        <div class="contact-form-body">
            <?php echo do_shortcode('[formidable id=2]'); ?>
        </div>
        <div class="contact-form-count">
            <span class="contact-form-count-callout">You are using <span class="contact-form-count-number" id="count"></span> <span class="contact-form-count-number">out of 300</span> characters.</span>
        </div>

        <div class="limit">
            <span class="limit-content">Please revise your story to be 300 characters or less.</span>
            <span class="limit-thank-you">Thank You.</span>
        </div>
    </div>
</div>

<div class="middle section">
    <span class="middle-text">Check out the reasons why others love the library</span>
    <span class="middle-icon"><i class="fa fa-angle-double-down"></i></span>
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
