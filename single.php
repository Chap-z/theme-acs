<?php get_header();?>

    <main>
        <section class="wrap-article container">
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post();?>
                    <article class="article row justify-content-center">
                        <h1 class="article-title col-12"><?php the_title();?></h1>
                        <div class="infos-post col-12">
                            <p><?php the_time('j F Y')?> / <?php the_author()?></p>
                        </div>
                        <div class="categories-article col-12">
                            <p><?php the_category(', ')?></p>
                        </div>
                        <div class="content-post col-7">
                            <?php the_content();?>
                            
                        </div>

                        <div class="article-comments col-8">

                            <?php comments_template(); ?>

                        </div>
                    </article>
                <?php endwhile;?>
            <?php endif;?>
        </section>
    </main>
<?php get_footer();?>



