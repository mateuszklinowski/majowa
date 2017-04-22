<div class="row">
    <div class="instructors-container">
        <h2>Instruktorzy</h2>
        <div class="instructors-box">

            <?php
            $arg=array(
                'post_type' => 'post',
                'category__in' => [10],
            );
            $instructors = new WP_Query($arg);
            if ($instructors ->have_posts()){
                while ( $instructors ->have_posts()){
                    $instructors ->the_post();
                    require (TEMPLATEPATH . '/templateParts/instruktor.php');
                }
            }
            ?>
        </div>
    </div>
</div>