<?php get_header(); ?>

<!-- slider section -->
<section class=" slider_section position-relative">
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">

                <?php query_posts('showposts=5&cat=3');
                $i = 0; ?>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="carousel-item <?php if ($i == 0) {
                                                        echo 'active';
                                                        $i++;
                                                    }
                                                    ?>">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-box">
                                        <h1>
                                            <?php the_title(); ?> <br />
                                            <span>
                                                <?php do_action('plugins/wp_subtitle/the_subtitle', array(
                                                    'before'        => '<p class="subtitle">',
                                                    'after'         => '</p>',
                                                    'post_id'       => get_the_ID(),
                                                    'default_value' => ''
                                                )); ?>
                                            </span>
                                        </h1>
                                        <p>
                                            <?php the_content(); ?>
                                        </p>
                                        <div class="btn-box">
                                            <a href="<?php the_permalink(); ?>" class="btn-1">
                                                Повече
                                            </a>
                                            <a href="<?php bloginfo('template_directory'); ?>/контакти" class="btn-2">
                                                Свържете се
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>

                <!--
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="detail-box">
                                <h1>
                                    A Perfect Learning Center <br />
                                    <span>
                                        For Your Kids
                                    </span>
                                </h1>
                                <p>
                                    It is a long established fact that a reader will be distracted
                                    by the readable content of a page when looking at its layout.
                                    The point of using Lorem Ipsum is that it has a more-or-less
                                    normal distribution of letters, as
                                </p>
                                <div class="btn-box">
                                    <a href="" class="btn-1">
                                        Read More
                                    </a>
                                    <a href="" class="btn-2">
                                        Contact us
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>

    </div>
</section>
<!-- end slider section -->
</div>

<!-- offer section -->

<section style="background-color: #f7f7f7;" class="offer_section hero_next_section-margin layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                Какво предлагаме
            </h2>
            <p>
                Прдлжение тук
            </p>
        </div>
        <div class="row">



            <?php query_posts('showposts=6&cat=5'); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div class="col-md-6">
                        <div class="content-box">
                            <div class="img-box">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail();
                                }
                                ?>
                            </div>
                            <div class="detail-box">
                                <h6>
                                    <?php the_title(); ?>
                                </h6>
                                <p>
                                    <?php the_content(); ?>
                                </p>
                            </div>
                        </div>
                    </div>

            <?php
                endwhile;
            endif;
            ?>


            <!--
            <div class="col-md-6">
                <div class="content-box">
                    <div class="img-box">
                        <svg xmlns="http://www.w3.org/2000/svg" height="512pt" version="1.1" viewBox="-38 0 512 512.00142" width="512pt">
                            <g id="surface1">
                                <path d="M 435.488281 138.917969 L 435.472656 138.519531 C 435.25 133.601562 435.101562 128.398438 435.011719 122.609375 C 434.59375 94.378906 412.152344 71.027344 383.917969 69.449219 C 325.050781 66.164062 279.511719 46.96875 240.601562 9.042969 L 240.269531 8.726562 C 227.578125 -2.910156 208.433594 -2.910156 195.738281 8.726562 L 195.40625 9.042969 C 156.496094 46.96875 110.957031 66.164062 52.089844 69.453125 C 23.859375 71.027344 1.414062 94.378906 0.996094 122.613281 C 0.910156 128.363281 0.757812 133.566406 0.535156 138.519531 L 0.511719 139.445312 C -0.632812 199.472656 -2.054688 274.179688 22.9375 341.988281 C 36.679688 379.277344 57.492188 411.691406 84.792969 438.335938 C 115.886719 468.679688 156.613281 492.769531 205.839844 509.933594 C 207.441406 510.492188 209.105469 510.945312 210.800781 511.285156 C 213.191406 511.761719 215.597656 512 218.003906 512 C 220.410156 512 222.820312 511.761719 225.207031 511.285156 C 226.902344 510.945312 228.578125 510.488281 230.1875 509.925781 C 279.355469 492.730469 320.039062 468.628906 351.105469 438.289062 C 378.394531 411.636719 399.207031 379.214844 412.960938 341.917969 C 438.046875 273.90625 436.628906 199.058594 435.488281 138.917969 Z M 384.773438 331.523438 C 358.414062 402.992188 304.605469 452.074219 220.273438 481.566406 C 219.972656 481.667969 219.652344 481.757812 219.320312 481.824219 C 218.449219 481.996094 217.5625 481.996094 216.679688 481.820312 C 216.351562 481.753906 216.03125 481.667969 215.734375 481.566406 C 131.3125 452.128906 77.46875 403.074219 51.128906 331.601562 C 28.09375 269.097656 29.398438 200.519531 30.550781 140.019531 L 30.558594 139.683594 C 30.792969 134.484375 30.949219 129.039062 31.035156 123.054688 C 31.222656 110.519531 41.207031 100.148438 53.765625 99.449219 C 87.078125 97.589844 116.34375 91.152344 143.234375 79.769531 C 170.089844 68.402344 193.941406 52.378906 216.144531 30.785156 C 217.273438 29.832031 218.738281 29.828125 219.863281 30.785156 C 242.070312 52.378906 265.921875 68.402344 292.773438 79.769531 C 319.664062 91.152344 348.929688 97.589844 382.246094 99.449219 C 394.804688 100.148438 404.789062 110.519531 404.972656 123.058594 C 405.0625 129.074219 405.21875 134.519531 405.453125 139.683594 C 406.601562 200.253906 407.875 268.886719 384.773438 331.523438 Z M 384.773438 331.523438 " style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" />
                                <path d="M 217.996094 128.410156 C 147.636719 128.410156 90.398438 185.652344 90.398438 256.007812 C 90.398438 326.367188 147.636719 383.609375 217.996094 383.609375 C 288.351562 383.609375 345.59375 326.367188 345.59375 256.007812 C 345.59375 185.652344 288.351562 128.410156 217.996094 128.410156 Z M 217.996094 353.5625 C 164.203125 353.5625 120.441406 309.800781 120.441406 256.007812 C 120.441406 202.214844 164.203125 158.453125 217.996094 158.453125 C 271.785156 158.453125 315.546875 202.214844 315.546875 256.007812 C 315.546875 309.800781 271.785156 353.5625 217.996094 353.5625 Z M 217.996094 353.5625 " style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" />
                                <path d="M 254.667969 216.394531 L 195.402344 275.660156 L 179.316406 259.574219 C 173.449219 253.707031 163.9375 253.707031 158.070312 259.574219 C 152.207031 265.441406 152.207031 274.953125 158.070312 280.816406 L 184.78125 307.527344 C 187.714844 310.460938 191.558594 311.925781 195.402344 311.925781 C 199.246094 311.925781 203.089844 310.460938 206.023438 307.527344 L 275.914062 237.636719 C 281.777344 231.769531 281.777344 222.257812 275.914062 216.394531 C 270.046875 210.523438 260.535156 210.523438 254.667969 216.394531 Z M 254.667969 216.394531 " style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" />
                            </g>
                        </svg>
                    </div>
                    <div class="detail-box">
                        <h6>
                            safety first
                        </h6>
                        <p>
                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                            The point of using Lorem
                        </p>
                    </div>
                </div>
            </div>-->

        </div>
    </div>
