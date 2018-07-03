<?php get_header();?>

    <main>
        <section class="wrap-category container">
            <div class="row">
                <div class="col-12">
                    <h1>Rubrique : <?php $cat = get_the_category();
                        $cat = $cat[0];
                        echo $cat->cat_name;?>
                    </h1>
                </div>
            </div>
        <?php

$title_page = get_the_title();
$cat_name = $cat->cat_name;
$my_posts = new WP_Query( array( 'category_name' => $cat_name, 'posts_per_page' => 10 ) );
?>
 <div class="row">
	<?php if ($my_posts->have_posts()): ?>
		<?php while ($my_posts->have_posts()): $my_posts->the_post();?>
				<article class="post col-12 col-md-6">
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
        <?php else: ?>
            <p>Aucune article a été trouvé.</p>
        <?php endif;?>
    </div>
        </section>
    </main>
<?php get_footer();?>