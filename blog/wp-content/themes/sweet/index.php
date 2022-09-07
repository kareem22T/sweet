<!-- send latest posts response -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['getLatestPosts']) && $_POST['getLatestPosts'] == true) {

        // fix ajax problem
        $parse_uri = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
        require_once($parse_uri[0] . 'wp-load.php');

        // Query Arguments
        $recent_posts = wp_get_recent_posts(array(
            'numberposts' => 6, // Number of recent posts thumbnails to display
            'post_status' => 'publish' // Show only the published posts
        ));

        // return $recent_posts;
        foreach ($recent_posts as $post_item) :

            $theLatestPost = '<div class="swiper-slide">';

            $theLatestPost .=   '<div class="thumbnail">';
            $theLatestPost .=       get_the_post_thumbnail($post_item['ID'], 'full');

            $theLatestPost .=       '<p class="details">';

            $theLatestPost .=           '<span>' . date("d M", strtotime($post_item['post_date'])) . '</span>';

            $theLatestPost .=           ' | ';

            $theLatestPost .=           '<span>';
            $theLatestPost .=               $post_item['comment_count'] <= 1 ?  $post_item['comment_count'] .
                ' Comment' : $post_item['comment_count'] . ' Comments';
            $theLatestPost .=           '</span>';

            $theLatestPost .=       '</p>';

            $theLatestPost .=           '<h1 class="title">' . $post_item['post_title'] . '</h1>';
            $theLatestPost .=   '</div>';

            $theLatestPost .=   '<div class="text">';
            $theLatestPost .=       '<p>' . get_the_excerpt($post_item['ID']);
            $theLatestPost .=       '<a href="' . get_permalink($post_item['ID']) . '" target="_blanck">';
            $theLatestPost .=           'READ MORE';
            $theLatestPost .=       '</a></p>';
            $theLatestPost .=   '</div>';

            $theLatestPost .= '</div>';

            echo $theLatestPost;

        endforeach;
    }
} else {
?>

<?php get_header(); ?>
<?php
    $img = 'http://localhost/sweet-2/blog/wp-content/themes/sweet/images'
    ?>

<header>
    <div class="container">
        <div class="header">

            <div class="text">
                <h1>OUR BLOG</h1>
                <p>
                    Placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc
                    vel mauris ultricies, vest ibulum orci eget,Ibu lum orci eget, viverra elit. ellus ac sodales felis
                    tiam non metus.
                </p>
                <form action="">
                    <input type="text" name="search" placeholder="Write Your Search ....">
                    <input type="submit" value="Search">
                </form>
            </div>

            <div class="img">
                <img src="<?php echo $img ?>/header-blog-main.png?v=1.03" alt="">
                <div>
                    <div>
                        <img src="<?php echo $img ?>/header-1.jpg" alt="">
                    </div>
                    <div>
                        <img src="<?php echo $img ?>/header-2.jpg" alt="">
                    </div>
                </div>
                <div>
                    <div>
                        <img src="<?php echo $img ?>/header-3.jpg" alt="">
                    </div>
                    <div class="ray">
                        <img src="<?php echo $img ?>/ray.svg" class="img-ray" alt="">
                    </div>
                </div>
            </div>

        </div>
        <div class="main-post">
            <div></div>
        </div>
    </div>
</header>

<div class="side-bar">
    <div class="container">
        <div class="cat">
            <ul>
                <li>Categories:</li>
                <li>Our Pastries</li>
                <li>Events and News</li>
                <li>Catering</li>
                <li>Updates</li>
                <li>Our Team</li>
                <li>Recipes</li>
                <li>Low Sugar Pastries</li>
            </ul>
        </div>

    </div>
</div>

<div class="posts">
    <div class="container">
        <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
            ?>

        <div class="post">

            <div class="head">
                <div class="thumbnail">
                    <?php the_post_thumbnail() ?>
                </div>

                <?php
                            $class = substr(the_title('', '', false), 0, 10) == 'Who are we' ? 'main' : ''
                            ?>

                <h2 class="<?php echo $class ?>">
                    <a href="<?php the_permalink() ?>">
                        <?php the_title() ?>
                    </a>
                </h2>

                <div class="short">
                    <?php the_excerpt() ?>
                </div>


            </div>

            <p class="details">
                <span>
                    By <?php the_author_posts_link() ?>
                </span>
                <span>
                    <?php the_time('F j, Y') ?>
                </span>
                <span>
                    <?php comments_popup_link('Zero Comments', 'One Comments', '% Comments', '', 'Comments Is Disabled'); ?>
                </span>
            </p>
            <a href="<?php the_permalink() ?>" class="read-more">
                READ MORE
            </a>

            <!-- <p>Categories: <?php //the_category(' | ')
                                            ?></p>
            <p class="tags">
                <?php
                    // if (has_tag()) :
                    //     echo the_tags('<i class="fa-solid fa-tags"></i> ', " | ", "");
                    // else :
                    //     echo '<i class="fa-solid fa-tags"></i> There are no tags';
                    // endif;
                ?>
            </p> -->
        </div>

        <?php
                } // end while
            } // end if
            ?>
    </div>
</div>

<!-- <div class="turn-pages">
    <?php
    // if (!get_next_posts_link() && !get_previous_posts_link()) :
    // else :
    //     if (get_previous_posts_link()) :
    //         previous_posts_link('<i class="fa-solid fa-angles-left"></i> Prev');
    //     else :
    //         echo '<span><i class="fa-solid fa-angles-left"></i> Prev</span>';
    //     endif;
    //     if (get_next_posts_link()) :
    //         next_posts_link('Next <i class="fa-solid fa-angles-right"></i>');
    //     else :
    //         echo '<span>Next <i class="fa-solid fa-angles-right"></i></span>';
    //     endif;
    // endif;

    ?>

</div> -->
<div class="container">
    <div class="show-more">
        <a href=""><i class='bx bx-plus'></i> more articles</a>
    </div>

</div>

<div class="topYbottom">
    <a href="#home"><i class='bx bx-chevron-up'></i></a>
    <a href="#footer"><i class='bx bx-chevron-down'></i></a>
</div>

<?php get_footer();
} ?>