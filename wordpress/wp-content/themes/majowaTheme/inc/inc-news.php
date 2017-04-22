
<div class="row">
    <div class="news-container">
        <div class="main-text-container">
            <h1 class="h1-special">Taniec to nasza pasja!</h1>
        </div>
        <div class="news-box">
            <?php
            $arg=array(
                'posts_per_page' => 9,
                'post_type' => 'post',
                'category__not_in' => [9,10],
            );
            $last4POSTS = new WP_Query($arg);
            if ($last4POSTS ->have_posts()){
                while ( $last4POSTS ->have_posts()){
                    $last4POSTS->the_post();
                    require (TEMPLATEPATH . '/templateParts/frontPageNews.php');
                }
            }
            ?>
            <div class="clearfix"></div>
        </div>
        <button class="newsBox-slideBtn" id="news-slideRight"><i class="fa fa-angle-double-right fa-4x" aria-hidden="true"></i></button>
        <button class="newsBox-slideBtn" id="news-slideLeft"><i class="fa fa-angle-double-left fa-4x" aria-hidden="true"></i></button>
        <a class="blog-button" href="<?php echo get_home_url()?>">WIĘCEJ</a>
    </div>
</div>