<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="container">
        <div class="three columns">
          <div class="header-logo">
              <a href="<?php echo home_url(); ?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /></a>
          </div>
        </div>
        <div class="seven columns offset-by-one">
            <div class="header-text">
                <span class="header-text-information">For more than 100 years, Kanawha County Public Library has been providing vital library services to our community. We often hear stories from patrons about how the library impacts their life.</span>
                <span class="header-text-callout">We want to hear your story too.</span>
            </div>
        </div>
    </div>
</header>
