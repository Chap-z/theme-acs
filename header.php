<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
        <head profile="http://gmpg.org/xfn/11">
            <title>
                <?php bloginfo('name')?>
                <?php if (is_404()): ?> &raquo;
                <?php _e('Not Found')?>
                <?php elseif (is_home()): ?> &raquo;
                <?php bloginfo('description')?>
                <?php else: ?>
                <?php wp_title()?>
                <?php endif?>
            </title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta http-equiv="Content-Type" content="<?php bloginfo('html_type');?>; charset=<?php bloginfo('charset');?>" />
            <meta name="generator" content="WordPress <?php bloginfo('version');?>" /> <!-- leave this for stats -->
            <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url');?>" />
            <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url');?>" />
            <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url');?>" />
            <link rel="pingback" href="<?php bloginfo('pingback_url');?>" />
            <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
            <link href="http://localhost/wordpress_acs/wp-content/themes/theme-acs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" type="text/css" media="screen" />


            <?php wp_head();?>
            <?php wp_get_archives('type=monthly&format=link');?> <?php //comments_popup_script(); <?php wp_head(); ?>
        </head>

        <body>
        <header class="header">
    <div class="container">
      <div class="row">
        <div class="header-up col-12">
          <p>le blog des
          <img class="img-vcb" src="http://localhost/wordpress_acs/wp-content/themes/theme-acs/assets/images/logo-vcb.png">
          </p>
        </div>
      </div>
    </div>
    <div class="background-header">
      <div class="container">
        <div class="row">
          <h1>Lorem ipsum d'un titre <br>
            <span>top SEO</span>
          </h1>
        </div>
      </div>
    </div>
    <div class="border-nav">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="navbar navbar-expand-sm navbar-light" role="navigation">
              <div class="row">
              <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                  <?php
                    wp_nav_menu(array(
                      'theme_location' => 'primary',
                      'depth' => 2,
                      'container' => 'div',
                      'container_class' => 'collapse navbar-collapse',
                      'container_id' => 'bs-example-navbar-collapse-1',
                      'menu_class' => 'nav navbar-nav',
                      'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                      'walker' => new WP_Bootstrap_Navwalker(),
                    ));
                  ?>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
