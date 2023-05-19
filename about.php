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
                                    A Few words about us
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


<?php
get_footer()
?>