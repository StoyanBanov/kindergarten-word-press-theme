<?php

/**
 * Template Name: About Template
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header()
?>



<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
?>

        <!-- about section -->
        <section class="about_section ">
            <div style="float: right;background: #EEEEEE; padding:20px; box-shadow: 1px 2px 10px 4px #888888; width:350px">
                <?php if (!dynamic_sidebar('right-sidebar')) : ?>

                <?php endif; ?>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="img-box">
                            <img src="<?php bloginfo('template_directory'); ?>/images/about-img.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="detail-box">
                            <div class="heading_container">
                                <h2>
                                    Няколко думи за нас
                                </h2>
                            </div>
                            <p>
                                <?php the_content() ?>
                            </p>

                            <!--<div>
                                <a href="">
                                    Read More
                                </a>
                            </div>-->

                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- end about section -->

<?php
    }
}
?>
<div style="background-color: darkgreen;">
    <h2 style="color: white; margin-left: 300px;">Ценоразпис</h2>
    <div style="display: flex;flex-direction: row; background: #f7f7f7;padding-left: 200px;padding-top: 20px;">
        <?php query_posts('showposts=8&cat=85'); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="col-md-3" style="width: 80%;margin-left: 50px;border-right: 2px solid white;">
                    <div class="info_logo">
                        <div>
                            <h3 style="text-transform: uppercase;">
                                <?php the_title(); ?>
                            </h3>
                        </div>
                        <p>
                            <?php the_content(); ?>
                        </p>
                    </div>
                </div>

        <?php
            endwhile;
        endif;
        ?>

    </div>

</div>


<section class="container-fluid footer_section">
    <p>
        &copy; 2019 All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
    </p>
</section>
<?php wp_footer(); ?>