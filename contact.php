<?php 
/*
Template name: page-contact
*/
?>
<?php get_header();?>

    <main>
        <section class="wrap-contact container">
            <div class="row">
                <div class="col-12">
                    <h1><?php echo get_the_title(); ?></h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="content-contact col-12 col-sm-8">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>
    </main>
<?php get_footer();?>