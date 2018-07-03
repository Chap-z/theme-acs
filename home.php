<?php get_header();?>


    <main>
    <section class="container wrap-home">
        <div class="row">
            <div class="col-12">
              <h2>Les derniers articles</h2>
            </div>
        </div>
        <div class="row">
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post();?>
	                    <article class="post col-12 col-md-6" id="post-<?php the_ID();?>">
                          <div class="contour-article">
	                        <h3><?php the_title();?></h3>
	                        <div class="infos-post">
	                            <p><?php the_time('j F Y')?> / <?php the_author()?></p>
	                        </div>
	                        <div class="categories-article">
	                            <p><?php the_category(', ')?></p>
	                        </div>
	                        <div class="content-post">
                              <?php the_excerpt();?>
                              
	                        </div>
	                        <div class="more-info">
	                            <a href="<?php the_permalink();?>" title="<?php the_title();?>">en savoir plus</a>
                            </div>
                          </div>
	                    </article>
	                <?php endwhile;?>
            <?php endif;?>
      </div>
      </section>


    </main>
    <?php get_footer();?>

    </body>
</html>