</section>

<!-- end offer section -->

<!-- client section -->

<section class="client_section layout_padding">
    <div class="container layout_padding2-top">
        <div class="heading_container">
            <h2>
                Обратна връзка от родители
            </h2>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">


                <?php query_posts('showposts=6&cat=4');
                $i = 0; ?>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <div class="carousel-item <?php if ($i == 0) {
                                                        echo 'active';
                                                        $i++;
                                                    } ?>">
                            <div class="client_container layout_padding">
                                <div class="img-box">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail();
                                    }
                                    ?>
                                </div>
                                <div class="detail-box">
                                    <h4>
                                        <?php the_title() ?>
                                    </h4>

                                    <?php do_action('plugins/wp_subtitle/the_subtitle', array(
                                        'before'        => '<h6>',
                                        'after'         => '</h6>',
                                        'post_id'       => get_the_ID(),
                                        'default_value' => ''
                                    )); ?>

                                    <p>
                                        <?php the_content() ?>
                                    </p>
                                    <img src="<?php bloginfo('template_directory'); ?>/images/quote.png" alt="">
                                </div>
                            </div>
                        </div>

                <?php
                    endwhile;
                endif;
                ?>


                <!--
                <div class="carousel-item active">
                    <div class="client_container layout_padding">
                        <div class="img-box">
                            <img src="<?php bloginfo('template_directory'); ?>/images/client.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h4>
                                Rohali jonson
                            </h4>
                            <h6>
                                customer
                            </h6>
                            <p>
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                alteration in
                                some form, by injected humour, or randomised words which don't look even slightly believable. If you
                                are
                                going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
                                the
                                middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined
                            </p>
                            <img src="images/quote.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="client_container layout_padding">
                        <div class="img-box">
                            <img src="<?php bloginfo('template_directory'); ?>/images/client.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h4>
                                Rohali jonson
                            </h4>
                            <h6>
                                customer
                            </h6>
                            <p>
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                alteration in
                                some form, by injected humour, or randomised words which don't look even slightly believable. If you
                                are
                                going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
                                the
                                middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined
                            </p>
                            <img src="<?php bloginfo('template_directory'); ?>/images/quote.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="client_container layout_padding">
                        <div class="img-box">
                            <img src="<?php bloginfo('template_directory'); ?>/images/client.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h4>
                                Rohali jonson
                            </h4>
                            <h6>
                                customer
                            </h6>
                            <p>
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                alteration in
                                some form, by injected humour, or randomised words which don't look even slightly believable. If you
                                are
                                going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
                                the
                                middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined
                            </p>
                            <img src="<?php bloginfo('template_directory'); ?>/images/quote.png" alt="">
                        </div>
                    </div>
                </div>
            -->


            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
</section>

<!-- end client section -->

<!-- contact section -->

<section class="contact_section layout_padding">
    <div class="container ">
        <div class="heading_container ">
            <h2 class="">
                Свържете се
                <span>
                    с нас
                </span>

            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <?php echo do_shortcode('[contact-form-7 id="23" title="Форма за контакти 1"]'); ?>
                <!--<form action="#">
                    <div>
                        <input type="text" placeholder="Name" />
                    </div>
                    <div>
                        <input type="email" placeholder="Email" />
                    </div>
                    <div>
                        <input type="text" placeholder="Pone Number" />
                    </div>
                    <div>
                        <input type="text" class="message-box" placeholder="Message" />
                    </div>
                    <div class="d-flex  mt-4 ">
                        <button>
                            SEND
                        </button>
                    </div>
                </form>-->
            </div>
            <div class="col-md-6">
                <!-- map section -->
                <div class="map_section">
                    <?php echo do_shortcode('[wpgmza id="1"]'); ?>
                    <!--<div id="map" class="w-100 h-100"></div>-->
                </div>

                <!-- end map section -->
            </div>
        </div>
    </div>
</section>

<!-- end contact section -->

<?php get_footer(); ?>