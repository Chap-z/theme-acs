<?php 
/*
Template name: liste-auteurs
*/
?>

<?php get_header();?>

<main>
    <section class="wrap-page container">
        <div class="row">
            <div class="col-12">
                <h1><?php echo get_the_title(); ?></h1>
            </div>
        </div>

            
            <?php 
            
            $display_admins = false;
            $order_by = 'post_count'; // 'nicename', 'email', 'url', 'registered', 'display_name', or 'post_count'
            $order = 'DESC';
            $role = ''; // 'subscriber', 'contributor', 'editor', 'author' - leave blank for 'all'
            $avatar_size = 161;
            $hide_empty = false; // hides authors with zero posts
        
            if(!empty($display_admins)) {
                $blogusers = get_users('orderby='.$order_by.'&role='.$role);
            } else {
        
            $admins = get_users('role=administrator');
            $exclude = array();
            
            foreach($admins as $ad) {
                $exclude[] = $ad->ID;
            }
        
            $exclude = implode(',', $exclude);
            $blogusers = get_users('exclude='.$exclude.'&orderby='.$order_by.'&order='.$order.'&role='.$role);
            }
        
            $authors = array();
            foreach ($blogusers as $bloguser) {
            $user = get_userdata($bloguser->ID);
        
            if(!empty($hide_empty)) {
                $numposts = count_user_posts($user->ID);
                if($numposts < 1) continue;
                }
                $authors[] = (array) $user;
            }

            echo '<ul class="authors-list row">';
            foreach($authors as $author) {
                $display_name = $author['data']->display_name;
                $avatar = get_avatar($author['ID'], $avatar_size);
                $author_profile_url = get_author_posts_url($author['ID']);
        
                echo '<li class="single-author col-12 col-sm-6 col-md-4 col-lg-3">';
                echo '<div class="author-img"><a href="', $author_profile_url, '">', $avatar , '</a></div>';
                echo '<div class="author-name"><a href="', $author_profile_url, '" class="author-link">', $display_name, '</a></div>';
                echo '</li>';
                }
                echo '</ul>';

            ?>

        </div>
    </section>
</main>
<?php get_footer();?>