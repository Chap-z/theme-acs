<?php get_header();?>

    <main>
        <section class="wrap-author container">
		<ul>
			<?php the_content();?>
            <?php
                if (isset($_GET['author_name'])):
                    $curauth = get_userdatabylogin($author_name);
                else:
                    $curauth = get_userdata(intval($author));
                endif;
            ?>

            <h2>Les articles de <?php echo $curauth->nickname; ?> sur <a href="http://www.https://wpchannel.com/">WordPress Channel</a> :</h2>

            <?php while (have_posts()): the_post();?>

            <h3> <a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title();?>"><?php the_title();?></a><h3>
            <?php the_time('j/n/Y');?></span>, <?php $category = get_the_category();
                echo $category[0]->cat_name;?>

                <?php endwhile;
                    wp_reset_query();?>

                <?php global $wp_query;
                    $curauth = $wp_query->get_queried_object();
                ?>
                <p>This is <?php echo $curauth->nickname; ?>'s page</p>

		</ul>


        </section>
    </main>
<?php get_footer();?>