<?php
if (comments_open()) :
    wp_list_comments();
    comment_form();
endif;