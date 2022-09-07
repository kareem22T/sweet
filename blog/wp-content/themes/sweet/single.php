<?php get_header(); ?>
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
?>
<div class="single-post">
    <div class="head container">
        <div>

            <h2 class="text-center">
                <?php the_title() ?>
                <hr>
            </h2>
            <div>
                <p>
                    <span>
                        <i class="fa-solid fa-user"></i>
                        By <?php the_author_posts_link() ?>
                    </span>
                    <span>
                        <i class="fa-solid fa-calendar"></i>
                        <?php the_time('F j, Y') ?>
                    </span>
                    <span>
                        <i class="fa-solid fa-message"></i>
                        <?php comments_popup_link('Zero Comments', 'One Comments', '% Comments', '', 'Comments Is Disabled'); ?>
                    </span>
                </p>

                <p>Categories: <?php the_category(' | ') ?></p>

                <p class="tags">
                    <?php
                            if (has_tag()) :
                                echo the_tags('tags: ', " | ", "");
                            else :
                                echo 'Tags: There are no tags';
                            endif;
                            ?>
                </p>

            </div>

        </div>

    </div>

    <div class="thumbnail container">
        <div>
            <?php the_post_thumbnail() ?>
        </div>
    </div>

    <div class="text container">
        <div>
            <?php the_content() ?>
        </div>
    </div>
</div>

<div class="container comments-parent">
    <?php
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>
</div>
<?php
    } // end while
} // end if
?>
</div>
</div>
<div class="turn-page container">
    <hr>
    <?php
    the_post_navigation(array(
        'next_text' => '<span class="meta-nav" aria-hidden="true">' . __('', 'twentyfifteen') . '</span> ' .
            '<span class="screen-reader-text">' . __('Next post:', 'twentyfifteen') . '</span> ' .
            '<span class="post-title">%title</span>',
        'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __('', 'twentyfifteen') . '</span> ' .
            '<span class="screen-reader-text">' . __('Previous post:', 'twentyfifteen') . '</span> ' .
            '<span class="post-title">%title</span>',
    ));
    ?>
</div>

<div class="topYbottom">
    <a href="#home"><i class='bx bx-chevron-up'></i></a>
    <a href="#footer"><i class='bx bx-chevron-down'></i></a>
</div>

<?php get_footer(); ?>